@extends('admin_layout')
@section('admin_content')


					<div class="box-content">
						<div class="h5 pd-20 mb-0">Members</div>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="dataTablePayment">
						  <thead>
							  <tr>
	                	<th >sr</th>
	                    <th >Username</th>
	                    <th >Email</th>
	                     <th >Status</th>
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
url:"{{ route('del_user_ajax') }}",
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
url: "{{ route('get_all_user_data_ajax') }}",
data:{typep:type}
},

columns:[
{
data: 'id',
name: 'sr',
},
{
data: 'name',
name: 'username',
},
{
data: 'email',
name: 'email'
},
{
data: 'status',
name: 'status'
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