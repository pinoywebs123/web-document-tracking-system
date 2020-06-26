@extends('user.template')
@section('contents')
<h1 class="text-center">History of files has been processed</h1>

<table class="table">
	<thead>
		<th>Code</th>
		<th>Document</th>
		<th>Posted By</th>
		<th>Approved By</th>
		<th>Department</th>
		<th>Date</th>

	</thead>
	<tbody>
		@if($my_histories)
		@foreach($my_histories as $hist)
			
			<tr>
				<td>{{$hist->document->random_string}}</td>
				<td>
					<a href="{{Storage::url($hist->document->name)}}">{{$hist->document->name}}</a>
					
				</td>
				<td>{{$hist->creator->first_name}} {{$hist->creator->last_name}}</td>
				<td>{{$hist->approved->first_name}} {{$hist->approved->last_name}}</td>
				<td>{{$hist->department->name}}</td>
				<td>{{$hist->created_at->diffForHumans()}}</td>
			</tr>
		@endforeach
		@endif
	</tbody>
</table>
@endsection