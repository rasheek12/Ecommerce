<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('site.pages.checkout');
    }
    public function saveEmail(Request $request)
    {
        $request->validate([
            'email'=> 'required|email'
        ]);
        session()->put('checkout_email',$request->email);
       
        return redirect('/payment');

    }
}
