<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('landing_page/assets/img/favicon.png') }}" type="image/png">
    <title>Eventify</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/css/bootstrap.min.css') }}" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/css/slicknav.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/css/nivo-lightbox.css') }}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/css/animate.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_page/assets/css/responsive.css') }}">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container" style="height: 80px;">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="{{ url('/index') }}" class="navbar-brand"><img src="{{ asset('landing_page/assets/img/logo.png') }}" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/index') }}"  >
                  Home
                </a>
              </li>
              <li class="nav-item" >
                <a class="nav-link" href="{{ url('/dashboard/daftar/create') }}" 
                 >
                  Booking
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-border btn-lg" href="{{ url('dashboard') }}"
                style="margin-top:7px; " >
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scrool" href="{{ url('/index') }}">Home</a>
          </li>
          <li>
            <a class="page-scroll" href="{{url ('/dashboard/daftar/create')}}">Booking</a>
          </li>
          <li>
            <a class="page-scroll" href="{{url ('dashboard')}}">Login</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->