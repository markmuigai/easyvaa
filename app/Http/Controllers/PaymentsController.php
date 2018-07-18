<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use Auth;
use App\Quote;
use App\Event;

class PaymentsController extends Controller
{
    //
    public function store(Request $request, Quote $quote)
    {
    	$quote = Quote::find($quote->id);
    	$payment = new Payment;
    	$payment->user_id = Auth::id();
        $payment->quote_id = $quote->id;
    	$payment->amount =  request('amount');
    	$payment->save();
        //dd($payment);
    	return redirect('/mypayments');
    	
    }

    public function mypayments()
    {
        $mypayments = Payment::where('user_id', Auth::id())->get();
        return view('payment.mypayments', compact('mypayments'));
    }

    public function mypayment(Event $event, Quote $quote)
    {

        $mypayment = Payment::orderBy('created_at', 'desc')->first();
        return view('payment.mypayment', compact('mypayment', 'event'));

    }
}
