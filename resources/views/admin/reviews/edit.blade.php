@extends('admin_layout')
@section('admin_content')


	<div class="row-fluid sortable">
				<div class="box span12"> 
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>edit Review </h2>
					</div>
					<div class="box-content">
						
                  <form action="{{ route('upadate_review') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                  	 
                      @csrf

                      <input type="hidden" name="rid" value="{{ $reviews->id }}">
                 
								<div class="control-group">
							  <label class="control-label" for="date01"><b>Rating</b></label>

							  <div class="controls">
								<input type="number" class="form-control form-control" name="rating" required=""  value="{{  $reviews->rating }}">
							  </div>
							  
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Comment</b></label>

							  <div class="controls">
								<textarea name="review" col='10' rows="10" class="form-control">{{  $reviews->review}}</textarea>
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>User</b></label>

							  <div class="controls">
							<select name="user_id" class="form-control" >
                          @php
                         $users=\App\User::all();

                           @endphp
								@foreach ($users as $element)
								<option value="{{ $element->id }}" @if($element->id==$reviews->user_id) selected="" @endif> {{ $element->email }}</option>
								@endforeach
								
								
							</select>
							  </div>
							  
							</div>

							

							<button type="submit" class="btn-success btn mt-3">update</button>

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