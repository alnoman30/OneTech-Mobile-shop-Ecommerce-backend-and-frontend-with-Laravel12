<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscriber(){
        $subscribers = Subscriber::latest()->paginate(10);
        return view('admin.subscriber.subscriber', compact('subscribers'));
    }

    public function subscriber_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        return response()->json([
        'message' => 'You have successfully subscribed to our newsletter.'
    ]);
    }
}
