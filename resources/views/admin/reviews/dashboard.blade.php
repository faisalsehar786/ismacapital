@extends('admin_layout')
@section('admin_content')


					<div class="box-content">

						<a href="{{ route('add_review') }}" class="btn btn-success btn-lg float-right" style="float: right;"> Add review </a>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="dataTablePayment">
						  <thead>
							  <tr>
	                	<th >sr</th>
	                    <th >Description</th>
	                     <th >Rate Star</th>
	                     <!--  <th >User</th> -->
	                    <th >Date</th>
	       
	                    <th >Operations</th>
	                    
	                </tr>
                </thead>
                
                <tbody>
                </tbody>
            </table>
                 
			
			</div>



@endsection

@section('footer')
   <script type="text/javascript">

 


        
$(document).ready(function() {

       $(document).on('click', '.deleteorderpay', function(){
payid_id = $(this).attr('del-id');


swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover this Record!",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
$.ajax({
url:"{{ route('del_review_ajax') }}",
type:"POST",
dataType:"json",
data:{payid_id:payid_id,_token:"{{ csrf_token() }}"},
success:function(res)
{


console.log(res);
if (res.status=='ok'){
$('#dataTablePayment').DataTable().destroy();
load_data();

}else{
swal({
title: "Something Wrong",
text: "",
icon: "warning",
dangerMode: true,
timer: 3000
});
}
}
})
} else {
swal("Your Record is safe!");
}
})
});

function load_data(type=''){



$('#dataTablePayment').DataTable({
"order": [[ 0, "desc" ]],
processing: true,
serverSide: true,
responsive: true,
ajax:{
url: "{{ route('get_review_ajax') }}",
data:{typep:type}
},

columns:[
{
data: 'id',
name: 'sr',
},
{
data: 'review',
name: 'Description',
},
{
data: 'rating',
name: 'Rate_star',
},
// {
// data: 'user',
// name: 'user',
// orderable: false
// }, 
{
data: 'created_at',
name: 'date'
},
{
data: 'action',
name: 'Operations',
orderable: false
},
// {
// data: 'created_at',
// name: 'date',
// orderable: false
// }
]
});
}
load_data();




});
</script>
@endsection