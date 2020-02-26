<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe(){
        return view('stripe/index');
    }

    public function stripePost(Request $request){
       Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 50,
                "currency" => "usd",
                "source" => $request->stripeToken,
               
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }

}
