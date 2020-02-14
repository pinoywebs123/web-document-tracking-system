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
      <center id="logo">
        <img src="{{URL::to('images/logo.png')}}" width="80px" height="80px">
      </center>
      <form action="{{route('login_check')}}" method="POST">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required="">
        </div>
        <div class="form-group">
          @csrf
          <button type="submit" class="btn btn-warning">Submit</button>
          <a href="{{route('register')}}" class="btn btn-default">Register</a>
        </div>
      </form>
    </div>
  </div>

</body>

  
  <script src="{{URL::to('dashboard/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::to('dashboard/js/jquery.nicescroll.js')}}"></script>
  <script src="{{URL::to('dashboard/js/scripts.js')}}"></script>
  <script type="text/javascript">
    @if(Session::has('success'))
      swal("Good job!", "You successfully registered!", "success");
    @endif
    @if(Session::has('error'))
      swal("Oops!", "Invalid Email/Password", "error");
    @endif
  </script>
</html>
