<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app</title>
    {{-- <link rel="stylesheet" href="{{asset('CSS/app.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/coding.css') }}">
    <link rel="stylesheet" href="{{ asset('css/programs.css') }}">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="wrapper">
    <nav class="navs navbar navbar-expand-sm navbar-dark">
        <div class="great nav container">
         <div class="logo"> <a class="navbar-brand" href="javascript:void(0)">TEEGREAT TECH</a></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar" style="font-size: 15px; font-weight:500;">
            <ul class="navbar-nav me-auto">
                <li class="nav-item px-1">
                  <a class="nav-link" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item px-1 ">
                  <a class="nav-link" href="javascript:void(0)">About</a>
                </li>
                <li class="nav-item px-1">
                  <a class="nav-link" href="{{route('programs')}}">Programs</a>
                </li>
                <li class="nav-item px-1 ">
                    <a class="nav-link" href="javascript:void(0)">Contact Us</a>
                  </li>
                  <li class="nav-item px-1">
                   <button class="get"> <a class="nav-link" href="{{route('register')}}" style="font-weight: 500">GET STARTED</a></button>
                  </li>
              </ul>
          </div>
        </div>
      </nav>
  <div>
    @yield('content');
  </div>
  <div>
    @yield('prog')
</div>
 <div class="about">
  <div class="space"></div>
<div class="us">
<p class="aboutUs">About Us</p>
<p class="description">We strive to provide the tech industry with the people it needs, while providing 
  life-changing opportunities to people from all walks of life. We bring people together and we offer more than just software development, we focus on clients needs, go deep into requirements to suggest improvements, plan our workflow to 
  reduce the budget, and never miss the deadlines.</p>
</div>
<div class="contactUs">
  <div>CONTACT US</div>
  <div class="media">
    <div> <i class="fa-brands fa-whatsapp"  style="font-size: 20px"></i> 08134384556</div>
    <div> <i class="fa-solid fa-phone" style="font-size: 20px"></i> 08134384556</div>
  <div> <i class="fa-regular fa-envelope"  style="font-size: 20px"></i> olamoyeguntimothy@gmail.com</div>
  </div>
</div>
 </div>

   <div>
    <footer>
      <div class="foot">Copyright © 2024 | TEEGREAT TECH CODING SCHOOL. All Rights Reserved.</div>
     </footer>
     
   </div>


    {{-- <i class="fa-duotone fa-users"></i>
    <i class="fa-solid fa-users"></i>
    <i class="fa-solid fa-address-book"></i>
    <i class="fa-regular fa-address-card"></i>
    <i class="fa-solid fa-circle-user"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-linkedin"></i> --}}

    {{-- <div class="good"></div> --}}
</div>
</body>
</html>