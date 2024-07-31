@extends('app')
@section('prog')
<center>  
   <div class="special">
      <h2 class="path">SOFTWARE ENGINEERING CAREER PATH</h2>
   <h1 class="spec">Specialization</h1>
   <div class="">Since Software Engineering is a wide career, you can either choose a 
    specialized area such as becoming a Frontend, Backend, 
    FullStack web developer or a Native Application Developer (Mobile and Desktop)
   </div>
   </div>
</center>
<div class="stacks">
  <div class="lang" id="lang1">
   <div class="picture1"><img src="{{asset('storage/images/frontend eng.jpg')}}" alt="image"></div>
   <div class="front">Frontend Engineer</div>
   <div class="des1">
       As a frontend engineer, you’re equipped to build the front-end portion of 
      websites and web applications; that is, the part that users actually see 
      and interact with using web languages such as HTML, CSS, JavaScript and React, Angular, 
      Vue that allow users to access and interact with the site or app.
   </div>
   {{-- <div class="current">WE CURRENTLY TEACH HTML, CSS JAVASCRIPT AND REACT</div> --}}
   <ul>
      <li><div class="level">LEVEL 1 : HTML & CSS: <span>DURATION : 2 MONTHS </span></div></li>
      <li><div class="level">LEVEL 2 : JAVASCRIPT : <span>DURATION : 2 MONTHS </span></div></li>
      <li><div class="level">LEVEL 3 : REACT : <span>DURATION : 2 MONTHS </span></div></li>
      <li>
         <div class="level">one hour per day, three classes a week</div>
      </li>
      <li><div class="level">good interactive session with the instructors</div></li>
   </ul>

   {{-- <div class="standard">Standard Curriculum: <span class="span1">200k for 6 months</span></div>
   <div class="standard">Extreme Curriculum: <span class="span1">350k for 12 months</span></div>
   <div class="standard">Physical Class: <span>Yes | Standard (2hrs/day, 2 days/week) | Extreme (2 hours/day, 4 days/week)<span class="span1">350k for 12 months</span></div>
   <div class="standard">Virtual Class: <span>Yes – 5 hours/day | Weekends | (Instructor-led and interactive)<span class="span1">350k for 12 months</span></div> --}}
  
</div>
  
  <div class="lang" id="lang2">
   <div class="picture1"><img src="{{asset('storage/images/backend eng.jpg')}}" alt="image"></div>
   <div class="front">Backend Engineer</div>
   <div class="des1">
      As a backend developer, you are involved in data storage, security, 
     and other server-side functions that users do not see.
    Back-end developers are the experts who build and maintain the mechanisms 
   that process data and perform actions on websites 
   using technologies like ExpresJS, NodeJS, PHP Laravel, Python Django.
   </div>
   {{-- <div class="current">WE CURRENTLY TEACH HTML, CSS JAVASCRIPT AND REACT</div> --}}
   <ul>
      <li><div class="level">LEVEL 1 : NODEJS  AND ExpresJS: <span>DURATION : 2 MONTHS </span></div></li>
      <li><div class="level">LEVEL 2 : PHP LARAVEL : <span>DURATION : 2 MONTHS </span></div></li>
      <li>
         <div class="level">one hour per day, three classes a week</div>
      </li>
      <li><div class="level">good interactive session with the instructors</div></li>
   </ul>

{{-- <div class="level">LEVEL 3 :  PYTHON : <span>DURATION : 2 MONTHS </span></div> --}}

   {{-- <div class="standard">Standard Curriculum: <span class="span1">200k for 6 months</span></div>
   <div class="standard">Extreme Curriculum: <span class="span1">350k for 12 months</span></div>
   <div class="standard">Physical Class: <span>Yes | Standard (2hrs/day, 2 days/week) | Extreme (2 hours/day, 4 days/week)<span class="span1">350k for 12 months</span></div>
   <div class="standard">Virtual Class: <span>Yes – 5 hours/day | Weekends | (Instructor-led and interactive)<span class="span1">350k for 12 months</span></div> --}}
  
  </div>
  <div class="lang" id="lang3">
   <div class="picture1"><img src="{{asset('storage/images/fullstack.jpg')}}" alt="image"></div>
   <div class="front">Fullstack Engineer</div>
   <div class="des1fullstack">
      Full-stack developers are experts in both the frontend and backend and are usually the choice candidate when it’s time to choose a team lead.

      They are proficient in both frontend and backend languages and frameworks, as well as in server, network and hosting environments.
   </div>

   <ul>
      <li>
         <div class="level">one hour per day, three classes a week</div>
      </li>
      <li><div class="level">good interactive session with the instructors</div></li>
   </ul>
   {{-- <div class="current">WE CURRENTLY TEACH HTML, CSS JAVASCRIPT AND REACT</div> --}}

   {{-- <ul>
      <li><div class="level">LEVEL 1 : NODEJS  AND ExpresJS: <span>DURATION : 2 MONTHS </span></div></li>
      <li><div class="level">LEVEL 2 : PHP LARAVEL : <span>DURATION : 2 MONTHS </span></div></li>
      <li>
         <div class="level">one hour per day, three classes a week</div>
      </li>
      <li><div class="level">good interactive session with the instructors</div></li>
   </ul> --}}



{{-- <div class="level">LEVEL 3 :  PYTHON : <span>DURATION : 2 MONTHS </span></div> --}}

   {{-- <div class="standard">Standard Curriculum: <span class="span1">200k for 6 months</span></div>
   <div class="standard">Extreme Curriculum: <span class="span1">350k for 12 months</span></div>
   <div class="standard">Physical Class: <span>Yes | Standard (2hrs/day, 2 days/week) | Extreme (2 hours/day, 4 days/week)<span class="span1">350k for 12 months</span></div>
   <div class="standard">Virtual Class: <span>Yes – 5 hours/day | Weekends | (Instructor-led and interactive)<span class="span1">350k for 12 months</span></div> --}}
  
  </div>
  <div class="lang" id="lang4">
   <div class="picture1"><img src="{{asset('storage/images/frontend eng.jpg')}}" alt="image"></div>
   <div class="front">Frontend Engineer</div>
   <div class="des1">
       As a frontend engineer, you’re equipped to build the front-end portion of 
      websites and web applications; that is, the part that users actually see 
      and interact with using web languages such as HTML, CSS, JavaScript and React, Angular, 
      Vue that allow users to access and interact with the site or app.
   </div>
   {{-- <div class="current">WE CURRENTLY TEACH HTML, CSS JAVASCRIPT AND REACT</div> --}}
   <ul>
      <li><div class="level">LEVEL 1 : HTML & CSS: <span>DURATION : 2 MONTHS </span></div></li>
      <li><div class="level">LEVEL 2 : JAVASCRIPT : <span>DURATION : 2 MONTHS </span></div></li>
      <li><div class="level">LEVEL 3 : REACT : <span>DURATION : 2 MONTHS </span></div></li>
      <li>
         <div class="level">one hour per day, three classes a week</div>
      </li>
      <li><div class="level">good interactive session with the instructors</div></li>
   </ul>
   {{-- <div class="standard">Standard Curriculum: <span class="span1">200k for 6 months</span></div>
   <div class="standard">Extreme Curriculum: <span class="span1">350k for 12 months</span></div>
   <div class="standard">Physical Class: <span>Yes | Standard (2hrs/day, 2 days/week) | Extreme (2 hours/day, 4 days/week)<span class="span1">350k for 12 months</span></div>
   <div class="standard">Virtual Class: <span>Yes – 5 hours/day | Weekends | (Instructor-led and interactive)<span class="span1">350k for 12 months</span></div> --}}
  
  </div>
</div>
@endsection