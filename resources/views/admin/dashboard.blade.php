@extends('admin_layout')
@section('admin_content')

	<div class="container">
   <div class="h5 pd-20 mb-0">Edit Settings of Cryptocurrency Values</div>
   <div class="my-auto">
   	@foreach ($all_data as $data)
   	<a href="{{URL::to('/edit_value/'.$data->id)}}" class="btn btn-block btn-success btn-lg"> Edit Settings</a>
   	      @endforeach
   </div>

	</div>
	 
 

@endsection