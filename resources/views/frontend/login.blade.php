
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FiFa-World-Cup-Login</title>
  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />


  <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="frontend/assets/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="frontend/assets/css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="frontend/assets/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="frontend/assets/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="frontend/assets/css/custom.css">
   <!-- font family -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
  <style>
    /* Importing Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

.body1 {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-image:url('frontend/assets/css/images/bg1.png');
  overflow: hidden;
}
.wrapper {
  max-width: 500px;
  width: 100%;
  background: #ffffffe0;
  border-radius: 5px;
  padding: 15px;
  box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
}
.wrapper .title {
  height: 120px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  
  align-items: center;
  justify-content: center;
  
}
.wrapper form {
  padding: 25px 35px;
}
.wrapper form .row {
  height: 60px;
  margin-top: 25px;
  position: relative;
}
.wrapper form .row input {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 70px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 18px;
  transition: all 0.3s ease;
}
form .row input:focus {
  border-color: #16a085;
}
form .row input::placeholder {
  color: #999;
}
.wrapper form .row i {
  position: absolute;
  width: 55px;
  height: 100%;
  color: #fff;
  font-size: 22px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass {
  margin-top: 12px;
}
.wrapper form .pass a {
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover {
  text-decoration: underline;
}
.wrapper form .button input {
  margin-top: 10px;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover {
  background: #12876f;
}
.wrapper form .signup-link {
  text-align: center;
  margin-top: 45px;
  font-size: 17px;
}
.wrapper form .signup-link a {
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover {
  text-decoration: underline;
}
.gap-6{
    height: 95px;
    background-image:url('frontend/assets/css/images/bg1.png');
}
    </style>
</head>
<body class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    {{-- <div id="preloader">
       <img class="preloader" src="frontend/assets/css/images/loading-img.gif" alt="">
    </div> --}}
    <!-- END LOADER -->
    <section id="top">
       <header>
          <div class="container">
             <div class="header-top">
                <div class="row">
                   <div class="col-md-6">
                      <div class="full">
                         <div class="logo">
                            <a href="{{url('/')}}"><img src="frontend/assets/css/images/logo.png" alt="#" /></a>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="right_top_section">
                         <!-- social icon -->
                         <ul class="social-icons pull-left">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                         </ul>
                         <!-- end social icon -->
                         <!-- button section -->
                         <ul class="login">
                            <li class="login-modal">
                               <a href="{{url('/login')}}" class="login"><i class="fa fa-user"></i>Login</a>
                            </li>
                            <li>
                               <div class="cart-option">
                                  <a href="{{url('/register')}}"><i class="fa fa-shopping-cart"></i>Register</a>
                               </div>
                            </li>
                         </ul>
                         <!-- end button section -->
                      </div>
                   </div>
                </div>
             </div>
             <div class="header-bottom">
                <div class="row">
                   <div class="col-md-12">
                      <div class="full">
                         <div class="main-menu-section">
                            <div class="menu">
                               <nav class="navbar navbar-inverse">
                                  <div class="navbar-header">
                                     <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                     <span class="sr-only">Toggle navigation</span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     </button>
                                     <a class="navbar-brand" href="#">Menu</a>
                                  </div>
                                  <div class="collapse navbar-collapse js-navbar-collapse">
                                     <ul class="nav navbar-nav">
                                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About</a></li>
                                        <li><a href="{{url('/team')}}">Team</a></li>
                                        <li><a href="{{url('/news')}}">News</a></li>
                                        <li class="dropdown mega-dropdown">
                                           <a href="match" class="dropdown-toggle" data-toggle="dropdown">Match<span class="caret"></span></a>				
                                           <ul class="dropdown-menu mega-dropdown-menu">
                                              <li class="col-sm-8">
                                                 <ul>
                                                    <li class="dropdown-header">Men Collection</li>
                                                    <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                       <div class="carousel-inner">
                                                          <div class="item active">
                                                             <div class="banner-for-match"><a href="#"><img class="img-responsive" src="frontend/assets/css/images/match-banner1.jpg" alt="#" /></a></div>
                                                          </div>
                                                          <!-- End Item -->
                                                          <div class="item">
                                                             <div class="banner-for-match"><a href="#"><img class="img-responsive" src="frontend/assets/css/images/match-banner1.jpg" alt="#" /></a></div>
                                                          </div>
                                                          <!-- End Item -->
                                                          <div class="item">
                                                             <div class="banner-for-match"><a href="#"><img class="img-responsive" src="frontend/assets/css/images/match-banner1.jpg" alt="#" /></a></div>
                                                          </div>
                                                          <!-- End Item -->                                
                                                       </div>
                                                       <!-- End Carousel Inner -->
                                                       <!-- Controls -->
                                                       <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                       <span class="sr-only">Previous</span>
                                                       </a>
                                                       <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                       <span class="sr-only">Next</span>
                                                       </a>
                                                    </div>
                                                    <!-- /.carousel -->
                                                 </ul>
                                              </li>
                                              <li class="col-sm-4">
                                                 <ul class="menu-inner">
                                                    <li class="dropdown-header">Next Matchs</li>
                                                    <li><a href="#">Contrary vs classical</a></li>
                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                    <li><a href="#">Contrary vs classical</a></li>
                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                    <li><a href="#">Contrary vs classical</a></li>
                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                    <li><a href="#">Contrary vs classical</a></li>
                                                    <li><a href="#">Discovered vs undoubtable</a></li>
                                                 </ul>
                                              </li>
                                           </ul>
                                        </li>
                                        <li><a href="{{url('/blog')}}">Blog</a></li>
                                        <li><a href="{{url('/contact')}}">contact</a></li>
                                     </ul>
                                  </div>
                                  <!-- /.nav-collapse -->
                               </nav>
                               <div class="search-bar">
                                  <div id="imaginary_container">
                                     <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control"  placeholder="Search" >
                                        <span class="input-group-addon">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                        </span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </header>
     </section>
     <div class="gap-6"></div>
    <div class="body1">
  <div class="wrapper">
    <div class="title"><span>Login FiFa World Cup</span></div>
    <form action="login" method="POST">
      @csrf
      <div class="row">
        <i class="fas fa-envelope"></i>
        <input type="text" name="username" placeholder="Username" />
        @error('username')
        <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password"  />
        @error('password')
        <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="pass"><a href="#">Forgot password?</a></div>
      <div class="row button">
        <input type="submit" value="Login" />
      </div>
      <div class="signup-link">Not a member? <a href="{{url('register')}}">Signup now</a></div>
    </form>
  </div>
    </div>
    <footer id="footer" class="footer">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="full">
                    <div class="footer-widget">
                       <div class="footer-logo">
                          <a href="#"><img src="frontend/assets/css/images/footer-logo.png" alt="#" /></a>
                       </div>
                       <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                       <ul class="social-icons style-4 pull-left">
                          <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                          <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                          <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-2">
                 <div class="full">
                    <div class="footer-widget">
                       <h3>Menu</h3>
                       <ul class="footer-menu">
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="team.html">Our Team</a></li>
                          <li><a href="news.html">Latest News</a></li>
                          <li><a href="matche.html">Recent Matchs</a></li>
                          <li><a href="blog.html">Our Blog</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="full">
                    <div class="footer-widget">
                       <h3>Contact us</h3>
                       <ul class="address-list">
                          <li><i class="fa fa-map-marker"></i> Stadium Road Motera, Sabarmati, Ahmedabad, Gujarat, 380005</li>
                          <li><i class="fa fa-phone"></i> +91-9405622525</li>
                          <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> fifaworld@cup.com</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="full">
                    <div class="contact-footer">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1276352.848944694!2d70.82592193228258!3d23.140674454202905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83c17dc37ee3%3A0xab976f6a3a1f932d!2sNarendra%20Modi%20Stadium!5e0!3m2!1sen!2sin!4v1743932239315!5m2!1sen!2sin" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="footer-bottom">
           <div class="container">
              <p>Copyright © 2025 Distributed by <a href="#" target="_blank">FiFa World Cup</a></p>
           </div>
        </div>
     </footer>
     {{-- @if(session('success'))
     <div id="successPopup" style="
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background: #e0ffe0;
         border: 2px solid #4CAF50;
         padding: 20px 30px;
         border-radius: 10px;
         z-index: 9999;
         text-align: center;
         box-shadow: 0 0 15px rgba(0,0,0,0.2);
         ">
       <strong>{{ session('success') }}</strong><br><br>
       <button onclick="document.getElementById('successPopup').style.display='none'"
         style="background-color: #4CAF50; color: white; border: none; padding: 8px 12px; border-radius: 5px;">
         Close
       </button>
     </div>
   
     <script>
       setTimeout(() => {
         const popup = document.getElementById('successPopup');
         if (popup) popup.style.display = 'none';
       }, 4000);
     </script>
   @endif --}}
</body>
</html>