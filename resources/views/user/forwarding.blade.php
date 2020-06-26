@extends('user.template')
@section('contents')
<h1 class="text-center">Select Department Files</h1>

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		
		<form action="{{route('forwarding_check',['tracking_id'=> Request()->segment(3)])}}" method="POST">
			<div class="form-group">
				<select class="form-control" name="department_id">
					@foreach($departments as $dept)
						<option value="{{$dept->id}}">{{$dept->name}}</option>
					@endforeach
				</select>
			</div>
			@csrf
			<div class="form-group">
				<button class="btn btn-primary btn-block">SEND</button>
			</div>
		</form>
	</div>
</div>
@endsection