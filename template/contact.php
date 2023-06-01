<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>E-School - Professional Learning and Courses HTML5 Template</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<!-- Template Styles -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- Mega Menu -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">

<!-- Animations -->
<link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- forms -->
<link rel="stylesheet" href="js/form/css/sky-forms.css" type="text/css" media="all">
</head>
<body>
<div class="site-wrapper" style="position: relative;">
  <div class="temp-header">
    <div class="container">
      <div class="row">
        <div class="top-links">
          <div class="col-md-6 pull-left nodisplay">Call: +1 123 456 7890</div>
          <div class="col-md-6 pull-right text-right">
            <ul class="top-right-list">
              <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
              <li><a href="register.html"><i class="fa fa-user"></i> Register</a> | </li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="header-section transparent style1 pin-style">
      <div class="container">
        <div class="mod-menu">
          <div class="row">
            <div class="col-sm-2"> <a href="index.html" title="" class="logo"> <img src="images/logo.png" alt=""> </a> </div>
            <div class="col-sm-10">
              <div class="main-nav">
                <ul class="nav navbar-nav top-nav">
                  <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                    <div class="search-box">
                      <div class="content">
                        <div class="form-control">
                          <input type="text" placeholder="Type to search" />
                          <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                        <a href="#" class="close-btn">x</a> </div>
                    </div>
                  </li>
                  <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                </ul>
                <div id="menu" class="collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="courses.html">Courses</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li><a href="courses.html"><i class="fa fa-angle-right"></i> Grid View</a></li>
                        <li><a href="courses1.html"><i class="fa fa-angle-right"></i> List View</a></li>
                        <li><a href="courses2.html"><i class="fa fa-angle-right"></i> Single Course</a></li>
                      </ul>
                    </li>
                    <li><a href="our-team.html">Our Team</a></li>
                    <li><a href="blog.html">Blog</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li><a href="blog.html"><i class="fa fa-angle-right"></i> Blog Standard</a></li>
                        <li><a href="blog1.html"><i class="fa fa-angle-right"></i> Blog 3 Columns</a></li>
                        <li><a href="blog2.html"><i class="fa fa-angle-right"></i> Blog Single Post</a></li>
                      </ul>
                    </li>
                    <li class="active"><a href="contact.php">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
    </div>
    <!--end menu--> 
  </div>
  <div class="clearfix"></div>
  <div class="page-header four">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Contact</h3>
        <h4>Get in Touch with Us</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="index.html">Home</a> <i>/</i> Contact</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
  <div class="clearfix"></div>
  <div class="section-lg counters">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="address-info">
            <h2 class="m-bottom2">Address Info</h2>
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            <br>
            <p>Please be patient while waiting for response.<br>
              <strong>Phone General Inquiries: +1 (012) 345 6789</strong></p>
            <br>
          </div>
          <!-- end section -->
          
          <div class="address-info">
            <h2 class="m-bottom2">Address Info Two</h2>
            <ul class="address-info map">
              <li><i class="fa fa-map-marker"></i> 15 Barnes Wallis Way, 358744, USA</li>
              <li><i class="fa fa-phone"></i> +1 (012) 345 6789</li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
            </ul>
          </div>
          <!-- end section --> 
        </div>
        <div class="col-md-8">
          <form action="demo-contacts-process.php" method="post" id="sky-form" class="sky-form">
            <fieldset>
              <div class="row">
                <section class="col col-6">
                  <label class="label">Name</label>
                  <label class="input"> <i class="icon-append fa fa-user"></i>
                    <input type="text" name="name" id="name">
                  </label>
                </section>
                <section class="col col-6">
                  <label class="label">E-mail</label>
                  <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                    <input type="email" name="email" id="email">
                  </label>
                </section>
              </div>
              <section>
                <label class="label">Subject</label>
                <label class="input"> <i class="icon-append fa fa-tag"></i>
                  <input type="text" name="subject" id="subject">
                </label>
              </section>
              <section>
                <label class="label">Message</label>
                <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                  <textarea rows="4" name="message" id="message"></textarea>
                </label>
              </section>
              <section>
                <label class="label">Enter characters below:</label>
                <label class="input input-captcha"> <img src="captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
                  <input type="text" maxlength="6" name="captcha" id="captcha">
                </label>
              </section>
              <section>
                <label class="checkbox">
                  <input type="checkbox" name="copy">
                  <i></i>Send a copy to my e-mail address</label>
              </section>
            </fieldset>
            <footer>
              <button type="submit" class="button">Send message</button>
            </footer>
            <div class="message"> <i class="fa fa-check"></i>
              <p>Your message was successfully sent!</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end counters-->
  <div class="clearfix"></div>
  <div class="section-lg">
    <div class="container">
      <div class="row"> <img class="img-responsive m-auto" src="images/studet-group.jpg" alt=""> </div>
    </div>
  </div>
  <!--end image-->
  <div class="clearfix"></div>
  <div class="bg-parallax">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="m-bottom3 font-white">Lets Get Started</h2>
          <p  class="m-bottom6 font-white">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row animate-in" data-anim-type="fade-in-up" data-anim-delay="100">
        <div class="col-md-8 col-md-offset-2 text-center">
          <p><a href="#" class="btn btn-primary btn-lg">Create A Free Course</a></p>
        </div>
      </div>
    </div>
  </div>
  <!--end message-->
  <div class="clearfix"></div>
  <footer id="footer">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>E-School</h4>
          <ul class="footer-links">
            <li><a href="#">Course</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Social Media</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Useful Links</h4>
          <ul class="footer-links">
            <li><a href="#">Held Desk</a></li>
            <li><a href="#">Facilities</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Student Support</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Our Course</h4>
          <ul class="footer-links">
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Visual Assistant</a></li>
            <li><a href="#">System Analysis</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Legal</h4>
          <ul class="footer-links">
            <li><a href="#">API</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Find Designers</a></li>
            <li><a href="#">Find Developers</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4 footer-widget">
          <h4>Contact Info</h4>
          <p>15 Barnes Wallis Way, #358, Francisco, CA 94107</p>
          <p>+1 012 345 6789</p>
          <p>E-mail: <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
        </div>
      </div>
      <div class="copyright">
        <div class="col-md-12 text-center">
          <p>&copy; Copyright © 2017 Yourdomian. All rights reserved.</p>
          <ul class="social-icons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
            <li><a href="#"><i class="icon-googleplus"></i></a></li>
            <li><a href="#"><i class="icon-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->
  <div class="clearfix"></div>
</div>
<!-- end site wrapper--> 

<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page--> 

<!-- jQuery first, then Tether, then Bootstrap JS. --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Mega Menu --> 
<script src="js/megamenu/js/main.js"></script> 
<script src="js/megamenu/js/onepage.js"></script> 

<!-- Magnific Popup --> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/magnific-popup-options.js"></script> 

<!-- Counters --> 
<script src="js/aninum/jquery.animateNumber.min.js"></script> 

<!-- Animations --> 
<script src="js/animations/animations.min.js" type="text/javascript"></script> 
<script src="js/animations/appear.min.js" type="text/javascript"></script> 

<!-- contact form --> 
<script src="js/form/jquery.form.min.js"></script> 
<script src="js/form/jquery.validate.min.js"></script> 
<script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
			})(jQuery);		
		</script> 

<!-- Scroll Up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>
</body>
</html>