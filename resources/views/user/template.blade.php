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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  @yield('styles')
</head>

<body>
 
  <section id="container" class="">
  
    @include('user.nav')
    @include('user.side')
   
    <section id="main-content">
      <section class="wrapper">
       @yield('contents')
      </section>
    </section>
  

 

</body>

  
  <script src="{{URL::to('dashboard/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::to('dashboard/js/jquery.nicescroll.js')}}"></script>
  <script src="{{URL::to('dashboard/js/scripts.js')}}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script type="text/javascript">
    @if(Session::has('success'))
    Toastify({
      text: "{{Session::get('success')}}",
      duration: 3000, 
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: 'right', // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      onClick: function(){} // Callback after click
    }).showToast();

    @endif

    @if(Session::has('error'))
    Toastify({
      text: "Thank You!",
      duration: 3000, 
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: 'right', // `left`, `center` or `right`
     
      stopOnFocus: true, // Prevents dismissing of toast on hover
      onClick: function(){} // Callback after click
    }).showToast();

    @endif
    
  </script>
  @yield('scripts');
</html>
