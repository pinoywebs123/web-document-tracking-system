@if(Session::has('success'))
<div class="alert alert-success">
	{{Session::get('success')}}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-error">
	{{Session::get('error')}}
</div>
@endif