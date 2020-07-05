@extends('user.template')
@section('contents')
<h1 class="text-center">Select Department Files</h1>

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
        @endif

		<form action="{{route('forwarding_check',['tracking_id'=> Request()->segment(3)])}}" method="POST" enctype="multipart/form-data">
		<div class="form-group">
                 <input type="file" name="document" class="form-control" required="">
            </div>
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