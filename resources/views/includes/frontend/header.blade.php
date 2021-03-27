<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/feather.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/aos.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/choices.min.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/flickity-fade.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/flickity.min.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/vs2015.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/jarallax.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/quill.core.css" />

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ url('assets/dist/css')}}/theme.min.css">

    <title>Landkit</title>

  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-2");</script>

  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    <!-- Example -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Image -->
            <div class="text-center">
              <img src="{{ url('assets/dist/img')}}/illustration-1.png" alt="..." class="img-fluid mb-3" style="width: 200px;">
            </div>

            <!-- Heading -->
            <h2 class="font-weight-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>

           

          </div>
        </div>
      </div>
    </div>


    <!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="home">
          <img src="{{ url('assets/dist/img')}}/brand.svg" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link "  href="home" >
                Home
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
                <!-- <h1>lending dropdown</h1> -->
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link "   href="about_us">
                About Us
              </a>
            
            </li>
             
           
            <li class="nav-item dropdown">
              <a class="nav-link "  href="blog" >
                Blog
              </a>
              <!-- <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Settings
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./account-general.html">
                      General
                    </a>
                    <a class="dropdown-item" href="./account-security.html">
                      Security
                    </a>
                    <a class="dropdown-item" href="./account-notifications.html">
                      Notifications
                    </a>
                    <a class="dropdown-item" href="./billing-plans-and-payment.html">
                      Plans & Payment
                    </a>
                    <a class="dropdown-item" href="./billing-users.html">
                      Users
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Sign In
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./signin-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./signin-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./signin.html">
                      Basic
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSigninHorizontal">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSigninVertical">
                      Modal Vertical
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Sign Up
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./signup-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./signup-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./signup.html">
                      Basic
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSignupHorizontal">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSignupVertical">
                      Modal Vertical
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Password Reset
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./password-reset-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Error
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./error-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul> -->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link "   href="contact_us" >
                Contact Us
              </a>
            
            </li>
          </ul>

          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="#" target="_blank">
            +91 7461031290
          </a>

        </div>

      </div>
    </nav>

