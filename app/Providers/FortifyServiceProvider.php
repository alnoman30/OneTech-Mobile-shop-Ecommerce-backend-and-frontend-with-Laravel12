<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::registerView(function () {
        return view('auth.register');
        });

        Fortify::loginView(function () {
        return view('auth.login');
        });
    Fortify::authenticateUsing(function (Request $request) {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return null;
        }

        // Check if password matches
        if (!Hash::check($request->password, $user->password)) {
            return null;
        }

        // Check if this is admin login attempt
        $isAdminLogin = $request->has('is_admin_login') && $request->is_admin_login == '1';

        if ($isAdminLogin) {
            // Allow only if user is admin
            return $user->is_admin ? $user : null;
        } else {
            // Normal user login, prevent admin login here
            return !$user->is_admin ? $user : null;
        }
    });

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }


    protected function checkRoleAccess(User $user, Request $request)
    {
        $isAdminLogin = $request->input('is_admin_login', false);

        if ($isAdminLogin) {
            return $user->user_role_type === 'admin';
        } else {
            return $user->user_role_type !== 'admin';
        }
    }
    
}
