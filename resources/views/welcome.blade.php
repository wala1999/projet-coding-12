<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andia - Responsive Agency Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <style>
        html {
            scroll-behavior: smooth;
        }


    </style>
</head>

<body>

    <!-- Top menu -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#top-navbar-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Andia - a super cool design agency...</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-delay="1000">
                            <i class="fa fa-home"></i><br>Home <span class="caret"></span>
                        </a>

                    </li>

                    <li>
                        <a href="#about"><i class="fa fa-user"></i><br>About</a>
                    </li>
                    
                    <li>
                        <a href="#portfolio"><i class="fa fa-camera"></i><br>Portfolio</a>
                    </li>

                    <li>
                        <a href="#testimonial"><i class="fa fa-user"></i><br>Testimonial</a>
                    </li>
                    <li>
                        <a href="/contact"><i class="fa fa-envelope"></i><br>Contact</a>
                    </li>
                    <li> <a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))

                    <li> <a href="{{ route('register') }}">Register</a>
                        @endif

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div class="slider-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 slider">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach ($sliders as $slider)
                            <li data-thumb="{{$slider->img_path}}">
                                <img src="{{$slider->img_path}}">
                                <div class="flex-caption">
                                    {{$slider->img_desc}}
                                </div>
                            </li>
                            @endforeach



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Presentation -->
    <section id="about">
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInLeftBig">
                        <h1>We are <span class="violet">Andia</span>, a super cool design agency.</h1>
                        <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-container" id="service">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 work-title wow fadeIn">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                    @foreach ($services as $service)

                    <div class="col-sm-3">
                        <div class="service wow fadeInDown">
                            <div class="service-icon"><i class="{{$service->logo}}"></i></div>
                            <h3>{{$service->titre}}"</h3>
                            <p>{{$service->description}}"</p>
                            <a class="big-link-1" href="services.html">Read more</a>
                        </div>
                    </div>
                    @endforeach
              

                </div>
            </div>
        </div>

    </section>

    <section id="portfolio">
        <div class="work-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 work-title wow fadeIn">
                        <h2>Our Latest Work</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="work wow fadeInUp">
                            <img src="img/portfolio/work1.jpg" alt="Lorem Website" data-at2x="img/portfolio/work1.jpg">
                            <h3>Lorem Website</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                            <div class="work-bottom">
                                <a class="big-link-2 view-work" href="img/portfolio/work1.jpg"><i
                                        class="fa fa-search"></i></a>
                                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="work wow fadeInDown">
                            <img src="img/portfolio/work2.jpg" alt="Ipsum Logo" data-at2x="img/portfolio/work2.jpg">
                            <h3>Ipsum Logo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                            <div class="work-bottom">
                                <a class="big-link-2 view-work" href="img/portfolio/work2.jpg"><i
                                        class="fa fa-search"></i></a>
                                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="work wow fadeInUp">
                            <img src="img/portfolio/work3.jpg" alt="Dolor Prints" data-at2x="img/portfolio/work3.jpg">
                            <h3>Dolor Prints</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                            <div class="work-bottom">
                                <a class="big-link-2 view-work" href="img/portfolio/work3.jpg"><i
                                        class="fa fa-search"></i></a>
                                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="work wow fadeInDown">
                            <img src="img/portfolio/work4.jpg" alt="Sit Amet Website"
                                data-at2x="img/portfolio/work4.jpg">
                            <h3>Sit Amet Website</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                            <div class="work-bottom">
                                <a class="big-link-2 view-work" href="img/portfolio/work4.jpg"><i
                                        class="fa fa-search"></i></a>
                                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($portfolios as $portfolio)
                        <div class="col-sm-3">
                            <div class="work wow fadeInUp">
                                <img src="{{$portfolio->img_path}}" alt="Lorem Website"
                                    data-at2x="{{$portfolio->img_path}}">
                                <h3>{{$portfolio->img_name}}</h3>
                                <p>{{$portfolio->img_desc}}</p>
                                <div class="work-bottom">
                                    <a class="big-link-2 view-work" href="{{$portfolio->img_path}}"><i
                                            class="fa fa-search"></i></a>
                                    <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials -->

    <section id="testimonial">
        <div class="testimonials-container">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 testimonials-title wow fadeIn">
                        <h2>Testimonials</h2>
                    </div>
                </div>

                <div class="testimonial-container">
                    <div class="dk-container">
                        <div class="cd-testimonials-wrapper cd-container">
                          
                            <ul class="cd-testimonials">
                                @foreach ($testimonials as $testimonial)
                                <li>
                                    <div class="testimonial-content">
                                        <p>{{$testimonial->desc}}</p>
                                        <div class="cd-author">
                                            <img src="{{$testimonial->img_path}}" alt="Author image">
                                            <ul class="cd-author-info">
                                                <li>{{$testimonial->name}}</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Contact Us /</h1>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 contact-form wow fadeInLeft">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit
                                lobortis</a>
                            nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <form role="form" action="/mail" method="POST">
                            @csrf
                                 <!--formulaire nom-->
                            <div class="form-group">
                                <label for="contact-name">Name</label>
                                <input type="text" class="" @error('name') is-invalid @enderror name="name" 
                                placeholder="Enter your name..." value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                                @enderror
                            </div>
                         
                            <!--formulaire email-->
                            <div class="form-group">
                                <label for="contact-email">Email</label>
                                <input type="text" class="contact-email" @error('email') is-invalid @enderror name="email" 
                                placeholder="Enter your email..." value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="contact-subject">Subject</label>
                                <input type="text" name="subject" placeholder="Your subject..." class="contact-subject"
                                    id="contact-subject">
                            </div>
                            <div class="form-group">
                                <label for="contact-message">Message</label>
                                <textarea name="message" placeholder="Your message..." class="contact-message"
                            id="contact-message">{{old('message')}}</textarea>
                            </div>
                            <button type="submit" class="btn">Send</button>
                        </form>
                    </div>
                    
                    <div class="col-sm-5 contact-address wow fadeInUp">
                        <h3>We Are Here</h3>
                        <div class="map"></div>
                        <h3>Address</h3>
                        <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
                        <p>Phone: 0039 333 12 68 347</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">     
                @foreach ($footers as $footer)
                <div class="col-sm-3 footer-box wow fadeInUp">
                    <h4>About Us</h4>
                    <div class="footer-box-text">
                        <p>
                            {{$footer->text}}
                        </p>
                        <p><a href="about.html">Read more...</a></p>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-3 footer-box wow fadeInDown">
                    <h4>Email Updates</h4>
                    <div class="footer-box-text footer-box-text-subscribe">
                        <p>Enter your email and you'll be one of the first to get new updates:</p>
                        <form role="form" action="assets/subscribe.php" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="subscribe-email">Email address</label>
                                <input type="text" name="email" placeholder="Email..." class="subscribe-email"
                                    id="subscribe-email">
                            </div>
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                        <p class="success-message"></p>
                        <p class="error-message"></p>
                    </div>
                </div>
                <div class="col-sm-3 footer-box wow fadeInUp">
                    <h4>Flickr Photos</h4>
                    <div class="footer-box-text flickr-feed"></div>
                </div>
                @foreach ($contacts as $contact)
                <div class="col-sm-3 footer-box wow fadeInDown">
                    <h4>Contact Us</h4>
              
                    <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> {{$contact->address}}</p>
                    <p><i class="fa fa-phone"></i> {{$contact->tel}}</p>
                        <p><i class="fa fa-user"></i> {{$contact->description}}</p>
                        <p><i class="fa fa-envelope"></i> Email: <a href="">{{$contact->email}}</a></p>
                    </div>
                   
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 footer-copyright wow fadeIn">
                    <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.
                    </p>
                </div>
                <div class="col-sm-5 footer-social wow fadeIn">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript --
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="flexslider/jquery.flexslider-min.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery.ui.map.min.js"></script>
    <script src="js/scripts.js"></script>-->
<script>
	jQuery(document).ready(function($) {
	//create the slider
	$('.cd-testimonials-wrapper').flexslider({
		selector: ".cd-testimonials > li",
		animation: "slide",
		controlNav: true,
		slideshow: false,
		smoothHeight: true,
		start: function() {
			$('.cd-testimonials').children('li').css({
				'opacity': 1,
				'position': 'relative'
			});
		}
	});
});
</script>
</body>

</html>
