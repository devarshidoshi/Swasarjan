<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "swasarjan");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$fname = $_REQUEST['fname'];
		$mname = $_REQUEST['mname'];
		$dob = $_REQUEST['dob'];
		$gender = $_REQUEST['gender'];
		$aadhar_no = $_REQUEST['aadhar_no'];
		$mobile = $_REQUEST['mobile'];
		$address = $_REQUEST['address'];
		$district = $_REQUEST['district'];
		$pin = $_REQUEST['pin'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO joinus (`name`, `fname`, `mname`, `dob`, `gender`, `aadhar_no`, `mobile`, `address`, `district`, `pin`) VALUES ('$name',
			'$fname','$mname','$dob','$gender','$aadhar_no','$mobile','$address','$district','$pin')";
		
		if(mysqli_query($conn, $sql)){
			echo '<script>alert("Form Submitted Successfully")</script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/humanity-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 04:06:18 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Swa Sarjan Foundation</title><!-- mobile responsive meta -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="images/logo/logo.png" rel="apple-touch-icon" sizes="180x180">
    <link href="images/logo/logo.png" rel="icon" sizes="32x32" type="image/png">
    <link href="images/logo/logo.png" rel="icon" sizes="16x16" type="image/png">



</head>

<body>

    <div class="boxed_wrapper">


        <div class="top-bar">
            <div class="container">
                <div class="clearfix">
                    <div class="top-bar-text float_left">



                        <ul class="list_inline social-icon">

                            Welcome to Swasarjan &nbsp;&nbsp;
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                            <!-- <div class="" id="polyglotLanguageSwitcher">
                                <form action="#">
                                    <select id="polyglot-language-options">
                                        <option id="en" selected value="en">
                                            English
                                        </option>

                                        <option id="fr" value="fr">
                                            French
                                        </option>

                                        <option id="de" value="de">
                                            German
                                        </option>

                                        <option id="it" value="it">
                                            Italian
                                        </option>

                                        <option id="es" value="es">
                                            Spanish
                                        </option>
                                    </select>
                                </form>
                            </div> -->
                        </ul>
                        <!-- <button class="thm-btn donate-box-btn">donate</button>

                        <p>No One Has Ever Become Poor By Giving!</p> -->
                    </div>


                    <div class="right-column float_right">

                        <ul class="list_inline contact-info">
                            <li><span class="fa fa-phone" style="color:#fff;"></span>Call Us: +91 70430 38000</li>


                            <li><span class="fa fa-envelope" style="color:#fff;"></span>Email: swasarjan@gmail.com</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <section class="theme_menu stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-logo">
                            <a href="index.html"><img alt="" src="images/logo/logo.png" height="70"></a> SWA SARJAN
                            FOUNDATION
                        </div>
                    </div>


                    <div class="col-md-8 menu-column">
                        <nav class="defaultmainmenu" id="main_menu">
                            <ul class="defaultmainmenu-menu">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>

                                <li>
                                    <a href="#">About</a>

                                </li>


                                <li>
                                    <a href="impact.html">Impact & Reach</a>

                                </li>


                                <li>
                                    <a href="#">Projects</a>

                                    <ul class="dropdown">
                                        <li>
                                            <a href="">Education</a>
                                        </li>


                                        <li>
                                            <a href="">Old age home</a>
                                        </li>


                                        <li>
                                            <a href="">Orphanage</a>
                                        </li>


                                        <li>
                                            <a href="">Healthcare</a>
                                        </li>


                                        <li>
                                            <a href="">Women Empowerment</a>
                                        </li>


                                        <li>
                                            <a href="">Plantation</a>
                                        </li>
                                        <li>
                                            <a href="">Skill Development</a>
                                        </li>
                                        <li>
                                            <a href="">Water Saving</a>
                                        </li>

                                    </ul>
                                </li>


                                <li>
                                    <a href="">Blog</a>

                                </li>
                                <!-- <li>
                                    <a href="">Internship</a>

                                </li>
                                <li>
                                    <a href="">Gallery</a>

                                </li> -->


                                <li>
                                    <a href="contact.html">Contact</a>

                                </li>



                            </ul>
                        </nav>
                    </div>


                    <div class="right-column">
                        <div class="nav_side_content">

                            <!-- <a href=""><button class="thm-btn donate-box-btn">join us</button></a> -->
                            <a href="join-us.html"><button class="thm-btn donate-box-btn">join us</button></a>
                            <a href="donate.html"> <button class="thm-btn donate-box-btn">donate</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
            <div class="container">
                <div class="box">
                    <h1>Join us</h1>
                </div>
            </div>
        </div>
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="pull-left">
                    <ul class="list-inline link-list">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="joinus.html">Join Us</a>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!-- <div class="pull-right">
                    <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
                </div> -->
            </div>
        </div>




        <section class="contact sec-padd2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Join <span class="thm-color">Us</span></h2>
                        </div>
                        <div class="default-form-area">
                            <form class="default-form" action="join-us.php" method="post">

                                <div class="row clearfix">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_name"> Name <small>*</small></label>
                                            <input name="name" class="form-control " placeholder="Enter Your Name"
                                                type="text" required="">

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Father / Husband Name<small>*</small></label>
                                            <input name="fname" class="form-control " placeholder="Enter Father Name"
                                                type="text" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Mother Name<small>*</small></label>
                                            <input name="mname" class="form-control " placeholder="Enter Mother Name"
                                                type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">DOB<small>*</small></label>
                                            <input name="dob" class="form-control " type="date" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_sex">Gender <small>*</small></label>
                                            <select id="form_sex" name="gender" class="form-control required"
                                                aria-required="true">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Aadhar Number <small>*</small></label>
                                            <input type="number" class="form-control" name="aadhar_no" required=""
                                                placeholder="**********"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength="14">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Mobile No <small>*</small></label>
                                            <input name="mobile" class="form-control " placeholder="+91 **********"
                                                type="number"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength="10" required="">
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Address <small>*</small></label>
                                            <input name="address" class="form-control " placeholder="Address Name"
                                                type="text" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">District <small>*</small></label>
                                            <input name="district" class="form-control " placeholder="District Name"
                                                type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Pin Code <small>*</small></label>
                                            <input name="pin" class="form-control " placeholder="Enter Pin Code"
                                                type="number" required=""
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength="6">
                                        </div>
                                    </div><br><br>



                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button class="thm-btn" type="submit">send message</button>
                                        </div>
                                    </div>


                                </div>
                                <!-- <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="form-group">
                                            <input type="text" name="form_name" class="form-control" value=""
                                                placeholder="Your Name *" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="form_email" class="form-control required email"
                                                value="" placeholder="Your Mail *" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_phone" class="form-control" value=""
                                                placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_subject" class="form-control" value=""
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control textarea required"
                                                placeholder="Your Message...."></textarea>
                                        </div>
                                    </div>
                                    

                                </div> -->
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Quick <span class="thm-color">Contact</span></h2>
                        </div>
                        <div class="content">
                            <div class="text">
                                <p>If you are passionate about helping people: through education, or preventing then you
                                    are in the right place. </p>
                            </div>
                            <ul class="contact-info">
                                <li><i class="icon-arrows"></i><span>Address:</span> A/10, Dwarkesh Appt,
                                    Rambaug, Maninagar,
                                    Ahmedabad-380008</li>
                                <li><i class="icon-phone"></i><span> Phone:</span> +91 70430 38000
                                </li>
                                <li><i class="icon-back"></i><span>Email:</span> swasarjan@gmail.com</li>
                            </ul>
                            <ul class="social-icon">
                                <li>
                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <!-- <section class="home-google-map">
            <div class="google-map" id="contact-google-map" data-map-lat="42.568692" data-map-lng="72.930105"
                data-icon-path="images/logo/map-marker.png" data-map-title="Chester" data-map-zoom="8">

            </div>

        </section> -->





        <footer class="main-footer">
            <!--Widgets Section-->


            <div class="widgets-section">
                <div class="container">
                    <div class="row">
                        <!--Big Column-->


                        <article class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->


                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget about-column">
                                        <div class="section-title">
                                            <h4>About Us</h4>
                                        </div>


                                        <div class="text">
                                            <p>We partner with over 320 amazing projects worldwide, and have given over
                                                $150 million in cash and product grants to other groups since 2011. We
                                                also operate our own dynamic suite of Signature Programs, million in
                                                cash and product grants to others</p>
                                        </div>


                                        <!-- <div class="link">
                                                <a class="default_link" href="#">Read More <i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div> -->
                                    </div>
                                </div>
                                <!--Footer Column-->


                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget link-column">
                                        <div class="section-title">
                                            <h4>Usefull Links</h4>
                                        </div>


                                        <div class="widget-content">
                                            <ul class="list">
                                                <li>
                                                    <a href="about.html">About Our Humanity</a>
                                                </li>


                                                <li>
                                                    <a href="cause-1.html">Recent Causes</a>
                                                </li>


                                                <li>
                                                    <a href="volunteer.html">Our Volunteers</a>
                                                </li>


                                                <li>
                                                    <a href="#">Our Donators</a>
                                                </li>


                                                <li>
                                                    <a href="#">Sponsers</a>
                                                </li>


                                                <li>
                                                    <a href="event-1.html">Upcoming Events</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--Big Column-->

                        <article class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->


                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget post-column">
                                        <div class="section-title">
                                            <h4>Recent Post</h4>
                                        </div>


                                        <div class="post-list">
                                            <div class="post">
                                                <a href="#">
                                                    <h5>Car show event photos 2015</h5>
                                                </a>

                                                <div class="post-info">
                                                    March 14, 2017
                                                </div>
                                            </div>


                                            <div class="post">
                                                <a href="#">
                                                    <h5>Hope Kids Holiday Party</h5>
                                                </a>

                                                <div class="post-info">
                                                    February 21, 2017
                                                </div>
                                            </div>


                                            <div class="post">
                                                <a href="#">
                                                    <h5>humanity Bikini Car wash photos</h5>
                                                </a>

                                                <div class="post-info">
                                                    January 15, 2017
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer Column-->


                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget contact-column">
                                        <div class="section-title">
                                            <h4>Get In Touch</h4>
                                        </div>


                                        <ul class="contact-info">
                                            <li><i class="icon-arrows"></i><span>Address:</span> A/10, Dwarkesh Appt,
                                                Rambaug, Maninagar,
                                                Ahmedabad-380008</li>


                                            <li><i class="icon-phone"></i> <span>Phone:</span> +91 70430 38000</li>


                                            <li><i class="icon-back"></i><span>Email:</span> swasarjan@gmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </footer>

        <section class="footer-bottom">
            <div class="container">

                <div class="pull-left copy-text">
                    <p style="text-align: center;"><a href="#" style="color:#666;">Copyrights ©
                            2022</a> All Rights Reserved.</p>
                </div>
                <div class="pull-right">
                    <ul class="list_inline social-icon">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.pull-right -->

                <div class="pull-right get-text">
                    <a href="joinus.html" style="color:#666;margin-right: 20px;">Join Us Now!</a>
                </div>
                <!-- /.pull-left -->
            </div>
            <!-- /.container -->
        </section>

        <!-- Scroll Top  -->
        <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
        <!-- preloader  -->
        <div class="preloader"></div>
        <div id="donate-popup" class="donate-popup">
            <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
            <div class="popup-inner">


                <div class="container">
                    <div class="donate-form-area">
                        <div class="section-title center">
                            <h2>Donation Information</h2>
                        </div>

                        <h4>How much would you like to donate:</h4>

                        <form action="#" class="donate-form default-form">
                            <ul class="chicklet-list clearfix">
                                <li>
                                    <input type="radio" id="donate-amount-1" name="donate-amount" />
                                    <label for="donate-amount-1" data-amount="1000">$1000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                                    <label for="donate-amount-2" data-amount="2000">$2000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-3" name="donate-amount" />
                                    <label for="donate-amount-3" data-amount="3000">$3000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-4" name="donate-amount" />
                                    <label for="donate-amount-4" data-amount="4000">$4000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-5" name="donate-amount" />
                                    <label for="donate-amount-5" data-amount="5000">$5000</label>
                                </li>
                                <li class="other-amount">

                                    <div class="input-container"
                                        data-message="Every dollar you donate helps end hunger.">
                                        <span>Or</span><input type="text" id="other-amount"
                                            placeholder="Other Amount" />
                                    </div>
                                </li>
                            </ul>

                            <h3>Donor Information</h3>

                            <div class="form-bg">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="form-group">
                                            <p>Your Name*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Email*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Address*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Phn Num*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <ul class="payment-option">
                                <li>
                                    <h4>Choose your payment method:</h4>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Paypal</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Offline Donation</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Credit Card</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Debit Card</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div class="center"><button class="thm-btn" type="submit">Donate Now</button></div>


                        </form>
                    </div>
                </div>



            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/imagezoom.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.polyglot.language.switcher.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/nouislider.js"></script>
        <script src="js/bootstrap-select.min.js"></script>


        <!-- google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
        <script src="js/gmap.js"></script>

        <script id="map-script" src="js/default-map.js"></script>


        <script src="js/custom.js"></script>

    </div>

</body>

<!-- Mirrored from st.ourhtmldemo.com/new/humanity-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 04:06:19 GMT -->

</html>