@extends('admin_layout')
@section('admin_content')

	
	   <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>

						<div class="h5 pd-20 mb-0">Update Commission Fee</div>
						
					</div>
					<div class="box-content">
						
		
						@if(!empty($all_data))	
						@foreach($all_data as $data)
						<form class="form-horizontal" action="{{URL::to('/update-transection-fee',$data->id)}}" method="post">
						  <fieldset>
							{{csrf_field()}}
                             <h1 class="text-success"> Selling Setting</h1>
							<div class="control-group">
							  <label class="control-label" for="date01">Transaction Fee Sell (%)</label>
							  <div class="controls">
								<input type="number" class="form-control" name="transaction_fee_sell" value="{{ $data->transaction_fee_sell }}" required step="any">
							  </div>
							</div>
                           
							<div class="control-group">
							  <label class="control-label" for="date01">Cryptocurrency Additional Price  Selling </label>
							  <div class="controls">
								<input type="number" class="form-control" name="cryptocurrency_additional_sell_price" value="{{ $data->cryptocurrency_additional_sell_price }}" required step="any">
							  </div>
							</div>

								<div class="control-group">
							  <label class="control-label" for="date01">Cryptocurrency Decremental Price Selling</label>
							  <div class="controls">
								<input type="number" class="form-control" name="cryptocurrency_decremental_sell_price" value="{{ $data->cryptocurrency_decremental_sell_price }}" required step="any">
							  </div>
							</div>
                         
							  <h1 class="text-warning"> Buying  Setting</h1>

							  	<div class="control-group">
							  <label class="control-label" for="date01">Transaction Fee Buy (%)</label>
							  <div class="controls">
								<input type="number" class="form-control" name="transaction_fee_buy" value="{{ $data->transaction_fee_buy }}" required step="any">
							  </div>
							</div>
								<div class="control-group">
							  <label class="control-label" for="date01">Cryptocurrency Additional Price  Buying </label>
							  <div class="controls">
								<input type="number" class="form-control" name="cryptocurrency_additional_buy_price" value="{{ $data->cryptocurrency_additional_buy_price }}" required step="any">
							  </div>
							</div>

								<div class="control-group">
							  <label class="control-label" for="date01">Cryptocurrency Decremental Price Buying</label>
							  <div class="controls">
								<input type="number" class="form-control" name="cryptocurrency_decremental_buy_price" value="{{ $data->cryptocurrency_decremental_buy_price	 }}" required step="any">
							  </div>
							</div>
          				<div class="pt-3">
							  <button type="submit" class="btn btn-primary">Update</button>
							</div>
							 </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div>
			</div>


@endsection 