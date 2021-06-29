<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Laravel</title> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Home | Design</title>
            <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
               
            <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('/home') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('/home') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>



        <header id="header"><!--header-->
        
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                           <!--  <a href="{{url('/home')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a> -->
                           <a href="{{url('/home')}}"><h1 style="text-decoration: none;">Logo</h1></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                              
                            </div>
                            
                            <div class="btn-group">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                           <ul class="nav navbar-nav">
                                <li><a href="{{url('home')}}"><i class="fa fa-lock"></i> Home</a></li>

                               <!--  <li><a href="#"><i class="fa fa-lock"></i> About</a></li> -->

                                <li><a href="{{url('my-projects')}}"><i class="fa fa-lock"></i> My Projects</a></li>

                                <li><a href="{{url('reviews')}}"><i class="fa fa-lock"></i>Client Reviews</a></li>
                                <li><a href="{{url('contact-us')}}"><i class="fa fa-unlock"></i> Contact</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        
        <!--/header-bottom-->
    </header>
    <!--/header-->
                 @yield('content')

<br>
<!--Footer-->
    
    <footer id="footer">
        <div class="footer-widget">

            <div class="container-fluid" style="background-color:#1b272d">
                <div class="row">
                    <div class="col-md-6" style="padding: 40px;">
                        <h3 style="color: white;">Don’t Hesitate, Talk to Our Experts</h3>
                    </div>

                     <div class="col-md-6" style="padding: 40px;padding-top: 50px;">
                        <a href="#"><button style="background-color: #ffc107;border-radius:5px;width:170px;height: 45px;border:1px solid #ffc107">START CHAT</button></a>

                    </div>
                </div>

            </div>







            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="single-widget text-justify">
                            <h2>ABOUT <span>e</span>-shopper</h2>
                            <p class="text-justify">Lerom Law Firm was founded in Toronto on the confidence that the best way to serve you is to be on the same wavelength with your goals, in accord with your moment in life or business, and resourceful for your prosperity. Guided by the big goals of diversity, inclusion, and the economic prosperity of Canada, we achieve the best results for our great clients looking for new opportunities in one of the best countries in the world.</p>
                        </div>
                    </div>

                    <div class="col-md-1">
                        
                    </div>

                    <div class="col-md-2">
                        <div class="single-widget">
                            <h2>QUICK LINK</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{url('home')}}">Home</a></li>
                                <li><a href="{{url('my_projects')}}">Projects</a></li>
                                <li><a href="{{url('reviews')}}">Client Reviews</a></li>
                                <!-- <li><a href="#">About</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li> -->
                            </ul>
                        </div>
                    </div>

                    
                   
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Newsletter</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                     
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021 BCAS Inc. All rights reserved.</p>
                    <p class="pull-right">Developed by <span><a target="_blank" href="#">Zahid Akbar Jakhar</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>  
    </body>
</html>
