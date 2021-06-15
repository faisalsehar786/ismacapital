<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
// use App\Models\BitcoinValuesApi;
class TestingController extends Controller
{
	public function index()
	{
		return view('testing');
	}
	public function store(Request $request)
	{
		$bitcoin_amount=$request->input('bitcoin_amount');

		$bitcoin_converted_amount=$request->input('bitcoin_converted_amount');
		$bitcoin_convert_to=$request->input('bitcoin_convert_to');
		$payment_method=$request->input('payment_method');
		$email_id=$request->input('email_id');

		return view('profile')->with('bitcoin_amount',$bitcoin_amount)->with('bitcoin_converted_amount',$bitcoin_converted_amount)->with('bitcoin_convert_to',$bitcoin_convert_to)->with('payment_method',$payment_method)->with('email_id',$email_id);



			// echo $bitcoin_amount."<br>".$bitcoin_converted_amount."<br>".$bitcoin_convert_to."<br>".$payment_method."<br>".$email_id;
	}
}