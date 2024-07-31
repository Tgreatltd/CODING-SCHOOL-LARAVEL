@extends('app')
@section('content')

   <div class="all">
     {{-- <h1 class="bg-danger">YOU ARE WELCOME</h1> --}}
    
  

<div class="container1" >
<div class="container2">
<div style="" class="become">BECOME A</div>
    <div style="" class="ware">SOFTWARE</div>
  <div style="" class="engineer">ENGINEER</div>
</div> 
<div class="container3" >learn the highly website development skills top companies are
  hungry for and build an impressive portfolio that gets you hired-even if you don"t have a
  math or science background
</div>
</div>

<section>
  <div class="software">
    <div class="pic"><img class="img" src="{{ asset('storage/images/CODING IMAGE.webp') }}" alt="Your Image"></div>
    <div class="eng">
      Software Engineering is one of the most in-demand jobs across the globe today.
<br><br>
Software Engineers are also known as programmers, developers or coders. 
They are the ones behind all the apps and software you use today either on your phone 
or computer within your browser. Software such as banking apps, booking apps, 
mailing apps (e.g Gmail), Chat apps (e.g WhatsApp) and other Social apps 
(e.g Twitter, Facebook) and many more are created by software engineers.
<br><br>
<div><button><a class="a" href="{{route('programs')}}">View Programs</a></button></div>
    </div>
  </div>
</section>

  <div class="box">
    <div class="box1">
      <div class="icon"><i class="fa-solid fa-users"></i></div>
     <div class="box2">
      <div>LIVE Small-Goup
        <p>Coaching</p>
      </div>
     </div>
    </div>
    <div class="box1">
      <div class="icon"><i class="fa-regular fa-address-card"></i></div>
      <div class="box3">
        <div>virtual meetings
          <p>that fit your schedule</p>
        </div>
      </div>
    </div>
    <div class="box1">
      <div class="icon">    <i class="fa-solid fa-address-book"></i></div>
      <div class="box4">
        <div>Cheap and
          <p>Affordable</p>
        </div>
      </div>
    </div>
    </div>
   
    
    {{-- <div class="contact">
      <div class="contact1">TEEGREAT CODING SCHOOL</div>
      <div class="contact2">
        <div>08134384556</div>
        <div>olamoyeguntimothy@gmail.com</div>
      </div>
    </div> --}}
</div all>

@endsection