<!DOCTYPE HTML>



<html>

	<head>

		<title>GB</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

		<link rel="stylesheet" href="assets/css/main.css" />

		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<style>

      /* Always set the map height explicitly to define the size of the div

       * element that contains the map. */

      #map {

        height: 100%;

      }

      /* Optional: Makes the sample page fill the window. */

      html, body {

        height: 100%;

        margin: 0;

        padding: 0;

      }

    </style>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}




/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<!--<style>

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #909;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #909;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #909;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #909;
}
</style>-->

	</head>

	<body>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method = "post" action="verify.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required>
        
      <button type="submit">Login</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


		<!-- Sidebar -->

			<section id="sidebar">

					<img src="images/logo.png" style="width:270px;height:340px;">
				<div class="relative">

					<nav>

						<ul>

							<li><a href="#intro">Welcome</a></li>

							<li><a href="#one">Facilities</a></li>

							<li><a href="#two">Tenant Info</a></li>

							<li><a href="#three">Get in touch</a></li>

						</ul>

					</nav>

				</div>

			</section>



		<!-- Wrapper -->

			<div id="wrapper">



				<!-- Intro -->

					<section id="intro" class="wrapper style1 fullscreen fade-up">

						<div class="inner">

						<!-- <div class="inner" style="background-image: url(images/logo.jpg); height: 2000px; width: 4000px; border: 1px solid black;"> -->

							<h1>Gayathri Building</h1>

							<p>We are who we are</p>

							<ul class="actions">

								<li><a href="#one" class="button scrolly">Learn more</a></li>

							</ul>

						</div>

					</section>

					

					<!-- One -->

					<section id="one" class="wrapper style3 fade-up">

						<div class="inner">

							<h2>What we offer</h2>

							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>

							<div class="features">

								<section>

									<span class="icon major fa-building"></span>

									<h3>Floor Space</h3>

									<p>Commercial/Office space for lease.</p>

								</section>

								<section>

									<span class="icon major fa-car"></span>

									<h3>Parking</h3>

									<p>Car and Two Wheeler Parking facility.</p>

								</section>

								<section>

									<span class="icon major fa-fire"></span>

									<h3>Fire Safety System</h3>

									<p>Emergency Exits,Fire Hydrants,Smoke Detectors and Alarms for every floor.</p>

								</section>

								<section>

									<span class="icon major fa-lock"></span>

									<h3>Security</h3>

									<p>Closed Circuit Security System for added safety.</p>

								</section>

								<!--<section>

									<span class="icon major fa-chain"></span>

									<h3>Urna quis bibendum</h3>

									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>

								</section>

								<section>

									<span class="icon major fa-diamond"></span>

									<h3>Aliquam urna dapibus</h3>

									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>

								</section>-->

							</div>

							<ul class="actions">

								<li><a href="#two" class="button">Learn more</a></li>

							</ul>

						</div>



				<!-- Two -->

					<section id="two" class="wrapper style2 spotlights">

						<section>

							
							<div class="content">

								<div class="inner">

									<h2>Current Tenants </h2>

									<p>The Description of current tenants will be displayed here.</p>

									<ul class="actions">

										<li><a href="#" class="button">Learn more</a></li>

									</ul>

								</div>

							</div>

						</section>

						<section>

							<div class="content">

								<div class="inner">

									<h2>Tenant Portal</h2>

									<p>With exclusive access to our resident-only web sites, hop on any computer with Internet access to: </p>

									<p> Pay your rent online, 

										Submit and track service requests,

										Find community forms and policies

									      and much, much more...</p>									

									

									<p>Log in now to get started!.</p>

<button onclick="document.getElementById('id01').style.display='block'">Login</button>
<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
		
					<!--


                                                                     <form method = "post" action = "verify.php">

   <input type = "text" id = "username" placeholder = "Username" name = "username"><br>

   <input type = "password" id = "password" name = "password" placeholder = "***"><br>
  <p align="right"> <font size="3"> <a href="">Forget password? </a></font></p>
   <input type = "submit" id = "dologin" value = "Login"> &nbsp;

    <input type = "submit" id = "signup" value = "Sign up">                                                                          	




</form>
-->
								</div>

							</div>

						</section>

						<!--<section>

							<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>

							<div class="content">

								<div class="inner">

									<h2>Ultricies aliquam</h2>

									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>

									<ul class="actions">

										<li><a href="#" class="button">Learn more</a></li>

									</ul>

								</div>

							</div>

						</section>-->

					</section>		

					</section>



				<!-- Three -->

					<section id="three" class="wrapper style1 fade-up">

						<div class="inner">

							<h2>Get in touch</h2>

							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>

							<div class="split style1">

								<section>

									<!--<form method="post" action="#">

										<div class="field half first">

											<label for="name">Name</label>

											<input type="text" name="name" id="name" />

										</div>

										<div class="field half">

											<label for="email">Email</label>

											<input type="text" name="email" id="email" />

										</div>

										<div class="field">

											<label for="message">Message</label>

											<textarea name="message" id="message" rows="5"></textarea>

										</div>

										<ul class="actions">

											<li><a href="" class="button submit">Send Message</a></li>

										</ul>

									</form>-->

									 <div id="map"></div>

									<script>



										function initMap() {

										var myLatLng = {lat: 11.0189140, lng: 76.9616410};



										var map = new google.maps.Map(document.getElementById('map'), {

										zoom: 18,

										center: myLatLng

										});



										var marker = new google.maps.Marker({

										position: myLatLng,

										map: map,

										title: 'Gayathri Building'

										});

										}

									</script>

									<script async defer

										src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH1Zp6_41gLPSUKP6_i8_1DiKkITU9aFw&callback=initMap">

									</script>



									

									

								</section>

								<section>

									<ul class="contact">

										<li>

											<h3>Address</h3>

											<span>O#220-N#149,

											Dr.Rajendraprasad Road,<br />

											Coimbatore 641012<br />

											TN,India</span>

										</li>

										<li>

											<h3>Email</h3>

											<a href="#">gayathribuilding@gmail.com</a>

										</li>

										<li>
											<h3>Phone</h3>

											<span>(+91) 422-2481044</span>

										</li>


									</ul>

								</section>

							</div>

						</div>

					</section>



			</div>



		<!-- Footer -->

			<footer id="footer" class="wrapper style1-alt">

				<div class="inner">

					<ul class="menu">

						<li>&copy; Gayathri Building. All rights reserved.</li>

					</ul>

				</div>

			</footer>



		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>

			<script src="assets/js/jquery.scrollex.min.js"></script>

			<script src="assets/js/jquery.scrolly.min.js"></script>

			<script src="assets/js/skel.min.js"></script>

			<script src="assets/js/util.js"></script>

			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

			<script src="assets/js/main.js"></script>



	</body>

	<!--

	Hyperspace by HTML5 UP

	html5up.net | @ajlkn

	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

-->

</html>	