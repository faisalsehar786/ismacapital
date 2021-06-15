<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\BitcoinValuesApi;
use Session;
use DB;
use App\Recived_Orders;
use App\User;
use Auth;
use App\MetaTag;
use Mail;
use App\Review;
use Illuminate\Support\Facades\Hash;
use App\SettingsAdmin;
class HomeController extends Controller
{




   public function get_all_user_data()
    {
      User::where('admin_view','no')->update(['admin_view'=>'yes']);
      return view('admin.users.dashboard');
    }




     public function get_all_user_data_ajax()
    {
      return datatables()
                ->of(
                    User::orderBy('id', 'DESC')
                        ->get()
                )->addColumn(
                    'status',
                    function ($data) {
                        if ($data->role == 1) {
                            $label = '<span class="label label-danger">SuperAdmin</span>';
                        } else {
                            $label = '<span class="label label-success">User</span>';
                        }

                        return $label;
                    }
                )->addColumn(
                    'action',
                    function ($data) {
                        $button = '<a  href="' . route('edit_user_value', ['id' => $data->id]) . '">
                        <i class="halflings-icon  edit"></i>  
                      </a>
                      <a class="deleteorderpay" href="#" del-id=' . $data->id . '>
                        <i class="halflings-icon  trash"></i> 
                      </a>';
                        return $button;
                    }
                )->rawColumns(['action', 'status'])
                ->make(true);
    }






 public function edit_user_value($id)
   {
    

     
      return view('admin.users.edit')->with('all_data',User::where('id',$id)->first());
   }



 public function updateuser_data(Request $request)



   {

      
       
User::find($request->uid)->update(['name'=>$request->name,'email'=> $request->email,'password'=> Hash::make($request->password)]);

       

      
     
    

    
      return redirect()->back();
   }

 


    public function del_user_ajax(Request $request)
    {

 
      $delorp = User::where('id',$request->payid_id);
        $delorp->delete();
        if ($delorp) {
            return response()->json(['status' => 'ok', 'id' => $request->payid_id]);
        } else {
            return response()
                ->json(['status' => 'error']);
        }

      
    }


    public function index()
    {
      

      $Bit_Cry_Prices=BitcoinValuesApi::paginate(20);
      return view('layout')->with('View_Bit_Cry_Prices',$Bit_Cry_Prices);
     
    }


public function buy()
    {
      
   $Bit_Cry_Prices=BitcoinValuesApi::paginate(20);
     
      return view('buy')->with('View_Bit_Cry_Prices',$Bit_Cry_Prices);
     
    }


    public function sell()
    {
      
   $Bit_Cry_Prices=BitcoinValuesApi::paginate(20);
    
      return view('sell')->with('View_Bit_Cry_Prices',$Bit_Cry_Prices);
     
    }



   public function converter(Request $request){


    $url="https://www.blockchain.com/prices/api/coin-list-page?limit=100&tsym=".$request->currencyType."";
   $Bit_Cry_Prices=Http::get($url)->json();
    

   foreach ($Bit_Cry_Prices['Data'] as $value) {

  
   foreach ($value['RAW'][$request->currencyType] as $key2 => $value2) {
    if ($key2=='FROMSYMBOL'  && $key2='PRICE' && $value2==$request->coinType) {
     
      

     return json_encode($value['RAW'][$request->currencyType]);
    
    }
   }
    
   }


    
   } 
   public function edit_commission_fee($id)
   {
     $data=DB::select("select* from commission_values where id='$id'");
      return view('admin.edit_commission_fee')->with('all_data',$data);
   }
   public function update_commission_fee(Request $req,$id)
   { 


   $settings=SettingsAdmin::find($id);
    // dd($settings);
$settings->update($req->all());
   

      return redirect('/dashboard')->with('message','Settings Update Successfully');
   }

    public function show_dashboard()
    {
      $data=DB::select('select* from commission_values');
    	return view('admin.dashboard')->with('all_data',$data);
    }

    public function admin_login()
    {

      return view('admin_login');
    }
    public function api_index()
    {
      return view('profile');
    }

//make order 
    public function make_order(Request $request)
    {





  Session::put('coinType',$request->coniType);
  

  Session::put('currencyType',$request->bitcoin_convert_to_currency);

  Session::put('convertedAmount', $request->bitcoin_converted_amount);

 Session::put('finalbtcVal', $request->finalbtcVal);
  


      $payment_method=$request->paymentVal;
      if($request->paymentVal=='paypal')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='bank_wire')
      {

        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }else if($request->paymentVal=='bTransfer')
      {

        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }else if($request->paymentVal=='cashDeposit')
      {

        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data')); 
      }else if($request->paymentVal=='westren_union')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='perfect_money')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='payza')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='payoneer')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
        // echo $request->payoneer_payoneer_email;
      }
      else if($request->paymentVal=='webmoney')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='okpay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='skrill')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='nettler')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='dash')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='money_gram')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='credit_card')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='instaforex')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='solid_trust_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='us_bank')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));
        return view('profile')->with('order_data',Session::get('order_data'));

      }
      else if($request->paymentVal=='advcash')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
        // echo $request->advcash_wallet_id;
      }
      else if($request->paymentVal=='alipay_china')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
        // echo $request->alipaychina_email_id;
      }
      else if($request->paymentVal=='paysafecard')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='onecard')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='sofort')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='qivi_wallet')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='entromoney')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='mobile_wallet')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='wordremit')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='mobile_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='capital_one')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='apple_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='chase_quick_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='transfer_wise')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='venmo_mobile_payment')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='xoom_money_transfer')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='swift_transfer')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='direct_bank_deposit')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='buy_virtual_card')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile')->with('order_data',Session::get('order_data'));
      }
      else
      {

      }
      // dd($request->all());
    }




   //make order 
   



 public function confirm_order(Request $request)
    {


 
   $request->validate([
    'order_number' => 'required|unique:recived_order_tbl'
    ]);
   

    $invoice='';
      
      if ($request->hasFile('invoice')) {
        $image = $request->file('invoice');
        $invoice = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/invoice');
        $image->move($destinationPath, $invoice);

    }


   

     $insertArray=[];
      if ($request->paymentVal=='paypal') {
        $insertArray=[
        'paypal_email'=>$request->paypal_email,
        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      }else if($request->paymentVal=='bTransfer'){
         $insertArray=[
         'bTransfer_bank_name'=>$request->bTransfer_bank_name,
        'bTransfer_account'=>$request->bTransfer_account,
        'bTransfer_ac_name'=>$request->bTransfer_ac_name,
        'bTransfer_ref'=>$request->bTransfer_ref,
        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];
    

      }elseif ($request->paymentVal=='cashDeposit') {
        $insertArray=[
        'cashDeposit_bank_name'=>$request->cashDeposit_bank_name,
        'cashDeposit_account'=>$request->cashDeposit_account,
        'cashDeposit_ac_name'=>$request->cashDeposit_ac_name,
        'cashDeposit_ref'=>$request->cashDeposit_ref,
        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];


        
      }else if($request->paymentVal=='bank_wire')
      {
        $insertArray=[
        'bankwire_holder_name'=>$request->bankwire_holder_name,
        'bankwire_swift_card'=>$request->bankwire_swift_card,
        'bankwire_bank_name'=>$request->bankwire_bank_name,
        'bankwire_iban'=>$request->bankwire_iban,
        'bankwire_country'=>$request->bankwire_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      // dd($insertArray);
      }
      else if($request->paymentVal=='westren_union')
      {
        $insertArray=[
        'westrenunion_full_name'=>$request->westrenunion_full_name,
        'westrenunion_address'=>$request->westrenunion_address,
        'westrenunion_country'=>$request->westrenunion_country,
        'westrenunion_phone_no'=>$request->westrenunion_phone_no,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='perfect_money')
      {
                $insertArray=[
        'perfectmoney_pm_id'=>$request->perfectmoney_pm_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='payza')
      {

        $insertArray=[
        'payza_payza_email'=>$request->payza_payza_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='payoneer')
      {
        $insertArray=[
        'payoneer_payoneer_email'=>$request->payoneer_payoneer_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='webmoney')
      {
        $insertArray=[
        'webmoney_webmoney_purse'=>$request->webmoney_webmoney_purse,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='okpay')
      {
        $insertArray=[
        'okpay_okpay_email'=>$request->okpay_okpay_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='skrill')
      {
        
        $insertArray=[
        'skrill_skrill_email'=>$request->skrill_skrill_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='nettler')
      {
        
        $insertArray=[
        'nettler_nettler_id'=>$request->nettler_nettler_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->paymentVal=='dash')
      {
        $insertArray=[
        'dash_dash_id'=>$request->dash_dash_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='money_gram')
      {
        
        $insertArray=[
        'moneygram_full_name'=>$request->moneygram_full_name,
        'moneygram_address'=>$request->moneygram_address,
        'moneygram_country'=>$request->moneygram_country,
        'moneygram_phone_no'=>$request->moneygram_phone_no,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='credit_card')
      {
        
        $insertArray=[
        'creditcard_card_number'=>$request->creditcard_card_number,
        'creditcard_expiry'=>$request->creditcard_expiry,
        'creditcard_cvv'=>$request->creditcard_cvv,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='instaforex')
      {
        
        $insertArray=[
        'instaforex_instaforex_id'=>$request->instaforex_instaforex_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='solid_trust_pay')
      {
        
        $insertArray=[
        'solidtrustpay_std_id'=>$request->solidtrustpay_std_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->paymentVal=='us_bank')
      {
        
        $insertArray=[
        'usbank_us_id'=>$request->usbank_us_id,
        'usbank_expiry'=>$request->usbank_expiry,
        'usbank_cvv'=>$request->usbank_cvv,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='advcash')
      {
        
        $insertArray=[
        'advcash_wallet_id'=>$request->advcash_wallet_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='alipay_china')
      {
        
        $insertArray=[
        'alipaychina_email_id'=>$request->alipaychina_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='paysafecard')
      {
        
        $insertArray=[
        'paysafecard_email_id'=>$request->paysafecard_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='onecard')
      {
        
        $insertArray=[
        'onecard_email_id'=>$request->onecard_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,


      ];

      }
      else if($request->paymentVal=='sofort')
      {
        
        $insertArray=[
        'sofort_email_id'=>$request->sofort_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='qivi_wallet')
      {
        
        $insertArray=[
        'qiviwallet_id'=>$request->qiviwallet_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='entromoney')
      {
        
        $insertArray=[
        'entromoney_wallet_address'=>$request->entromoney_wallet_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,


      ];

      }
      else if($request->paymentVal=='mobile_wallet')
      {
        
        $insertArray=[
        'mobilewallet_full_name'=>$request->mobilewallet_full_name,
        'mobilewallet_phone_number'=>$request->mobilewallet_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='wordremit')
      {
        
        $insertArray=[
        'wordremit_wallet_address'=>$request->wordremit_wallet_address,
        'wordremit_swift_card'=>$request->wordremit_swift_card,
        'wordremit_bank_name'=>$request->wordremit_bank_name,
        'wordremit_iban'=>$request->wordremit_iban,
        'wordremit_country'=>$request->wordremit_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='mobile_pay')
      {
        
        $insertArray=[
        'mobilepay_full_name'=>$request->mobilepay_full_name,
        'mobilepay_phone_number'=>$request->mobilepay_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='capital_one')
      {
        
        $insertArray=[
        'capitalone_email_id'=>$request->capitalone_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='apple_pay')
      {
        
        $insertArray=[
        'applepay_full_name'=>$request->applepay_full_name,
        'applepay_phone_number'=>$request->applepay_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='chase_quick_pay')
      {
        
        $insertArray=[
        'chasequickpay_email_id'=>$request->chasequickpay_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='transfer_wise')
      {
        
        $insertArray=[
        'transferwise_email_address'=>$request->transferwise_email_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='venmo_mobile_payment')
      {
        $insertArray=[
        'venmomobilepayment_full_name'=>$request->venmomobilepayment_full_name,
        'venmomobilepayment_phone_number'=>$request->venmomobilepayment_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='xoom_money_transfer')
      {
        
        $insertArray=[
        'xoommoneytransfer_email_address'=>$request->xoommoneytransfer_email_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='swift_transfer')
      {
        
        $insertArray=[
        'swifttransfer_holder_name'=>$request->swifttransfer_holder_name,
        'swifttransfer_swift_card'=>$request->swifttransfer_swift_card,
        'swifttransfer_bank_name'=>$request->swifttransfer_bank_name,
        'swifttransfer_iban'=>$request->swifttransfer_iban,
        'swifttransfer_country'=>$request->swifttransfer_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='direct_bank_deposit')
      {
        

        $insertArray=[
        'directbankdeposit_holder_name'=>$request->directbankdeposit_holder_name,
        'directbankdeposit_bank_name'=>$request->directbankdeposit_bank_name,
        'directbankdeposit_iban'=>$request->directbankdeposit_iban,
        'directbankdeposit_country'=>$request->directbankdeposit_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='buy_virtual_card')
      {
        
        $insertArray=[
        'buyvirtualcard_email_address'=>$request->buyvirtualcard_email_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      
      }

  $insertgo=Recived_Orders::create($insertArray);

     $user_id_o=null;
  if (!Auth::check()) {
    
   $user_id_o=null;
  }else{

 $user_id_o=Auth::user()->id;
  }


 

Recived_Orders::find($insertgo->id)->update(['convertedCurrency'=>$request->hidden_currencyType,'coinType'=>$request->hidden_coinType,'user_id'=>$user_id_o,'invoice'=>$invoice]);

     $updateData=Recived_Orders::where('id',$insertgo->id)->first();
  
    $name=Auth()->user()->name;
    $email=Auth()->user()->email;
    $applicant_id=Auth()->user()->user_ref;

       $to_name =config('custom_env_Variables.MAIL_FROM_NAME');
       $to_email =config('custom_env_Variables.MAIL_TO_CONTACT');
          $data = array('name'=>$name,
           "email" =>$email,
           'user_ref'=>$applicant_id,
            'order_id'=>$updateData->order_number,
            'orderdetial'=>$updateData->coinType.' has been '.$updateData->ordertype,
            'order_status'=>$updateData->status,
            'coinType'=>$updateData->coinType,
            'paymethod'=>$updateData->payment_method,
            'coinvalue'=>$updateData->bitcoin_current_val,
            'commission_fee'=>$updateData->commission_fee,
            'currency'=>$updateData->convertedCurrency,
            'recived_ammount'=>$updateData->recived_total_amount,
            'recived_bitcoin'=>$updateData->recived_bitcoin,
            'ordertype'=>$updateData->ordertype, 
           'subject'=>'New Order has been Placed',
           'app_url'=>config('custom_env_Variables.APP_URL'),
           'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.sell', $data, function($message) use ($to_name, $to_email) {
          $message->to($to_email, $to_name) 
            ->subject('New Order has been Placed');
          $message->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });

     
          $to_name2 =$name;
          $to_email2 =$email;
          $data2 = array('name'=>$name,
            "email" =>$email,
           'user_ref'=>$applicant_id,
            'order_id'=>$updateData->order_number,
            'orderdetial'=>$updateData->coinType.' has been '.$updateData->ordertype,
            'order_status'=>$updateData->status,
            'coinType'=>$updateData->coinType,
            'paymethod'=>$updateData->payment_method,
            'coinvalue'=>$updateData->bitcoin_current_val,
            'commission_fee'=>$updateData->commission_fee,
            'currency'=>$updateData->convertedCurrency,
            'recived_ammount'=>$updateData->recived_total_amount,
            'recived_bitcoin'=>$updateData->recived_bitcoin,
            'ordertype'=>$updateData->ordertype,
           'subject'=>'New Order has been Placed',
           'app_url'=>config('custom_env_Variables.APP_URL'),
           'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.sell', $data2, function($message2) use ($to_name2, $to_email2) {
          $message2->to($to_email2, $to_name2) 
            ->subject('New Order has been Placed');
          $message2->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });


  
    return view('order_recived_confirmation')->with('order_id',$insertgo->id);

    }


    public function Update_Order(Request $request,$id)
    {
      $insertArray=[];
      if ($request->payment_method=='paypal') {
        $insertArray=[
        'paypal_email'=>$request->paypacoinTypel_email,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      // dd($insertArray);
      }
      else if($request->payment_method=='bank_wire')
      {
        $insertArray=[
        'bankwire_holder_name'=>$request->bankwire_holder_name,
        'bankwire_swift_card'=>$request->bankwire_swift_card,
        'bankwire_bank_name'=>$request->bankwire_bank_name,
        'bankwire_iban'=>$request->bankwire_iban,
        'bankwire_country'=>$request->bankwire_country,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      // dd($insertArray);
      }
      else if($request->payment_method=='westren_union')
      {
        $insertArray=[
        'westrenunion_full_name'=>$request->westrenunion_full_name,
        'westrenunion_address'=>$request->westrenunion_address,
        'westrenunion_country'=>$request->westrenunion_country,
        'westrenunion_phone_no'=>$request->westrenunion_phone_no,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->payment_method=='perfect_money')
      {
                $insertArray=[
        'perfectmoney_pm_id'=>$request->perfectmoney_pm_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='payza')
      {

        $insertArray=[
        'payza_payza_email'=>$request->payza_payza_email,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='payoneer')
      {
        $insertArray=[
        'payoneer_payoneer_email'=>$request->payoneer_payoneer_email,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='webmoney')
      {
        $insertArray=[
        'webmoney_webmoney_purse'=>$request->webmoney_webmoney_purse,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='okpay')
      {
        $insertArray=[
        'okpay_okpay_email'=>$request->okpay_okpay_email,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='skrill')
      {
        
        $insertArray=[
        'skrill_skrill_email'=>$request->skrill_skrill_email,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='nettler')
      {
        
        $insertArray=[
        'nettler_nettler_id'=>$request->nettler_nettler_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->payment_method=='dash')
      {
        $insertArray=[
        'dash_dash_id'=>$request->dash_dash_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='money_gram')
      {
        
        $insertArray=[
        'moneygram_full_name'=>$request->moneygram_full_name,
        'moneygram_address'=>$request->moneygram_address,
        'moneygram_country'=>$request->moneygram_country,
        'moneygram_phone_no'=>$request->moneygram_phone_no,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='credit_card')
      {
        
        $insertArray=[
        'creditcard_card_number'=>$request->creditcard_card_number,
        'creditcard_expiry'=>$request->creditcard_expiry,
        'creditcard_cvv'=>$request->creditcard_cvv,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='instaforex')
      {
        
        $insertArray=[
        'instaforex_instaforex_id'=>$request->instaforex_instaforex_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='solid_trust_pay')
      {
        
        $insertArray=[
        'solidtrustpay_std_id'=>$request->solidtrustpay_std_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->payment_method=='us_bank')
      {
        
        $insertArray=[
        'usbank_us_id'=>$request->usbank_us_id,
        'usbank_expiry'=>$request->usbank_expiry,
        'usbank_cvv'=>$request->usbank_cvv,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='advcash')
      {
        
        $insertArray=[
        'advcash_wallet_id'=>$request->advcash_wallet_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='alipay_china')
      {
        
        $insertArray=[
        'alipaychina_email_id'=>$request->alipaychina_email_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='paysafecard')
      {
        
        $insertArray=[
        'paysafecard_email_id'=>$request->paysafecard_email_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='onecard')
      {
        
        $insertArray=[
        'onecard_email_id'=>$request->onecard_email_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='sofort')
      {
        
        $insertArray=[
        'sofort_email_id'=>$request->sofort_email_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='qivi_wallet')
      {
        
        $insertArray=[
        'qiviwallet_id'=>$request->qiviwallet_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='entromoney')
      {
        
        $insertArray=[
        'entromoney_wallet_address'=>$request->entromoney_wallet_address,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='mobile_wallet')
      {
        
        $insertArray=[
        'mobilewallet_full_name'=>$request->mobilewallet_full_name,
        'mobilewallet_phone_number'=>$request->mobilewallet_phone_number,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='wordremit')
      {
        
        $insertArray=[
        'wordremit_wallet_address'=>$request->wordremit_wallet_address,
        'wordremit_swift_card'=>$request->wordremit_swift_card,
        'wordremit_bank_name'=>$request->wordremit_bank_name,
        'wordremit_iban'=>$request->wordremit_iban,
        'wordremit_country'=>$request->wordremit_country,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='mobile_pay')
      {
        
        $insertArray=[
        'mobilepay_full_name'=>$request->mobilepay_full_name,
        'mobilepay_phone_number'=>$request->mobilepay_phone_number,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='capital_one')
      {
        
        $insertArray=[
        'capitalone_email_id'=>$request->capitalone_email_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='apple_pay')
      {
        
        $insertArray=[
        'applepay_full_name'=>$request->applepay_full_name,
        'applepay_phone_number'=>$request->applepay_phone_number,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='chase_quick_pay')
      {
        
        $insertArray=[
        'chasequickpay_email_id'=>$request->chasequickpay_email_id,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='transfer_wise')
      {
        
        $insertArray=[
        'transferwise_email_address'=>$request->transferwise_email_address,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='venmo_mobile_payment')
      {
        $insertArray=[
        'venmomobilepayment_full_name'=>$request->venmomobilepayment_full_name,
        'venmomobilepayment_phone_number'=>$request->venmomobilepayment_phone_number,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='xoom_money_transfer')
      {
        
        $insertArray=[
        'xoommoneytransfer_email_address'=>$request->xoommoneytransfer_email_address,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='swift_transfer')
      {
        
        $insertArray=[
        'swifttransfer_holder_name'=>$request->swifttransfer_holder_name,
        'swifttransfer_swift_card'=>$request->swifttransfer_swift_card,
        'swifttransfer_bank_name'=>$request->swifttransfer_bank_name,
        'swifttransfer_iban'=>$request->swifttransfer_iban,
        'swifttransfer_country'=>$request->swifttransfer_country,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='direct_bank_deposit')
      {
        

        $insertArray=[
        'directbankdeposit_holder_name'=>$request->directbankdeposit_holder_name,
        'directbankdeposit_bank_name'=>$request->directbankdeposit_bank_name,
        'directbankdeposit_iban'=>$request->directbankdeposit_iban,
        'directbankdeposit_country'=>$request->directbankdeposit_country,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->payment_method=='buy_virtual_card')
      {
        
        $insertArray=[
        'buyvirtualcard_email_address'=>$request->buyvirtualcard_email_address,

        'commission_fee'=>$request->commission_fee,
        'recived_total_amount'=>$request->recived_total_amount,
        'recived_bitcoin'=>$request->recived_bitcoin,
        'transection_url'=>$request->transection_url,
        'transection_id'=>$request->transection_id,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->reciver_wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->payment_method,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      
      }

      $updateOrderFind = Recived_Orders::find($id);
      $updateOrderFind->update($insertArray);
      $updateOrderFind->update($insertArray);
      $updateOrderFind->update(['status'=>$request->status]);
     
      if ($updateOrderFind) {
           return redirect()->back();
        }
    
    }



 public function make_order_buy(Request $request)
    {





  Session::put('coinType',$request->coniType);
  Session::put('percentagecut',$request->percentagecut);

  Session::put('currencyType',$request->bitcoin_convert_to_currency);

  Session::put('convertedAmount', $request->bitcoin_converted_amount);
  Session::put('BtcValLatest', $request->BtcValLatest);
  Session::put('Origenalorder', $request->Origenalorder);
  

      $payment_method=$request->paymentVal;
      if($request->paymentVal=='paypal')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='bank_wire')
      {

        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }else if($request->paymentVal=='bTransfer')
      {

        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }else if($request->paymentVal=='cashDeposit')
      {

        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }else if($request->paymentVal=='westren_union')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='perfect_money')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='payza')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='payoneer')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
        // echo $request->payoneer_payoneer_email;
      }
      else if($request->paymentVal=='webmoney')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='okpay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='skrill')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='nettler')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='dash')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='money_gram')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='credit_card')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='instaforex')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='solid_trust_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='us_bank')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));
        return view('profile_buy')->with('order_data',Session::get('order_data'));

      }
      else if($request->paymentVal=='advcash')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
        // echo $request->advcash_wallet_id;
      }
      else if($request->paymentVal=='alipay_china')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
        // echo $request->alipaychina_email_id;
      }
      else if($request->paymentVal=='paysafecard')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='onecard')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='sofort')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='qivi_wallet')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='entromoney')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='mobile_wallet')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='wordremit')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='mobile_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='capital_one')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='apple_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='chase_quick_pay')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='transfer_wise')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='venmo_mobile_payment')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='xoom_money_transfer')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='swift_transfer')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='direct_bank_deposit')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else if($request->paymentVal=='buy_virtual_card')
      {
        Session::put('order_data', array('paymethod'=> $payment_method,'reqData'=>$request->all()));

        return view('profile_buy')->with('order_data',Session::get('order_data'));
      }
      else
      {

      }
      // dd($request->all());
    }



    public function confirm_order_buy(Request $request)
    {




  

     $invoice='';
      
      if ($request->hasFile('invoice')) {
        $image = $request->file('invoice');
        $invoice = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/invoice');
        $image->move($destinationPath, $invoice);

    }

     // dd($invoice);


     $insertArray=[];
      if ($request->paymentVal=='paypal') {
        $insertArray=[
        'paypal_email'=>$request->paypal_email,
        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      }
      else if($request->paymentVal=='cashDeposit')
      {
        $insertArray=[
        'cashDeposit_bank_name'=>$request->cashDeposit_bank_name,
        'cashDeposit_account'=>$request->cashDeposit_account,
        'cashDeposit_ac_name'=>$request->cashDeposit_ac_name,
        'cashDeposit_ref'=>$request->cashDeposit_ref,
       

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      // dd($insertArray);
      }
      else if($request->paymentVal=='bTransfer')
      {
        $insertArray=[
        'bTransfer_bank_name'=>$request->bTransfer_bank_name,
        'bTransfer_account'=>$request->bTransfer_account,
        'bTransfer_ac_name'=>$request->bTransfer_ac_name,
        'bTransfer_ref'=>$request->bTransfer_ref,
       

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      // dd($insertArray);
      }
      else if($request->paymentVal=='bank_wire')
      {
        $insertArray=[
        'bankwire_holder_name'=>$request->bankwire_holder_name,
        'bankwire_swift_card'=>$request->bankwire_swift_card,
        'bankwire_bank_name'=>$request->bankwire_bank_name,
        'bankwire_iban'=>$request->bankwire_iban,
        'bankwire_country'=>$request->bankwire_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      // dd($insertArray);
      }
      else if($request->paymentVal=='westren_union')
      {
        $insertArray=[
        'westrenunion_full_name'=>$request->westrenunion_full_name,
        'westrenunion_address'=>$request->westrenunion_address,
        'westrenunion_country'=>$request->westrenunion_country,
        'westrenunion_phone_no'=>$request->westrenunion_phone_no,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='perfect_money')
      {
                $insertArray=[
        'perfectmoney_pm_id'=>$request->perfectmoney_pm_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='payza')
      {

        $insertArray=[
        'payza_payza_email'=>$request->payza_payza_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='payoneer')
      {
        $insertArray=[
        'payoneer_payoneer_email'=>$request->payoneer_payoneer_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='webmoney')
      {
        $insertArray=[
        'webmoney_webmoney_purse'=>$request->webmoney_webmoney_purse,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='okpay')
      {
        $insertArray=[
        'okpay_okpay_email'=>$request->okpay_okpay_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='skrill')
      {
        
        $insertArray=[
        'skrill_skrill_email'=>$request->skrill_skrill_email,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='nettler')
      {
        
        $insertArray=[
        'nettler_nettler_id'=>$request->nettler_nettler_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->paymentVal=='dash')
      {
        $insertArray=[
        'dash_dash_id'=>$request->dash_dash_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='money_gram')
      {
        
        $insertArray=[
        'moneygram_full_name'=>$request->moneygram_full_name,
        'moneygram_address'=>$request->moneygram_address,
        'moneygram_country'=>$request->moneygram_country,
        'moneygram_phone_no'=>$request->moneygram_phone_no,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='credit_card')
      {
        
        $insertArray=[
        'creditcard_card_number'=>$request->creditcard_card_number,
        'creditcard_expiry'=>$request->creditcard_expiry,
        'creditcard_cvv'=>$request->creditcard_cvv,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='instaforex')
      {
        
        $insertArray=[
        'instaforex_instaforex_id'=>$request->instaforex_instaforex_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='solid_trust_pay')
      {
        
        $insertArray=[
        'solidtrustpay_std_id'=>$request->solidtrustpay_std_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,
      ];

      }
      else if($request->paymentVal=='us_bank')
      {
        
        $insertArray=[
        'usbank_us_id'=>$request->usbank_us_id,
        'usbank_expiry'=>$request->usbank_expiry,
        'usbank_cvv'=>$request->usbank_cvv,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='advcash')
      {
        
        $insertArray=[
        'advcash_wallet_id'=>$request->advcash_wallet_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='alipay_china')
      {
        
        $insertArray=[
        'alipaychina_email_id'=>$request->alipaychina_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='paysafecard')
      {
        
        $insertArray=[
        'paysafecard_email_id'=>$request->paysafecard_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='onecard')
      {
        
        $insertArray=[
        'onecard_email_id'=>$request->onecard_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,


      ];

      }
      else if($request->paymentVal=='sofort') 
      {
        
        $insertArray=[
        'sofort_email_id'=>$request->sofort_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='qivi_wallet')
      {
        
        $insertArray=[
        'qiviwallet_id'=>$request->qiviwallet_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='entromoney')
      {
        
        $insertArray=[
        'entromoney_wallet_address'=>$request->entromoney_wallet_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,


      ];

      }
      else if($request->paymentVal=='mobile_wallet')
      {
        
        $insertArray=[
        'mobilewallet_full_name'=>$request->mobilewallet_full_name,
        'mobilewallet_phone_number'=>$request->mobilewallet_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='wordremit')
      {
        
        $insertArray=[
        'wordremit_wallet_address'=>$request->wordremit_wallet_address,
        'wordremit_swift_card'=>$request->wordremit_swift_card,
        'wordremit_bank_name'=>$request->wordremit_bank_name,
        'wordremit_iban'=>$request->wordremit_iban,
        'wordremit_country'=>$request->wordremit_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='mobile_pay')
      {
        
        $insertArray=[
        'mobilepay_full_name'=>$request->mobilepay_full_name,
        'mobilepay_phone_number'=>$request->mobilepay_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='capital_one')
      {
        
        $insertArray=[
        'capitalone_email_id'=>$request->capitalone_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='apple_pay')
      {
        
        $insertArray=[
        'applepay_full_name'=>$request->applepay_full_name,
        'applepay_phone_number'=>$request->applepay_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='chase_quick_pay')
      {
        
        $insertArray=[
        'chasequickpay_email_id'=>$request->chasequickpay_email_id,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='transfer_wise')
      {
        
        $insertArray=[
        'transferwise_email_address'=>$request->transferwise_email_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='venmo_mobile_payment')
      {
        $insertArray=[
        'venmomobilepayment_full_name'=>$request->venmomobilepayment_full_name,
        'venmomobilepayment_phone_number'=>$request->venmomobilepayment_phone_number,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='xoom_money_transfer')
      {
        
        $insertArray=[
        'xoommoneytransfer_email_address'=>$request->xoommoneytransfer_email_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='swift_transfer')
      {
        
        $insertArray=[
        'swifttransfer_holder_name'=>$request->swifttransfer_holder_name,
        'swifttransfer_swift_card'=>$request->swifttransfer_swift_card,
        'swifttransfer_bank_name'=>$request->swifttransfer_bank_name,
        'swifttransfer_iban'=>$request->swifttransfer_iban,
        'swifttransfer_country'=>$request->swifttransfer_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='direct_bank_deposit')
      {
        

        $insertArray=[
        'directbankdeposit_holder_name'=>$request->directbankdeposit_holder_name,
        'directbankdeposit_bank_name'=>$request->directbankdeposit_bank_name,
        'directbankdeposit_iban'=>$request->directbankdeposit_iban,
        'directbankdeposit_country'=>$request->directbankdeposit_country,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];

      }
      else if($request->paymentVal=='buy_virtual_card')
      {
        
        $insertArray=[
        'buyvirtualcard_email_address'=>$request->buyvirtualcard_email_address,

        'commission_fee'=>$request->hidden_commission_fee,
        'recived_total_amount'=>$request->hidden_recived_amount,
        'recived_bitcoin'=>$request->users_bitcoin_entered_amount,
        'transection_url'=>$request->transection_url,
        'order_date'=>$request->order_date,
        'reciver_wallet_address'=>$request->wallet_address,
        'order_number'=>$request->order_number,
        'payment_method'=>$request->paymentVal,
        'bitcoin_current_val'=>$request->bitcoin_current_val,

      ];
      
      }

  $insertgo=Recived_Orders::create($insertArray);
    $user_id_o=null;
  if (!Auth::check()) {
    
   $user_id_o=null;
  }else{

 $user_id_o=Auth::user()->id;
  }



     
     


Recived_Orders::find($insertgo->id)->update(['convertedCurrency'=>$request->hidden_currencyType,'coinType'=>$request->hidden_coinType,'ordertype'=>'buy','reciver_wallet_address'=>$request->walletAddress,'order_email'=>$request->order_email,'user_id'=>$user_id_o,'invoice'=>$invoice]);



 $updateData=Recived_Orders::where('id',$insertgo->id)->first();
  
    $name=Auth()->user()->name;
    $email=Auth()->user()->email;
    $applicant_id=Auth()->user()->user_ref;

       $to_name =config('custom_env_Variables.MAIL_FROM_NAME');
       $to_email =config('custom_env_Variables.MAIL_TO_CONTACT');
          $data = array('name'=>$name,
          
           'user_ref'=>$applicant_id,
            'order_id'=>$updateData->order_number,
            'orderdetial'=>$updateData->coinType.' has been '.$updateData->ordertype,
            'order_status'=>$updateData->status,
            'coinType'=>$updateData->coinType,
            'paymethod'=>$updateData->payment_method,
            'email'=>$updateData->order_email,
            'coinvalue'=>$updateData->bitcoin_current_val,
            'commission_fee'=>$updateData->commission_fee,
            'currency'=>$updateData->convertedCurrency,
            'recived_ammount'=>$updateData->recived_total_amount,
            'recived_bitcoin'=>$updateData->recived_bitcoin,
            'ordertype'=>$updateData->ordertype,
           'subject'=>'New Order has been Placed',
           'app_url'=>config('custom_env_Variables.APP_URL'),
           'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.buy', $data, function($message) use ($to_name, $to_email) {
          $message->to($to_email, $to_name) 
            ->subject('New Order has been Placed');
          $message->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });

     
          $to_name2 =$name;
          $to_email2 =$email;
          $data2 = array('name'=>$name,
           
           'user_ref'=>$applicant_id,
            'order_id'=>$updateData->order_number,
            'orderdetial'=>$updateData->coinType.' has been '.$updateData->ordertype,
            'order_status'=>$updateData->status,
             'email'=>$updateData->order_email,
            'coinType'=>$updateData->coinType,
            'paymethod'=>$updateData->payment_method,
            'coinvalue'=>$updateData->bitcoin_current_val,
            'commission_fee'=>$updateData->commission_fee,
            'currency'=>$updateData->convertedCurrency,
            'recived_ammount'=>$updateData->recived_total_amount,
            'recived_bitcoin'=>$updateData->recived_bitcoin,
            'ordertype'=>$updateData->ordertype,
           'subject'=>'New Order has been Placed',
           'app_url'=>config('custom_env_Variables.APP_URL'),
           'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.buy', $data2, function($message2) use ($to_name2, $to_email2) {
          $message2->to($to_email2, $to_name2) 
            ->subject('New Order has been Placed');
          $message2->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });
  
    return view('order_recived_confirmation')->with('order_id',$insertgo->id);

    } 


  

    public function edit_order_value($id)
    {
      // $id="3";
      $data=DB::select("select* from recived_order_tbl WHERE id='$id'");
      return view('admin.payments_orders.edit')->with('all_data',$data);
      // return view('admin.payments_orders.edit');
    }

    public function edit_order_value_buy($id)
    {
      // $id="3";
      $data=DB::select("select* from recived_order_tbl WHERE id='$id'");
      return view('admin.payments_orders_buy.edit')->with('all_data',$data);
      // return view('admin.payments_orders.edit');
    }




    public function update_order_value_ajax(Request $request){
   

    Recived_Orders::find($request->orderId)->update(['status'=>$request->Order_status]);


    
      


    return json_encode(['status'=>'done','orderIdret'=>$request->orderId]);

    }
    
   


public function sendMailConf_ajax(Request $request){
 $updateData=Recived_Orders::where('id',$request->orderIdret)->first();

 $userData=User::where('id',$updateData->user_id)->first();
  
    $name=$userData->name;
    $email=$userData->email;  
    $applicant_id=$userData->user_ref;

       $to_name =config('custom_env_Variables.MAIL_FROM_NAME');
       $to_email =config('custom_env_Variables.MAIL_TO_CONTACT');
          $data = array('name'=>$name,
          
           'order_id'=>$updateData->order_number,
           'orderdetial'=>$updateData->coinType.' has been '.$updateData->ordertype,
           'order_status'=>$updateData->status,
           'subject'=>'Order Status',
           'app_url'=>config('custom_env_Variables.APP_URL'),
           'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.status', $data, function($message) use ($to_name, $to_email) {
          $message->to($to_email, $to_name) 
            ->subject('Order Status has been Changed');
          $message->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });

      
          $to_name2 =$name;
          $to_email2 =$email;
          $data2 = array('name'=>$name,
          
           'order_id'=>$updateData->order_number,
           'orderdetial'=>$updateData->coinType.' has been '.$updateData->ordertype,
            'order_status'=>$updateData->status,
           'subject'=>'New Order has been Placed',
           'app_url'=>config('custom_env_Variables.APP_URL'),
           'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.status', $data2, function($message2) use ($to_name2, $to_email2) {
          $message2->to($to_email2, $to_name2) 
            ->subject('Order Status has been Changed');
          $message2->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });


          return json_encode(['status'=>'ok']);

   }

   public function my_profile(){


    return view('my_profile');
   }



   public function myaccountUpdate( Request $request){

        

            $image_name = $request->pfilehidden;
        $image = $request->file('pfile');
       if (!empty( $image)) {
             $image = $request->file('pfile');
            $image_name = time() . uniqid(). '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img/');
            $image->move($destinationPath, $image_name);
       }

 
          $check=User::find(Auth::user()->id)->update([
            'name' =>$request->name,
            'address' => $request->address,
            'phone'=>$request->phone,
            'profile_photo_path'=>$image_name

        ]);


                if($check){

                return redirect()->back()
                ->with('message', $request->name . 'updated SuccessFully...!');
                }else {
                      return redirect()->back()
                ->with('error', $request->name . 'Not updated ...!');
                }

    }



   public function my_profile_buy_order(){

 // Recived_Orders::where('user_id',Auth::user()->id)->where('ordertype','buy')->where('view_user','no')->update(['view_user'=>'yes']);
    return view('my_profile_buy')->with('orderData',Recived_Orders::where('user_id',Auth::user()->id)->where('ordertype','buy')->get());
   }

    public function my_profile_sell_order(){
 // Recived_Orders::where('user_id',Auth::user()->id)->where('ordertype','sell')->where('view_user','no')->update(['view_user'=>'yes']);

    return view('my_profile_sell')->with('orderData',Recived_Orders::where('user_id',Auth::user()->id)->where('ordertype','sell')->get());;
   }





   public function edit_meta_Tag($id){

  $metata=MetaTag::find($id)->first();
     return view('admin.metaTag.edit')->with('metaTag',$metata);

   }



   public function post_meta_Tag_save(Request $request){


  $metata=MetaTag::find($request->metaid);


  $metata->update([
 "home"=>$request->home,
  "buy"=>$request->buy,
  "sell"=>$request->sell,
  "blog"=>$request->blog,
  "support"=>$request->support,
  "legal"=>$request->legal,
  "contact"=>$request->contact,
  "myaccount"=>$request->myaccount,
  "orderby"=>$request->orderby,
  "ordersell"=>$request->ordersell,
    ]);

       return redirect()->back()->with('message','meta tag update Successfully');
   }

   



public function review(Request $request){




// dd($request->all());
$rev=Review::create(["rating"=>$request->rating,
  "review"=>$request->comment,
  "user_id"=>Auth::user()->id,
  "order_id"=>$request->order_id]);

if ($rev) {
  
   return redirect()->route('home')->with('message','Your Review submitted Successfully');
}

}


public function mailTest(){

  $data = array("name" =>'9999','lot'=>'000');
Mail::send('email.test', $data, function($message) {
            $message->subject("A new Member has been Registered" );
            $message->from('noreply@mydomain.net', 'Your application title');
            $message->to('faisalsehar786@gmail.com');
        });

}





public function ShowFreshNotification($inbox){

return view('notification_inbox')->with('order_id',$inbox);

}


public function notification($search){
 

$orderscount=\App\Recived_Orders::where('user_id',Auth::user()->id)->where('view_user','no')->count();

$orders=\App\Recived_Orders::where('user_id',Auth::user()->id);
if ($search=='inbox') {
 $orders=\App\Recived_Orders::where('user_id',Auth::user()->id); 
}

if ($search=='read') {
  $orders->where('view_user','yes');
}

if ($search=='unread') {
   $orders->where('view_user','no');
}

if ($search=='confirmed') {
   $orders->where('status','on');
}

if ($search=='pending') {
   $orders->where('status','off');
}

$searchOrder=$orders->orderBy('created_at', 'DESC')->simplePaginate(10);
 
 return view('notification')->with('ordercount',$orderscount)->with('orders',$searchOrder);
 
}

 


public function getFreshNotification(Request $request){

 $orderCountsell=\App\Recived_Orders::where('user_id',Auth::user()->id)->where('view_user','no')->count();

  
 $check=\App\Recived_Orders::where('user_id',Auth::user()->id)->orderBy('created_at', 'DESC')->count();

if ($check>1) {
   $output=\App\Recived_Orders::where('user_id',Auth::user()->id)->orderBy('created_at', 'DESC')->limit(10)->get();
}else {
   $output='no';
} 

   $output2=\App\Recived_Orders::where('user_id',Auth::user()->id)->where('view_user','no')->orderBy('created_at', 'DESC')->inRandomOrder()->limit(1)->get();

 
   return json_encode(['count'=>$orderCountsell,'output'=> $output,'output2'=>$output2]);


}



public function giveReview($orderId){



return view('reviews')->with('orderId',$orderId);

}

   

     
}
 