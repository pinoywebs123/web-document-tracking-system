@extends('user.template')
@section('contents')
<h1>Create New File to upload</h1>
<div class="panel panel-primary">
      <div class="panel-heading">
      	<h2>Upload Document</h2>
      </div>
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
       
        @endif
  		
      
    
       <a href="{{route('download_docs')}}">Download</a> 


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
  
        <form action="{{route('upload_docs')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="document" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Select Department</label>
                        <select name="department" class="form-control" required=""> 
                            @foreach($departments as $dep)
                                <option value="{{$dep->id}}">{{$dep->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
            </div>
        </form>
  
      </div>
    </div>
@endsection