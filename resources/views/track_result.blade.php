<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>NORSU Document Tracking System</title>


  <link href="{{URL::to('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('dashboard/css/bootstrap-theme.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{URL::to('dashboard/css/elegant-icons-style.css')}}">
  
  <link href="{{URL::to('dashboard/css/widgets.css')}}" rel="stylesheet">
  <link href="{{URL::to('dashboard/css/style.css')}}" rel="stylesheet">
 
  {{-- <script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
  <script src="{{URL::to('dashboard/js/bootstrap.min.js')}}"></script> --}}
  <script src="{{URL::to('jquery.min.js')}}"></script>
  <script src="{{URL::to('bootstrap.min.js')}}"></script>
  <script src="{{URL::to('sweet.js')}}"></script>

  <style type="text/css">
    body{
      background-color: #7f8c8d;
    }
    .well{
      margin-top: 20%;
      border-radius: 20px;
    }
    #logo{
      margin-top: -50px;
    }
  </style>
</head>

<body>
  <div class="container">
  
  <div class="well">
  <a href="{{route('login')}}" class="btn btn-primary text-center">Home</a>
    <table class="table">
      <thead>
        <th>Code</th>
        <th>Posted by</th>
        <th>Document</th>
        <th>Department from</th>
        <th>Department to</th>
        <th>Status</th>
        <th>Approved by</th>
        <th>Created</th>
        
      </thead>
      <tbody>
       <tr>
         <td>{{$find_document->random_string}}</td>
         <td>{{$find_document->tracking->user->first_name}} {{$find_document->tracking->user->last_name}}</td>
          <td>{{$find_document->name}}</td>
          <td>{{$find_document->tracking->department_from($find_document->tracking->department_from)->name}}</td> 
          <td>{{$find_document->tracking->department->name}}</td>
          <td>
            @if($find_document->tracking->status_id == 1)
              <button class="btn btn-danger btn-xs">Pending</button>
            @else
              <button class="btn btn-primary btn-xs">Approved</button>
            @endif
          </td> 
          <td>
           @if($find_document->tracking->approved_by != null)
            {{$find_document->tracking->approved($find_document->tracking->approved_by)}}
           @else
            Pending
           @endif
          </td>
          <td>{{$find_document->tracking->created_at->diffForHumans()}}</td>
       </tr>
      </tbody>
    </table>

    
  </div>
   
  </div>

</body>

  
  <script src="{{URL::to('dashboard/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::to('dashboard/js/jquery.nicescroll.js')}}"></script>
  <script src="{{URL::to('dashboard/js/scripts.js')}}"></script>
  <script type="text/javascript">
    
    @if(Session::has('error'))
      swal("Oops!", "Invalid Tracking Code", "error");
    @endif
  </script>
</html>
