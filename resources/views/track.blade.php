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
    
    <div class="col-md-offset-4 col-md-4 well">
      <h4 class="text-center">DOCUMENT TRACKING SYSTEM IN NORSU-BCC</h4>
      <form action="{{route('track_check')}}" method="POST">
        <div class="form-group">
         
          <input type="text" name="tracking" class="form-control" required="" placeholder="Enter Tracking Code">
        </div>
       
        <div class="form-group">
          @csrf
          <button type="submit" class="btn btn-danger btn-block">Submit</button>
         
        </div>
      </form>
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
