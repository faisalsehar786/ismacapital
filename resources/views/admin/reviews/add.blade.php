@extends('admin_layout')
@section('admin_content')


	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Review </h2>
					</div>
					<div class="box-content">
						
                  <form action="{{ route('save_review') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                  	 
                      @csrf
                 
							<div class="control-group">
							  <label class="control-label" for="date01"><b>Rating</b></label>

							  <div class="controls">
								<input type="number" class="form-control form-control" name="rating" required="" >
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Comment</b></label>

							  <div class="controls">
								<textarea name="review" col='10' rows="10" class="form-control"></textarea>
							  </div>
							  
							</div>
 
						
							

							<button type="submit" class="btn-success btn mt-3">save</button>

							 </form>

							</div>
							</div>
							</div>
		

@endsection

@section('footer')
  
    
<style type="text/css">
	
	.form-control{

		width: 100%!important;
	}
</style>

@endsection