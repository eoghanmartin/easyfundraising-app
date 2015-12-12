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
                            <a href="#how-it-works">Sign Up</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#design">Design</a>
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

    
 
     

    

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <h2><?php print  $clubName; ?></h2>
                    <hr class="hr">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
					<input type="hidden" name="clubName" value="<?php echo $clubName; ?>" id="clubName">
                        
						<div class="row control-group">
						
						<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label></label>
                                
                            </div>
						
						<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name" id="playerName" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
														
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your Email Address</label>
                                <input type="text" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your Phone Number</label>
                                <input type="text" class="form-control" placeholder="Your Phone Number" id="phone" required data-validation-required-message="Please enter your Phone Number.">
                                <p class="help-block text-danger"></p>
                            </div>
							
                         <div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>who will be the next Taoiseach ?  </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q1" id="radio1" value ="1" >  Enda Kenny (2 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q1" id="radio2" value ="2" >  Michael Martin (3 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q1" id="radio3"value ="3"  >  Gerry Adams (4 points) 
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q1" id="radio4" value ="4"  >  Other (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
							
                        </div>
                        
						
						 <div class="row control-group">
						
															
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>How many seats will Fianna Fail win ? </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q2" id="radio1" value ="1" >  less than 20 (5 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q2" id="radio2" value ="2" >  between 20 and 35 inclusive (4 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q2" id="radio3"value ="3"  >  between 36 and 50 inclusive (3 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q2" id="radio4" value ="4"  >  greater than 50 (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
							
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>How many seats will Fine Gael win ? </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q3" id="radio1" value ="1" >  less than 20 (5 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q3" id="radio2" value ="2" >  between 20 and 35 inclusive (4 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q3" id="radio3"value ="3"  >  between 36 and 50 inclusive (3 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q3" id="radio4" value ="4"  >  greater than 50 (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
							
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>Who will win the most First Preference Votes in the country? </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q4" id="radio1" value ="1" >  Willie O Dea (3 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q4" id="radio2" value ="2" >  Enda Kenny (5 points) 
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q4" id="radio3"value ="3"  >  Jackie Healy Rae (7 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q4" id="radio4" value ="4"  >  Other (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
							
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>How many parties will make up the next Government (independents = 1 party) </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q5" id="radio1" value ="1" >  1 (3 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q5" id="radio2" value ="2" >  2 (5 points) 
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q5" id="radio3"value ="3"  >  3 (7 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q5" id="radio4" value ="4"  >  Other (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>Who will be the next Tanaiste </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q6" id="radio1" value ="1" >  Joan Burton (3 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q6" id="radio2" value ="2" >  Michael Martin (5 points) 
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q6" id="radio3"value ="3"  >  Gerry Adams (7 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q6" id="radio4" value ="4"  >  Other (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
							
							
												
							
							<div class="form-group col-xs-12 floating-label-form-group controls">
                               <h4>Who will win the most seats </h4>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>radio1</label>
                                <input type="radio" placeholder="radioo1" name="q7" id="radio1" value ="1" >  Fine Gael (3 points)
								 <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q7" id="radio2" value ="2" >  Fianna Fail (5 points) 
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q7" id="radio3"value ="3"  >  Sinn Fein (7 points)
                                <p class="help-block text-danger"></p>
								<input type="radio" placeholder="radioo1" name="q7" id="radio4" value ="4"  >  Other (6 points)
                                <p class="help-block text-danger"></p>
                            </div>
																			
                        </div>
						
						
						
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
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


    <script src="Scripts/jquery-1.9.1.js"></script>

    <script src="Scripts/bootstrap.js"></script>
<script src="Scripts/jqBootstrapValidation.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="Scripts/freelancer.js"></script>
<script src="Scripts/cbpAnimatedHeader.js"></script>
<script src="Scripts/election3.js"></script>
<script src="Scripts/classie.js"></script>



    </body>
</html>
