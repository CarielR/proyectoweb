<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Analytika Women</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/slippry.css">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/color/default.css">
  <script src="assets/js/modernizr.custom.js"></script>
  
    

</head>

<body>
  <header>

    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Analytika Women</a>
        </div>

        <div class="navigation">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <li class="current"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#contact">Contact</a></li>
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </ul>
              

                   
                        
                            

            </nav>
          </div>
          <!-- /.navbar-collapse -->
        </div>

      </div>
    </div>

  </header>
  <!-- section intro -->
  <section id="intro">
    <ul id="slippry-slider">
      <li>
        <a href="#slide1"><img src="assets/img/slide/11.png" alt="Transformamos datos en información para la toma de desiciones."></a>
      </li>
      <li>
        <a href="#slide2"><img src="assets/img/slide/22.jpg"  ></a>
      </li>
      <li>
        <a href="#slide3"><img src="assets/img/slide/33.jpg" ></a>
      </li>
    </ul>
  </section>
  <!-- end intro -->
  <!-- Section about -->
  <section id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>About us</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Creating a visual language around the beliefs of the brands we work with.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team1.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Baby Stewards Jr</strong></h5>
              <p>
                CEO - Founder
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team2.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Tommy Kreunichev</strong></h5>
              <p>
                Lead designer
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team3.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Moriella Maccini</strong></h5>
              <p>
                Customer support
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team4.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Brian James Scoothie</strong></h5>
              <p>
                Coffee maker
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section about -->
  <!-- section works -->
  <section id="works" class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Recent works</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              We have a history of doing what our name implies, creating a visual language around the beliefs of the brands we work with.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="grid effect" id="grid">
            <li>
              <a class="fancybox" data-fancybox-group="gallery" title="Portfolio name" href="assets/img/portfolio/1.jpg">
								<img src="assets/img/portfolio/1.jpg" alt="" />
							</a>
            </li>
            <li><a href="assets/img/portfolio/2.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/2.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/3.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/3.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/4.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/4.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/5.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/5.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/6.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/6.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/7.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/7.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/8.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/8.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/9.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/9.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/10.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/10.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/11.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/11.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/12.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/12.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/13.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/13.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/14.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/14.jpg" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- section works -->
  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Get in touch</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Lorem ipsum dolor sit amet, mutat paulo simul per no, assum fastidii vituperata eam no.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4><i class="icon-envelope"></i><strong>Contact form</strong></h4>
          <p>
            Want to work with us or just want to say hello? Don't hesitate to get in touch!
          </p>
          <!-- start contact form -->
          <div class="cform" id="contact-form">


            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-lg btn-theme">Send Message</button></div>
            </form>
          </div>
          <!-- END contact form -->
        </div>
        <div class="col-md-6">
          <h4>Find our location</h4>
          <p>View from google map</p>
          <!-- map -->
          <div id="section-map" class="clearfix">
            <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->
  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
                &copy; ProOnliPc Theme - All right reserved
              </p>
              <div class="credits">
             
                <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">ProOnliPc Themes</a> by <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">ProOnliPc</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>

  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
