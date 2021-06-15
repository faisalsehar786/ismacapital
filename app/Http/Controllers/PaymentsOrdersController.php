<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables; 
use App\Recived_Orders;
class PaymentsOrdersController extends Controller
{
    public function get_all_payments_orders_data()
    {

         // Recived_Orders::where('ordertype','sell')->where('view_admin','no')->update(['view_admin'=>'yes']);
    	return view('admin.payments_orders.dashboard');
    }


    public function get_all_payments_orders_data_buy()
    {
          // Recived_Orders::where('ordertype','buy')->where('view_admin','no')->update(['view_admin'=>'yes']);
        return view('admin.payments_orders_buy.dashboard');
    }


    


    public function get_all_payments_orders_data_ajax()
    {
    	return datatables()
                ->of(
                    Recived_Orders::where('ordertype','sell')->orderBy('id', 'DESC')
                        ->get()
                )->addColumn(
                    'status',
                    function ($data) {
                        if ($data->status == 'on') {
                            $label = '<span class="label label-success">Confirmed</span>';
                        } else {
                            $label = '<span class="label label-danger">Pendding</span>';
                        }

                        return $label;
                    }
                )->addColumn(
                    'action',
                    function ($data) {
                        $button = '<a  href="' . route('edit_order_value', ['id' => $data->id]) . '">
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





     public function get_all_payments_orders_data_buy_ajax()
    {
        return datatables()
                ->of(
                    Recived_Orders::where('ordertype','buy')->orderBy('id', 'DESC')
                        ->get()
                )->addColumn(
                    'status',
                    function ($data) {
                        if ($data->status == 'on') {
                            $label = '<span class="label label-success">Confirmed</span>';
                        } else {
                            $label = '<span class="label label-danger">Pendding</span>';
                        }

                        return $label;
                    }
                )->addColumn(
                    'action',
                    function ($data) {
                        $button = '<a  href="' . route('edit_order_value_buy', ['id' => $data->id]) . '">
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
 
// <a class="dropdown-item" href="' . route('edit_auction', ['id' => Crypt::encrypt($data->id)]) . '">Edit</a>
    public function del_pay_order_ajax(Request $request)
    {

 
    	$delorp = Recived_Orders::where('id',$request->payid_id);
        $delorp->delete();
        if ($delorp) {
            return response()->json(['status' => 'ok', 'id' => $request->payid_id]);
        } else {
            return response()
                ->json(['status' => 'error']);
        }

    	
    }
    public function thanks()
    {
    	return view('order_recived_confirmation');
    }
}
