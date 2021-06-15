@extends('admin_layout')
@section('admin_content')


	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<div class="h5 pd-20 mb-0">Add Blog </div>
					</div>
					<div class="box-content">
						
                  <form action="{{ route('save_blog') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                  	 
                      @csrf
                 
							<div class="control-group">
							  <label class="control-label" for="date01"><b>Title</b></label>

							  <div class="controls">
								<input type="text" class="form-control form-control" name="title" required="" >
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Description</b></label>

							  <div class="controls">
								<textarea name="des" col='10' rows="10" class="form-control"></textarea>
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Image</b></label>

							  <div class="controls">
								<input type="file" class="form-control" name="image" accept="image/*">
							  </div>
							  
							</div>
 
							

							<button type="submit" class="btn-success btn mt-3">save</button>

							 </form>

							</div>
							</div>
							</div>
		

@endsection

@section('footer')
   <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
     <script>
            CKEDITOR.replace( 'des' );
        </script>
<style type="text/css">
	
	.form-control{

		width: 100%!important;
	}
</style>

@endsection