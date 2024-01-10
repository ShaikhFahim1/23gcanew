

<!DOCTYPE html>

<html lang="en">

<head>



  <!-- Basic Page Needs

  ================================================== -->

  <meta charset="utf-8">

  <title>Home - GCA 2024</title>



  <?php

  include "includes/header_includes.php";

  ?>

<script>

          // Set the date and time you want to count down to (format: "Month Day, Year HH:MM:SS")

          var countdownDate = new Date("February 11, 2024 23:59:59").getTime();



          // Update the countdown every second

          var x = setInterval(function() {

          var now = new Date().getTime();

          var distance = countdownDate - now;



          // Calculate days, hours, minutes, and seconds

          var days = Math.floor(distance / (1000 * 60 * 60 * 24));			

          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the countdown values under their respective labels



          var elements = document.getElementsByClassName("days");

          var elements1 = document.getElementsByClassName("hours");

          var elements2 = document.getElementsByClassName("minutes");

          var elements3 = document.getElementsByClassName("seconds");



          for (var i = 0; i < elements.length; i++) {

              elements[i].innerHTML = days;

          }

          for (var j = 0; j < elements1.length; j++) {

              elements1[j].innerHTML = hours;

          }			

          for (var k = 0; k < elements2.length; k++) {

              elements2[k].innerHTML = minutes;

          }

          for (var l = 0; l < elements3.length; l++) {

              elements3[l].innerHTML = seconds;

          }



          // If the countdown is over, display a message

          if (distance < 0) {

            clearInterval(x);

            document.getElementById("countdown").innerHTML = "EXPIRED";

          }

          }, 1000); // Update every 1 second

</script>

    <style>

        .table-bordered td, .table-bordered th{

          vertical-align: middle;

        }

        .table-bordered th{

            padding: 20px 15px;

        }

        .table tbody tr th{

            color: white;

            background: #922dd4;

        }
		.modal-sm {
    max-width: 350px;
}
		</style>

    <link rel="stylesheet" href="css/styles.css">

</head>



<body class="body-wrapper">





<!--========================================

=            Navigation Section            =

=========================================-->

<?php

include "includes/header.php"

?>



<!--====  End of Navigation Section  ====-->



<!--============================

=            Banner            =

=============================-->



<section class="banner bg-overlay-one overlay" id="homepagebanner">

	<video autoplay="" muted="" loop="" id="first" playsinline="">

				<source class="banner-video" src="assets/backgroundvideo75.mp4" type="video/mp4">

			</video>

	<div class="container-fluid">

		<div class="row">

			<div class="col-lg-12">

				<!-- Content Block -->

				<div class="block text-left">

					<!-- Coundown Timer -->

					<h1>23<sup>rd</sup> Global Conference<br>of Actuaries</h1>

					<h6>12-14 February 2024, The Westin Mumbai Powai Lake,<br>Mumbai - 400 087</h6>

					<div class="flex-w flex-sa-m cd100 bor1 p-10 respon1">

						<div class="flex-col-c-m wsize2 m-b-0">

						<span class="l1-txt2 p-b-4 days" id="days"></span>

						<span class="m2-txt2">Days</span>

						</div>

						<span class="l1-txt2 p-b-10">:</span>

						<div class="flex-col-c-m wsize2 m-b-0">

						<span class="l1-txt2 p-b-4 hours" id="hours"></span>

						<span class="m2-txt2">Hours</span>

						</div>

						<span class="l1-txt2 p-b-10 respon2">:</span>

						<div class="flex-col-c-m wsize2 m-b-0">

						<span class="l1-txt2 p-b-4 minutes" id="minutes"></span>

						<span class="m2-txt2">Minutes</span>

						</div>

						<span class="l1-txt2 p-b-10">:</span>

						<div class="flex-col-c-m wsize2 m-b-0">

						<span class="l1-txt2 p-b-4 seconds" id="seconds"></span>

						<span class="m2-txt2">Seconds</span>

						</div>

					</div>

					<!-- Action Button -->

					<a href="#about" class="btn btn-white-md scroll-link">Explore More</a>

				</div>

			</div>

		</div>

	</div>



	

</section>

	

<!--====  End of Banner  ====-->



<!--===========================

=            About            =

============================-->



<section class="section about" id="about">

	<div class="container">

		<div class="row">

			<div class="col-lg-4 col-md-6 align-self-center">

				<div class="image-block bg-about">

					<img class="img-fluid" src="assets/images/speakers/president.png" alt="">

					<div class="text-center img-block-title">

						<h5>R Arunachalam</h5>

						<p>President, Institute of Actuaries of India</p>

					</div>

				</div>

			</div>

			<div class="col-lg-8 col-md-6 align-self-center">

				<div class="content-block">

					<!-- <h2>About The <span class="alternate">Eventre</span></h2> -->

					<h2>President's Message</h2>

					<div class="description-one">

						<p>

							It gives me immense pleasure to cordially invite you to the 23<sup style="text-transform: lowercase;">rd</sup> Global Conference of Actuaries (GCA) and the Actuarial Gala Function & Awards (AGFA) 2024 scheduled from 12th to 14th February 2024 at The Westin Powai Lake in Mumbai.

						</p><br>

						<p>

							In 2023, GCA made a much-awaited comeback post Covid pandemic and we saw an all-time high participation from our members. The line-up of the plenary and concurrent sessions covered a wide breadth of the topics such as Sustainability Dialogue, Indian Insurance at Amrit Kaal, changing roster of Actuarial Skillset to name a few.

						</p>

					</div>

					<!-- <div class="description-two">

						<p>

							

						</p>

					</div> -->

					<ul class="list-inline">

						<li class="list-inline-item">

							<a href="./welcome-message" class="btn btn-main-md">Read More</a>

						</li>

						<!-- <li class="list-inline-item">

							<a href="#" class="btn btn-transparent-md">Read More</a>

						</li> -->

					</ul>

				</div>

			</div>

		</div>

	</div>

</section>



<!--====  End of About  ====-->





<section class="section about" id="about">

	<div class="container">

		

		<div class="row">

			

			<div class="col-lg-8 col-md-6 align-self-center">

				<div class="content-block">

					<!-- <h2>About The <span class="alternate">Eventre</span></h2> -->

					<h2>Chairperson's Message</h2>

					<div class="description-one">

						<p>

						I very warmly welcome you all to the 23<sup style="text-transform: lowercase;">rd</sup> Global Conference of Actuaries (GCA) –‘Data, Disruptions and the Actuary’, from 12th February 2024 to 14th February 2024. This year we are meeting at The Westin Powai Lake in Mumbai.

						</p><br>

						<p>

						The theme this year is very ambitious and aspirational. With the IRDAI’s and Govt. of India’s commitment to enable ‘Insurance for all’ by 2047, the coming years are expected to see new ideas, growth, new demands, and opening up of multiple new avenues As we are all aware - data is and will be the key driver and distinguisher in running a successful business. 

						</p>

					</div>

					<!-- <div class="description-two">

						<p>

							

						</p>

					</div> -->

					<ul class="list-inline">

						<li class="list-inline-item">

							<a href="./chairperson-address" class="btn btn-main-md">Read More</a>

						</li>

						<!-- <li class="list-inline-item">

							<a href="#" class="btn btn-transparent-md">Read More</a>

						</li> -->

					</ul>

				</div>

			</div>

			<div class="col-lg-4 col-md-6 align-self-center">

				<div class="image-block bg-about">

					<img class="img-fluid" src="assets/images/speakers/anurag.jpg" alt="">

					<div class="text-center img-block-title">

						<h5>Anurag Rastogi</h5>

						<p>Chairperson, GCA, Organising Group</p>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!--==============================

=            Speakers            =

===============================-->







<!--====  End of Speakers  ====-->



<!--==============================

=            Schedule            =

===============================-->









<!--====  End of Schedule  ====-->



<!--=============================

=            Feature            =

==============================-->



<section class="ticket-feature">

	<div class="container-fluid m-0 p-0">

		<div class="row p-0 m-0">

			<div class="col-lg-7 p-0 m-0">

				<div class="block bg-timer overlay-dark text-center">

					<div class="section-title white m-0">

						<h3>Registration <span class="alternate">Started</span></h3>

						<p>Registration Started for the Global Conference of Actuaries</p>

					</div>

					<!-- Coundown Timer -->

					<!-- <div class="timer"></div> --><br>

					<a href="" class="btn btn-main-md">Register Now</a>

				</div>

			</div>

			<div class="col-lg-5 p-0">

				<div class="block-2">

					<div class="row no-gutters">

						<div class="col-6">

							<!-- Service item -->

							<div class="service-item">

								<i class="fa fa-microphone"></i>

								<h5>80 + Speakers</h5>

							</div>

						</div>

						<div class="col-6">

							<!-- Service item -->

							<div class="service-item">

								<i class="fa fa-flag"></i>

								<h5>1500 + Registrations</h5>

							</div>

						</div>

						<div class="col-6">

							<!-- Service item -->

							<div class="service-item">

								<i class="fa fa-users"></i>

								<h5>40 Partners</h5>

							</div>

						</div>

						<div class="col-6">

							<!-- Service item -->

							<div class="service-item">

								<i class="fa fa-calendar"></i>

								<h5>3 days event</h5>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>



<!--====  End of Feature  ====-->

<!--==============================

=            Schedule            =

===============================-->







<!--====  End of Schedule  ====-->





<!--==============================

=            Sponsors            =

===============================-->



<section class="section schedule two">

	<div class="container">

		<div class="row">

			<div class="col-12">

				

      

        

  <div class="section-header">

			<h2>Registration Rate</h2>

			<p>Checkout our registration rate for all the categories</p>

		  </div>







			</div>

		</div>

		<div class="row">

			<?php

      include "register.php";

      ?>

		</div>

	</div>

	</div>

</section>




<!--==============================
=            Sponsors            =
===============================-->

<section class="sponsors section bg-sponsors overlay-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Our <span class="alternate">Partners</span></h3>
					<p>We partner with the best.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>AGFA Partners</h5>
				</div>
				<div class="block text-center">
					<!-- Partners image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.ka-pandit.com/" target="_blank">
									<img src="assets/images/partners/K A Pandit_AGFA.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						
						
					</ul>
				</div>
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>Gold Partners</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
					<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.mandg.com/mandgglobalservices.com" target="_blank">
									<img src="assets/images/partners/M&G Global.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.swissre.com/" target="_blank">
									<img src="assets/images/partners/Swiss Re.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						
						
					</ul>
				</div>
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>Silver Partners</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.casact.org" target="_blank">
									<img src="assets/images/partners/CAS Logo.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.hdfcergo.com/" target="_blank">
									<img src="assets/images/partners/HDFC ERGO.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="https://www.iciciprulife.com/" target="_blank">
									<img src="assets/images/partners/ICICI pru Logo.jpg" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						
						
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--====  End of Sponsors  ====-->




   <!--==========================

      Venue Section

    ============================-->

    <section id="venue" class="wow fadeInUp">



		<div class="container-fluid">

  

		  <div class="section-header">

			<h2>Event Venue</h2>

			<p>Event venue & location info</p>

		  </div>

  

		  <div class="row no-gutters">

			<div class="col-lg-6 venue-map">

	  

			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1051.4451848685253!2d72.90171430386731!3d19.134270108102875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b902868624b5%3A0x25c9dd6c629969da!2sThe%20Westin%20Mumbai%20Powai%20Lake!5e0!3m2!1sen!2sin!4v1698908276891!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			</div>

  

			<div class="col-lg-6 venue-info">

			  <div class="row justify-content-center">

				<div class="col-11 col-lg-8">

				  <h3>The Westin® Mumbai<br>Powai Lake</h3>

				 

				  <p>

					

              #2 & 3B Near Chinmayanand Ashram, Powai, Mumbai, India, 400087

              <br>

              Tel: +91 22-6692 7777





				  </p>

				</div>

			  </div>

			</div>

		  </div>

  

		</div>

			  </section>



		

		  

		  <!--============================

=            Footer            =

=============================-->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

  <!-- The modal container -->
  <div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <!-- Close icon -->
	  <button type="button" class="close text-right " data-dismiss="modal" aria-label="Close" style="
    position: absolute;
    right: -28px;
    color: white;
    font-size: 32px;
    top: -9px;
    opacity: 1;">
          <span aria-hidden="true">&times;</span>
      </button>

      <!-- Image -->
	<a href="./registration-guidelines">      <img src="assets/images/early bird extended.jpg" style="width: 100%;" alt="Image"></a>
	</div>
  </div>
  </div>



<?php

include "includes/footer.php";

include "includes/footer_includes.php";

?>


<script>
$(document).ready(function(){
  // Check if the modal has been shown before
  var modalShownBefore = localStorage.getItem('modalShownBefore');

  // If the modal has not been shown before, show it
  if (!modalShownBefore) {
    $('#exampleModal1').modal('show');
    
    // Mark the modal as shown
    localStorage.setItem('modalShownBefore', true);
  }
});
</script>
<script>

  $(".studentRegisterTable tr td:nth-child(2),.studentRegisterTable tr td:nth-child(3)").attr("class","text-center");

</script>

<script>

	$(document).ready(function() {

    // Smooth scroll to section on click

    $(".scroll-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({

                scrollTop: $(hash).offset().top

            }, 800, function(){

                window.location.hash = hash;

            });

        }

    });

});

</script>



<script>

	/*

    Every single line of code is pure JavaScript.

    I've provided comments for some important parts of the code

    

    Happy Programming...

*/



// utlity

function qs(elem) {

  return document.querySelector(elem);

}

function qsa(elem) {

  return document.querySelectorAll(elem);

}



// globals

var activeCon = 0,

  totalCons = 0;



// elements

const v_cons = qsa(".video-con"),

  a_cons = qsa(".active-con"),

//   v_count = qs("#video-count"),

  info_btns = qsa("#lower-info div"),

  drop_icon = qs("#drop-icon"),

  video_list = qs("#v-list"),

  display = qs("#display-frame");



// activate container

function activate(con) {

  deactivateAll();

  indexAll();

//   countVideos(con.querySelector(".index").innerHTML);

  con.classList.add("active-con");

  con.querySelector(".index").innerHTML = "►";

}

// deactivate all container

function deactivateAll() {

  v_cons.forEach((container) => {

    container.classList.remove("active-con");

  });

}

// index containers

function indexAll() {

  var i = 1;

  v_cons.forEach((container) => {

    container.querySelector(".index").innerHTML = i;

    i++;

  });

}

// update video count

// function countVideos(active) {

//   v_count.innerHTML = active + " / " + v_cons.length;

// }

// icon activate

function toggle_icon(btn) {

  if (btn.classList.contains("icon-active")) {

    btn.classList.remove("icon-active");

  } else btn.classList.add("icon-active");

}

// toggle video list

function toggle_list() {

  if (video_list.classList.contains("li-collapsed")) {

    drop_icon.style.transform = "rotate(0deg)";

    video_list.classList.remove("li-collapsed");

  } else {

    drop_icon.style.transform = "rotate(180deg)";

    video_list.classList.add("li-collapsed");

  }

}

function loadVideo(url) {

  display.setAttribute("src", url);

}



//******************

// Main Function heres

//******************

window.addEventListener("load", function () {

  // starting calls

  indexAll(); // container indexes

//   countVideos(1);

  activate(v_cons[0]);

  loadVideo(v_cons[0].getAttribute("video"));



  // Event handeling goes here

  // on each video container click

  v_cons.forEach((container) => {

    container.addEventListener("click", () => {

      activate(container);

      loadVideo(container.getAttribute("video"));

    });

  });

  // on each button click

  info_btns.forEach((button) => {

    button.addEventListener("click", () => {

      toggle_icon(button);

    });

  });

  // drop icon click

  drop_icon.addEventListener("click", () => {

    toggle_list();

  });

});



	</script>

 

</body>



</html>







