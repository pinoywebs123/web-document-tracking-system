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

  <style type="text/css">
    body{
      background-color: #7f8c8d;
    }
    .well{
      margin-top: 10%;
      border-radius: 20px;
    }
    #logo{
      margin-top: -50px;
    }
  </style>
</head>

<body>
  <div class="container">
    
    <div class="col-md-offset-3 col-md-6 well">
      
      <form action="{{route('register_check')}}" method="POST">
          <div class="row">
            <div class="form-group col-md-4">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" required="">
          </div>
            <div class="form-group col-md-4">
              <label>Middle Name</label>
              <input type="text" name="middle_name" class="form-control" required="">
            </div>
            <div class="form-group col-md-4">
              <label>Last Name</label>
              <input type="text" name="last_name" class="form-control" required="">
            </div>
          </div>

          <div class="form-group">
            <label>Department</label>
            <select name="department_id" class="form-control">
              <option value="1">Guest</option>
              <option value="2">CAS</option>
              <option value="3">Registrar</option>
            </select>
          </div>
         <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control" required="">
          </div>
        <div class="form-group">
          <label>Contact</label>
          <input type="text" name="contact" class="form-control" required="">
        </div>
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
          <a href="{{route('login')}}" class="btn btn-default">Login</a>
        </div>
      </form>
    </div>
  </div>

</body>

  
  <script src="{{URL::to('dashboard/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::to('dashboard/js/jquery.nicescroll.js')}}"></script>
  <script src="{{URL::to('dashboard/js/scripts.js')}}"></script>
  
</html>
