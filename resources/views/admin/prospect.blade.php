@extends('admin.layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-8 offset-md-2">
		<div class="card">
			<div class="card-header">{{$prospect->name}}</div>

			<div class="card-body">
				<h6>Email:{{$prospect->email}}</h6>
				<h6>Phone:{{$prospect->phone}}</h6>
				<h6>Secondary Phone:{{$prospect->phone_2}}</h6>
				<h6>Province/State:{{$prospect->provience_state}}</h6>
				<h6>City:{{$prospect->city}}</h6>
				<h6>Country:{{$prospect->country}}</h6>
				<h6>Notes:{{$prospect->note}}</h6>
				<h6>Prospect Message:{{$prospect->prospect_message}}</h6>
				<h6>Claimable:{{$prospect->isClaimable ==true ? 'Yes' : 'NO'}}</h6>
				<h6>Assigned To: {{$prospect->assigned}}<span class="btn btn-sm btn-primary">Assign</span></h6>
			</div>
		</div>
	</div>

</div>
@endsection 