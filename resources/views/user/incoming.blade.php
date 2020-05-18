@extends('user.template')
@section('contents')
<h1>Incoming Files</h1>
<table class="table">
	<thead>
		<th>Posted by</th>
		<th>Document</th>
		<th>Department from</th>
		<th>Department to</th>
		<th>Status</th>
		<th>Approved by</th>
		<th>Created</th>
		<th>Action</th>
	</thead>
	<tbody>
		@if($incomings)
		@foreach($incomings as $inc)
			
			<tr>
				<td>{{$inc->user->first_name}} {{$inc->user->last_name}}</td>
				<td>
					<a href="{{Storage::url($inc->document->name)}}">{{$inc->document->name}}</a>
				</td>
				<td>{{$inc->department_from($inc->department_from)->name}}</td>
				<td>{{$inc->department->name}}</td>
				<td>
					@if($inc->status_id == 1)
						<button class="btn btn-danger btn-xs">Pending</button>
					@else
						<button class="btn btn-primary btn-xs">Approved</button>
					@endif
				</td>
				<td>
					@if($inc->approved_by != null)
						{{$inc->approved($inc->approved_by)}}
					@endif
				</td>
				<td>
					{{$inc->created_at->todayDateTimeString()}}
				</td>
				<td>
					@if($inc->status_id == 1)
						<a href="{{route('accept_file',$inc->id)}}" class="btn btn-primary btn-xs">Accept</a>
					@elseif($inc->status_id == 2)
						<a href="#" class="btn btn-danger btn-xs">Forward</a>
					@endif
					
				</td>
			</tr>
		@endforeach
		@endif
	</tbody>
</table>

@endsection