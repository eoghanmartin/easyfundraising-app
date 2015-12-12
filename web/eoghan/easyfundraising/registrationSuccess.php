<?php

$clubName = $_GET['club'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Easy Fundraising</title>
        <link href="https://easyfundraising.firebaseapp.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width" />

        <link href="https://easyfundraising.firebaseapp.com/Content/bootstrap.css" rel="stylesheet"/>

        <!-- Custom CSS -->
        <link href="https://easyfundraising.firebaseapp.com/Content/freelancer.css" rel="stylesheet"/>

        <!-- Custom Fonts -->
        <link href="https://easyfundraising.firebaseapp.com/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="https://easyfundraising.firebaseapp.com/Scripts/modernizr-2.6.2.js"></script>

    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">Easy Fundraising</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#signup">Sign Up</a>
                        </li>
						 <li class="page-scroll">
                            <a href="#howitworks">How It Works</a>
                        </li>
                        <li class="page-scroll">
                            <a href="election2015.html">Election 2015</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#testimonials">Testimonials</a>
                        </li>
                        <li class="page-scroll">
                            <div class="contact-button">
                                <a href="#contact" class="btn btn-sm btn-outline">
                                    <i class="fa fa-envelope-o"></i> Contact Us
                                </a>
                                </div>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

    <header class="header-2-sub hero-shn-bg">
                <div class="container">
				 <p class="small">Your club details have been loaded into our database</p>
                    </div>
					<div class="container">
						<p class="small">Your club members can use this link to enter the competition. Copy link to your website / email etc</p>
						 <p class="small"><?php echo "<br> http://www.easyfundraising.ie/eoghan/easyfundraising/electionPage.php?club=" . $clubName; ?></p>
                    
						
				 <p class="small">You can access the admin section of the website to keep track of your members progress</p>
				 <p class="small"><?php echo "<br> http://www.easyfundraising.ie/eoghan/easyfundraising/admin.html?club=" . $clubName; ?></p>
                    </div>
					
    </header>

    <!-- Intro Section -->
    <section id="introduction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Introducing SportsPundit</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section id="signup" class="how-works success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sign Up</h2>
                    <h4>3 hassle free steps to allow your club to stop organising and start fundraising</h4>
                    <hr class="hr"/>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="circle-tile">
                            <a href="clubRegistration.html"><div class="circle-tile-heading blue"><h1>1</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>Club Registration</h4>
                                <p class="small">Easy sign up for free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-lg-offset-3">
                        <div class="circle-tile">
                            <a href="#"><div class="circle-tile-heading blue"><h1>2</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>Member Registration</h4>
                                <p class="small">Easy sign up for free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-lg-offset-3">
                        <div class="circle-tile">
                            <a href="#"><div class="circle-tile-heading blue"><h1>3</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>Track progress</h4>
                                <p class="small">Easy sign up for free.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 </section>
		 
		 <!-- Intro Section -->
     <section id="howitworks" class="how-works success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>How It Works</h2>
                    <h4>3 hassle free steps to allow your club to stop organising and start fundraising</h4>
                    <hr class="hr"/>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="circle-tile">
                            <a href="clubRegistration.html"><div class="circle-tile-heading blue"><h1>1</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>Club Registration</h4>
                                <p class="small">Easy sign up for free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-lg-offset-3">
                        <div class="circle-tile">
                            <a href="#"><div class="circle-tile-heading blue"><h1>2</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>Member Registration</h4>
                                <p class="small">Easy sign up for free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-lg-offset-3">
                        <div class="circle-tile">
                            <a href="#"><div class="circle-tile-heading blue"><h1>3</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>Track progress</h4>
                                <p class="small">Easy sign up for free.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 </section>

    <!-- Section RWC -->
    <section id="rwc" class="how-works success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Rugby World Cup Predictor</h2>
                    
                    <hr class="hr"/>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-2 col-lg-offset-3">
                        <div class="circle-tile">
                            <a href="playRWC.html"><div class="circle-tile-heading blue"><h1>1</h1></div></a>
                            <div class="circle-tile-content white">
                                <h4>RWC</h4>
                                 Click <a href="playRWC.html" class="small">Here  </a> To Enter. 
								
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
		 </section>

    <!-- Testimonials Section -->
    <section class="success" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Testimonials</h2>
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="container testimonials">
                    <div class="row">
                        <div class="col-md-4 testimonial">
                            <div class="row">
                                <div class="avatar col-md-5">
                                    <a href="#">
                                        <img class="img-circle" src="http://bootdey.com/img/Content/user_3.jpg" alt="Taylor Otwell">
                                    </a>
                                </div>
                                <div class="testimonial-main col-md-7">
                                    <h4 class="media-heading"><a href="#m">Dave Cahill</a></h4>
                                    <p class="testimony-body">"We've had fantastic success with this type of fundraising in the past and it's about time it came to the digital ae"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 testimonial">
                            <div class="row">
                                <div class="avatar col-md-5">
                                    <a href="#">
                                        <img class="img-circle" src="http://bootdey.com/img/Content/user_2.jpg" alt="Taylor Otwell">
                                    </a>
                                </div>
                                <div class="testimonial-main col-md-7">
                                    <h4 class="media-heading"><a href="#">Sean O'Dea</a></h4>
                                    <p class="testimony-body">"I've run this type of fundraiser for Clane for a few years now. We always raise much needed funds for the club but it comes with a huge labour overhead."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 testimonial">
                            <div class="row">
                                <div class="avatar col-md-5">
                                    <a href="#">
                                        <img class="img-circle" src="http://bootdey.com/img/Content/user_1.jpg" alt="Taylor Otwell">
                                    </a>
                                </div>
                                <div class="testimonial-main col-md-7">
                                    <h4 class="media-heading"><a href="#">Maryou Mcjouin</a></h4>
                                    <p class="testimony-body">...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Clane, Co. Kildare<br>info@easyfundraising.ie</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About EasyFundraising</h3>
                        <p>Placeholder text for potential about section with link to <a href="#">Start Fundraising</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Easy Fundraising 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dashboard</h2>
                            <hr class="hr">
                            <img src="C:\easyfundraising/Images/EasyFundrasingConcept.png"" class="img-responsive img-centered" alt="">
                            <p>The dashboard is the landing page for all easyfundraising users. All relative info is displayed in an easy to view user interface...</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://easyfundraising.firebaseapp.com/Scripts/jquery-1.9.1.js"></script>

    <script src="https://easyfundraising.firebaseapp.com/Scripts/bootstrap.js"></script>
<script src="https://easyfundraising.firebaseapp.com/Scripts/jqBootstrapValidation.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://easyfundraising.firebaseapp.com/Scripts/freelancer.js"></script>
<script src="https://easyfundraising.firebaseapp.com/Scripts/cbpAnimatedHeader.js"></script>
<script src="https://easyfundraising.firebaseapp.com/Scripts/contact_me.js"></script>
<script src="https://easyfundraising.firebaseapp.com/Scripts/classie.js"></script>



    </body>
</html>