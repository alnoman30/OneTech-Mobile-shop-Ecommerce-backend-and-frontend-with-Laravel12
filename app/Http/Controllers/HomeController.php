<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Dashboard(){
        if(Auth::id()){
            $usertype = Auth::user()->is_admin;
            
            if( $usertype == 1){
                return view('admin.dashboard');
            }
            elseif($usertype == 0){
                return view('user.dashboard');
            }
            else{
                return redirect()->route('login');
            }
        }
    }
}
