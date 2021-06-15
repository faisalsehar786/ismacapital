<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;
use App\User;
use Auth;
class ReviewController extends Controller
{
    
public function index()
{


	 Review::where('del','no')->where('view_admin','no')->update(['view_admin'=>'yes']);
    
    return view('admin.reviews.dashboard');
}
public function editreview($id)
{
     


return view('admin.reviews.edit')->with('reviews',Review::where('id',$id)->first());
    
}
public function get_review_ajax(Request $request)
{
    
return datatables()
->of(
Review::where('del','no')->orderBy('id', 'DESC')
->get()
)

// ->addColumn(
// 'user',
// function ($data) {


// if (!empty($data->user_id)) {
//     $uz=User::find($data->user_id)->first();
// 	$eml=$uz->email;
// }else {
// 	$eml='user Deleted';
// } 

// $label = '<span class="label label-success">'.$eml.'</span>';

// return $label;
// })


->addColumn(
'action',
function ($data) {
$button = '<a  href="' . route('editreview', ['id' => $data->id]) . '">
                                                    <i class="halflings-icon  edit"></i>
                                            </a>
                                            <a class="deleteorderpay" href="#" del-id=' . $data->id . '>
                                                    <i class="halflings-icon  trash"></i>
                                            </a>';
return $button;
}
)->editColumn('created_at', function ($contact){
return date('d/m/y', strtotime($contact->created_at) );
})->rawColumns(['action', 'user'])
->make(true);
}
public function add_review(Request $request)
{
    
    return view('admin.reviews.add');
}
public function del_review_ajax(Request $request)
{
    
    $delorp = Review::where('id',$request->payid_id);
$delorp->update(['del'=>'yes']);
if ($delorp) {
return response()->json(['status' => 'ok', 'id' => $request->payid_id]);
} else {
return response()
->json(['status' => 'error']);
}
}
public function save_review(Request $request)
{
    


$rV=Review::create(['rating'=>$request->rating,'review'=>$request->review,'user_id'=>Auth::user()->id]);
return redirect()->back()->with('message','Record Add SuccessFully');
}
public function upadate_review(Request $request)
{
    
Review::where('id',$request->rid)->update(['rating'=>$request->rating,'review'=>$request->review,'user_id'=>$request->user_id]);
return redirect()->back()->with('message','Record update SuccessFully');
}
public function review_single($id){
return view('single-reviews')->with('reviews',Review::find($id)->first());
}
}