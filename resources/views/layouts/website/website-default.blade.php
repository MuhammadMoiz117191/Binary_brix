



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Binary Brix</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <link rel="shortcut icon"  href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
  <link  href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link  href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link  href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link  href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link  href="{{asset('assets/vendor/quill/quill.snow.css"')}}" rel="stylesheet">
  <link  href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link  href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link  href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link  href="{{asset('assets/css/main.css')}}" rel="stylesheet"> --}}


  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">

  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">


  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">



</head>

<body>
    @yield('content')
    @include('includes.website.footer')
    @yield('admininsertjavascript')
</body>

</html>
