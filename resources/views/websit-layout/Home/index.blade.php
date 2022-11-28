<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- font css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assest/css/all.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assest/css/style.css') }}" /> --}}
    <link rel="icon" href="{{ asset('assest/image/SVG- Geeks/الفورم/Group 1039.svg') }}">
    <link rel="stylesheet" href="{{ asset('assest/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assest/background.css') }}"> --}}
    <title>Geeks360</title>


  </head>
  <body >
   
    <!-- start Header  -->
    <div class="header">
      <div class="contener">
        <div class="header_content">
          <div class="logo">
            <img src="{{ asset('assest/image/SVG- Geeks/الفورم/Group 1039.svg') }}" alt="" />
          </div>
          <ul class="nav">
            <li><a class="active" href="/">Home</a></li>
            <li><a href="{{ route('login.view') }}">Login</a></li>
            <li><a href="/register">Sign Up</a></li>
            <li><a href="{{ route('report.view') }}">Reports</a></li>
            {{-- <li><a href="{{ route('dashboard.view') }}">
              @php
                if()
              @endphp
              Dashboard</a></li> --}}
            <li><a href="/">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end Header  -->

    <!-- start home -->
    <div class="home">
      <div class="overlay">
        <div class="home_content">
          
          <hr />
          <h1 class="title">Geeks360</h1>
          <hr />
          <p class="home_desc" >First Team</p>
        </div>
      </div>
    </div>
    
    <!-- end home -->
  </body>
</html>
