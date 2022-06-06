<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhyay - features</title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@200;300;400;500;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/testimonials-slider.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fontsize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="css/inner.css">
    <meta name="description" title="website designing companies" content="website design and development services">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180966897-1"></script>
    <meta name="google-site-verification" content="yHl507Ba3S0rLhQtSemYfciNHcTgfSiQuqFjMRO5V-A">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://rawgit.com/cfoehrdes/slick/master/slick/slick.js"></script>
	
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180966897-1');
</script>
</head>
<body>
	<div id="video-popup-overlay"></div>
    <div class="preloader">
        <div class="loader">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div> 
    </div>    
    
    <script>
	

        window.addEventListener( 'load' , ()=>{
            let preload = document.querySelector('.preloader');
            preload.style.opacity = '0';
            setTimeout( function(){
                preload.style.display="none";
            },500 );
        });
		
		

    </script>

    <!--                                            HEADER                                          -->

    <!--<header class="header">
        <a href="index.html" class="header__icon">
            <img src="images/logo.png" alt="">
        </a>
        <div class="header__menu">
            <div class="header__products">
                <a href="srms.html" class="header__link heading--6 about__heading">
                    SRMS
                </a>
            </div>
            <div class="header__products">
                <a href="iot.html" class="header__link heading--6 about__heading">
                    I.o.T
                </a>
            </div>
            <div class="header__products">
                <a href="ai.html" class="header__link heading--6 about__heading">
                    A.I
                </a>
            </div>
            <div class="header__websites">
                <a href="website.html" class="header__link heading--6 about__heading">
                    WEBSITES
                </a>
            </div>
            <div class="header__about">
                <a href="about.html" class="header__link heading--6 about__heading">
                    ABOUT US
                </a>
            </div>
            <div class="header__contact">
                <a href="contact.html" class="header__link heading--6 about__heading">
                    CONTACT US
                </a>
            </div>
        </div>

        <svg class="header__navigationButton" id="navigation__dot--in">
            <use href="images/navigation.svg#icon-flickr"></use>
        </svg>

    </header>-->

    <!--                                        dropLeft                                            -->
	
	
    <!--<div class="dropleft">
        <svg class="dropleft__navigationButton" id="navigation__dot--out">
            <use href="images/navigation.svg#icon-flickr2"></use>
        </svg>
        <div class="dropleft__menu">
            <a href="srms.html" class="dropleft__item dropleft__item--1">SRMS</a>
            <a href="iot.html" class="dropleft__item dropleft__item--2">I.o.T</a>
            <a href="ai.html" class="dropleft__item dropleft__item--3">A.I.</a>
            <a href="website.html" class="dropleft__item dropleft__item--4">WEBSITE</a>
            <a href="about.html" class="dropleft__item dropleft__item--5">ABOUT US</a>
            <a href="contact.html" class="dropleft__item dropleft__item--6">CONTACT</a>
        </div>
    </div>-->

    <!--  SRMS -->
	
	
	<!--New Header-->
	<?php include "inc/header.php";?>	
	<!--New header end-->
	
	<!-- New structure-->
	
	<section class="hero-section" >
	
		<div class="container-fluid">
			<div class="row h-100">
				<div id="hero-text-wrap" class="col-lg-6 col-md-6 col-12 d-flex align-items-center ">
					<div id="hero-text" class="hero-text">
						<h2>A one- stop solution for your online meeting and webinar needs.</h2>
						<h4> Conduct online meetings and host webinars using a single tool.<br> 
                        Deliver online training webinars by broadcasting presentations and demos.<br> Meet face to face for real-time discussions using audio, video, and screen sharing. </h4>
						<a href="" class="btn-custom cd-popup-trigger">Get a Free Demo</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="hero-layers" id="hero-layers">
						<img src="images/hero-layers/layer-main.png" alt="" class="hero__layer hero__layer_1" id="h__layer_1">
						<img src="images/hero-layers/pencils.png" alt="" class="hero__layer hero__layer_2" id="h__layer_2">
						<img src="images/hero-layers/glasses3.png" alt="" class="hero__layer hero__layer_3" id="h__layer_3">
						<img src="images/hero-layers/wood_pencil.png" alt="" class="hero__layer hero__layer_4" id="h__layer_4">
						<!--<img src="images/hero-layers/layer04.png" alt="" class="hero__layer hero__layer_5" id="h__layer_5">-->
					</div>
				</div>
			</div>
			
		</div>
	
	
	
		<div class="ssl-certification">
			<div>
				<img src="images/ssl-icon.png" alt="Secure SSL">
				<span>
					Secure<b>SSL</b>
				</span>
			</div>
			<div>
				<img src="images/encription.png" alt="End-to-end Encryption">
				<span>
					End-to-end<b>Encryption</b>
				</span>
			</div>
		</div>
	</section>
	
	<section class="full-cta">
		<div class="container">
			<div class="cta-wrapper">
				<div class="catFigure">
					<img src="images/adhyay_logo_white.png" alt=""> 
				</div>
				<h4>Adhyay debuts on the 2021 Gartner® Magic Quadrant™ for Cloud HCM Suites</h4>
				<a href="#" class="btn-custom">Try for free</a>
			</div>
		</div>
	</section>

	<section id="box1" class="lms-section section lms-custom-class" >
		<div class="container">
		<div class="section-title text-center">
	<h2> Highlights of the <span class="highlighted">tool</span></h2>
	</div>

			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img1.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
									<h2> No <span class="highlighted">downloads</span></h2>
                      <p>Launch or join meetings and webinars right from your browser. Forget about time-consuming downloads and preventive firewalls. Always attend sessions on time with just a few clicks.</p>
                                </div>

						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="box3" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2> Audio, video, and  <span class="highlighted">screen sharing</span></h2>
                      <p>Build trust and connect better by collaborating face to face through video and audio conferencing Add context to your talk by sharing your screen application, or a connected monitor to deliver presentations and demos.</p>
                        </div>
						<!-- <div class= "features-list">
								<ul>
									<li>
										<h4>Multiple tasks from a single platform</h4>
										<p>Adhyay LMS makes it easier for everyone to access all the information from a single dashboard. It helps to manage multiple tasks by putting in less efforts.</p>
									</li>
									<li>
										<h4>Simplify the process of learning</h4>
                                <p>The system simplifies the overall process of the learning. With a range of features like recording, tracking and documentation LMS enhances teaching experience with putting in any efforts.</p>
									</li>
									<li>
										<h4>Generate report</h4>
                                <p>Adhyay  LMS reduces the time of manually writing reports through an automated report generation tool. It becomes easier for the administration to evaluate and analyse the student learning process at any time.</p>
									</li>
									<li>
										<h4>Reduce time-complexity</h4>
                                   <p>Instead of sitting in a long class, students can anytime, anywhere can click the desired topic and chapter. It saves the time of administration and the teacher to easily figure out the area of required changes in just a few clicks.</p>
									</li>
									<li>
										<h4>Unlimited access to learning materials</h4>
                                  <p>When all the e-learning content is uploaded to the LMS, the student can easily access all the information. Teachers can conveniently log in to their LMS account and access the whole module from their mobile phone, tablets or some other laptop.</p>
									</li>
									<li>
										<h4>Anytime, anywhere learning</h4>
                                  <p>Adhyay learning management system eases or simplifies the process of learning. It allows the new students and teachers to figure out everything very quickly and effortlessly.</p>
									</li>
								</ul>
						</div> -->


						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box4" class="lms-section section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img4.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 order-1 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Mobile  <span class="highlighted">apps</span></h2>
                      <p>Start meetings from anywhere, and join meetings and webinars directly from your mobile device. Communicate through real-time video and collaborate efficiently with screen sharing.</p>
                        </div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box5" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2> Secure <span class="highlighted">sessions</span></h2>
                     <p>Keep your meetings secure using features like Lock meetings and password protection. In Adhyay YU all transmissions take place through encryption protocols which is the industry standard security practice.</p>
                        </div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="box6" class="lms-section section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img4.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 order-1 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2> <span class="highlighted">Recording</span></h2>
                      <p>Revisit any topic discussed during a meeting or webinar through recordings. Store and play recordings online, share them with a link, or download them for your own records.</p>
                        </div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="box6" class="lms-section section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-2">
					<div class="lms-figure">
						<img src="images/img4.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 order-1 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Organisation  <span class="highlighted">settings</span></h2>
                     <p>Add team members to your Adhyay YU account. Schedule team meetings and add members as presenters. Manage team settings and notifications, create custom domains, and enable co-branding for meetings and webinars.</p>
                        </div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="box1" class="lms-section section lms-custom-class" >
		<div class="container">
		<div class="section-title text-center">
	<h2>Online <span class="highlighted">meeting platform</span> </h2>
	</div>

			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img1.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
									<h2> Instant and <span class="highlighted"> scheduled meetings</span></h2>
                           <p>Plan meetings ahead and send email invitations to participants with the agenda, date, and time. For instant collaboration, start meetings right away and share the joining link with participants via chat, SMS, or email.</p>
                                </div>

						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="box3" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>  Private <span class="highlighted">meetings</span></h2>
                     <p>Lock confidential meetings to keep them secure from unexpected attendees. Get notified when someone tries to enter your meeting and let them in only if you want to.</p>
                        </div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box4" class="lms-section section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img4.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 order-1 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Moderator <span class="highlighted">controls</span></h2>
                      <p>Reduce disturbances and drive discussions in the right direction. Use moderator controls to mute all or individual participants. Also, remove participants when they aren't part of discussion anymore.</p>
                        </div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box5" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Embed  <span class="highlighted">meeting links</span></h2>
                     <p>Embed meeting links on your organisation website to let team members join ongoing meetings by simply entering their email addresses.</p>
                        </div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="box1" class="lms-section section lms-custom-class" >
		<div class="container">
		<div class="section-title text-center">
	<h2>Webinar <span class="highlighted">solution </span></h2>
	</div>

			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img1.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
									<h2> Video <span class="highlighted">webinars</span></h2>
                          <p>Conduct video webinars by broadcasting live video feeds of organisers and co-organizers to attendees along with the webinar presentation.</p>
								</div>

						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="box3" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2> Embed <span class="highlighted">registration form</span></h2>
                      <p>Drive webinar registrations by embedding the registration form on web pages and blogs that your target audience is likely to visit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box4" class="lms-section section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-1">
					<div class="lms-figure">
						<img src="images/img4.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 order-1 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Make <span class="highlighted"> presenter</span></h2>
                     <p>Make any attendee a presenter if they need to share their screen and speak to the entire audience.</p>
						</div>
						<!-- <a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	


<!-- get demo -->


<!-- get demo ends -->
<!-- <div class="photo-demo">
<img class="photo-demo"src=".\images\demo.jpg" alt="">

</div> --> 

    <section class="banner-footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-10 col-md-12 col-12">
					<div class="banner-inner-content">
						<h2> A secure web conferencing solution for online meeting and webinar</h2>
						<!-- <h3>The power of automation</h3>
						<p>Dedicated features that act as a powerful tool for the faster completion of tasks. Smart new features like RFID attendance, online fee payment, and the most convinient communication with parents, are now on Adhyay.</p> -->
						<a href='plans.php' class="btn-custom ">Get a Free Demo</a>

						<!-- <div class="vpop" data-type="youtube" data-id="FpNPX2Dnjwc" data-autoplay='true'>
							<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 16 16">
							  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
							</svg>
						</div> -->
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
	
	
<!--End new structure-->

	
<section class="home-contact">
	<div class="container">
		<div class="row justify-content-center">
			
			<div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-4 mt-lg-0">
				<div class="home-contact-form ml-0 ml-lg-4">
					<div class="section-title">
						<h2>Contact our web expert</h2>
					</div>
					<div class="alert alert-success d-none" role="alert"> Thanks for being awesome! </div>
					<div class="alert alert-danger d-none" role="alert"> A simple danger alert—check it out! </div>
					<form class="ml-0 ml-md-3" name="" action="https://www.insidesoftwares.com/full-inquiry-handler.php" method="POST">
						<div class="form-group">
							<input class="form-control" type="text" id="fname" name="fname" required="">
							<label></label> <span class="floating-label">Full Name</span> </div>
						<div class="form-group">
							<input class="form-control" type="text" id="email" name="email" placeholder="" required="">
							<label></label> <span class="floating-label">Email</span> </div>
						<div class="form-group">
							<input class="form-control" type="text" id="mobile" maxlength="10" name="mobile" placeholder="" required="">
							<label></label> <span class="floating-label">Mobile</span> </div>
						<div class="form-group">
							<textarea class="form-control" name="question" id="question" placeholder="Message"></textarea>
							<label></label>
						</div>
						<div class="form-group pt-3">
							<input type="submit" name="sendinquiry" id="sendinquiry" class="btn-custom" value="Let's Start "> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
	
	
	
	
	
    <!--  FOOTER    -->
	<?php include "inc/footer.php";?>
	
	<script src="js/mynavigation.js"></script>
</body>
</html>