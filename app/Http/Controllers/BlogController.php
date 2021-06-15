<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
	

public function index()
{
	

	return view('admin.blog.dashboard');
}

public function editblog($id)
{
	
return view('admin.blog.edit')->with('blog',Blog::find($id)->first());
	
}


public function get_blog_ajax(Request $request)
{
	

return datatables()
                ->of(
                    Blog::orderBy('id', 'DESC')
                        ->get()
                )->addColumn(
                    'action', 
                    function ($data) {
                        $button = '<a  href="' . route('editblog', ['id' => $data->id]) . '">
												<i class="halflings-icon  edit"></i>  
											</a>
											<a class="deleteorderpay" href="#" del-id=' . $data->id . '>
												<i class="halflings-icon  trash"></i> 
											</a>';
                        return $button;
                    }
                )->editColumn('created_at', function ($contact){
    return date('d/m/y', strtotime($contact->created_at) );
})->rawColumns(['action', 'status'])
                ->make(true);


}



public function add_blog(Request $request)
{
	
	return view('admin.blog.add');
}

public function del_blog_ajax(Request $request)
{
	


	$delorp = Blog::where('id',$request->payid_id);
        $delorp->delete();
        if ($delorp) {
            return response()->json(['status' => 'ok', 'id' => $request->payid_id]);
        } else {
            return response()
                ->json(['status' => 'error']);
        }

}


public function save_blog(Request $request)
{
	




	    $request->validate(
            [
                'title' => 'required|unique:blog'
              
            ]
        );
       
    $name='';
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $name);

    }
 

      
        

        Blog::create(['title'=>$request->title,'des'=>$request->des,'image'=>$name]);

        return redirect()->back()->with('message','Record Add SuccessFully');



}

public function upadate_blog(Request $request)
{
	


$name='';
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $name);

    }else {
    	 $name=$request->filen;
    }
 

    
        

        Blog::find($request->blid)->update(['title'=>$request->title,'des'=>$request->des,'image'=>$name]);

        return redirect()->back()->with('message','Record update SuccessFully');


}



public function blog_single($id){

return view('single-blog')->with('blog',Blog::find($id)->first());

}

}