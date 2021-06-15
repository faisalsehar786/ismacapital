@extends('admin_layout')
@section('admin_content')


	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						

						<div class="h5 pd-20 mb-0">Edit Members Data</div>
					</div>
					<div class="box-content">
						
                  <form action="{{ route('updateuser_data') }}" method="POST" accept-charset="utf-8">
                  	  
                      @csrf
                 	<input type="hidden" class="form-control" name="uid" value="{{ $all_data->id }}" >
						<div class="control-group">
							  <label class="control-label" for="date01"><b>Username</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="name" value="{{ $all_data->name }}" >
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Email</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="email" value="{{ $all_data->email }}" >
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Password</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="password"  required="">
							  </div>
							  
							</div>

							<button type="submit" class="btn-success btn mt-3">update</button>

							 </form>

							</div>
							</div>
							</div>
		

@endsection

@section('footer')
<script type="text/javascript">
	
	$(document).ready(function () {
   
$('.statusc').change(function(){

	var Order_status=$(this).val();
	var Order_idC=$('.Order_idC').val();
	

   $.ajax({


url:"{{ route('update_order_value_ajax') }}",
 
type:"POST",

dataType:"json",

data:{orderId:Order_idC,Order_status:Order_status,_token:"{{ csrf_token() }}"},

success:function(res)

{
if(res.status=='done'){
swal({
  title: "Status Updated Successfully",
  text: "",
  icon: "success",
  button: "ok",
});

}


}

});

});



	});
</script>

@endsection