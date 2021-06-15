@extends('admin_layout')
@section('admin_content')


	<div class="row-fluid sortable">
				<div class="box span12"> 
					<div class="box-header" data-original-title>
						

						<div class="h5 pd-20 mb-0">Edit Blog </div>
					</div>
					<div class="box-content">
						
                  <form action="{{ route('upadate_blog') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                  	 
                      @csrf

                      <input type="hidden" name="blid" value="{{ $blog->id }}">
                 
							<div class="control-group">
							  <label class="control-label" for="date01"><b>Title</b></label>

							  <div class="controls">
								<input type="text" class="form-control form-control" name="title" required=""  value="{{ $blog->title }}">
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Description</b></label>

							  <div class="controls">
								<textarea name="des" col='10' rows="10" class="form-control">
									
									{{ $blog->des }}
								</textarea>
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Image</b></label>


							  <img src="{{ asset('img') }}/{{ $blog->image }}" alt="" width="150" height="150">
                            <input type="hidden" name="filen" value="{{ $blog->image }}">
							  <div class="controls">
								<input type="file" class="form-control" name="image" accept="image/*">
							  </div>
							  
							</div>

							 

							<button type="submit" class="btn-success btn mt-3">update</button>

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