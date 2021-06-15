@extends('admin_layout')
@section('admin_content')
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Meta Data Of Pages </h2>
					</div>
					<div class="box-content">
		
						<form class="form-horizontal" action="{{route('post_meta_Tag_save')}}" method="post">
							{{csrf_field()}}
						  <fieldset>
							
                            <input type="hidden" name="metaid" value="{{ $metaTag->id }}">
                           
                            <div class="control-group">
							  <label class="control-label" for="date01">Home Page Meta</label>
							  <div class="controls">
								<textarea  class="form-control" name="home" rows="12" cols="80" style="width: 100%;">{{ $metaTag->home }}</textarea>
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">Buy Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="buy" rows="8" cols="80" style="width: 100%;">{{ $metaTag->buy }}</textarea>
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">Sell Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="sell" rows="8" cols="80" style="width: 100%;">{{ $metaTag->sell }}</textarea>
							  </div>
							</div>


							 <div class="control-group">
							  <label class="control-label" for="date01">blog Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="blog" rows="8" cols="80" style="width: 100%;">{{ $metaTag->blog }}</textarea>
							  </div>
							</div>

						

							 <div class="control-group">
							  <label class="control-label" for="date01">support Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="support" rows="8" cols="80" style="width: 100%;">{{ $metaTag->support }}</textarea>
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">legal Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="legal" rows="8" cols="80" style="width: 100%;">{{ $metaTag->legal }}</textarea>
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">contact Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="contact" rows="8" cols="80" style="width: 100%;">{{ $metaTag->contact }}</textarea>
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">My Account Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="myaccount" rows="8" cols="80" style="width: 100%;">{{ $metaTag->myaccount }}</textarea>
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">Order buy Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="orderby" rows="8" cols="80" style="width: 100%;">{{ $metaTag->orderby }}</textarea>
							  </div>
							</div>
							 <div class="control-group">
							  <label class="control-label" for="date01">Order Sell Page Meta</label>
							  <div class="controls">
								<textarea class="form-control" name="ordersell" rows="8" cols="80" style="width: 100%;">{{ $metaTag->ordersell }}</textarea>
							  </div>
							</div>

					  </fieldset>

					  <button type="submit" class="btn btn-primary btn-block mt-3"> Save </button>
						</form>  
						
						  

					</div>
				</div>
			</div>

@endsection

@section('footer')

@endsection