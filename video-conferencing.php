<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhyay - Video Conferencing</title>
	
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
						<h4>Easy To Use </h4>
						<h2>Our Video Conferencing<br /> App</h2>
						<a href="" class="btn-custom cd-popup-trigger">Get a Free Demo</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="hero-layers" id="hero-layers">
						<!--<img src="images/hero-layers/layer-main.png" alt="" class="hero__layer hero__layer_1" id="h__layer_1">
						<img src="images/hero-layers/pencils.png" alt="" class="hero__layer hero__layer_2" id="h__layer_2">
						<img src="images/hero-layers/glasses3.png" alt="" class="hero__layer hero__layer_3" id="h__layer_3">
						<img src="images/hero-layers/wood_pencil.png" alt="" class="hero__layer hero__layer_4" id="h__layer_4">-->
						
					</div>
				</div>
			</div>
			<img src="images/hero-layers/video-conferencing-img01.png" alt="" class="hero__layer hero__layer_5" id="h__layer_5">
			
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
	
	
	<!--<section class="about-app video-entrance-section  section" style="background:url(images/shape01.png)no-repeat center center/cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12 col-12">
					<div class="about-app-inner">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="section-title">
									<h2>"Get started with our" <span class="highlighted">Learning Management System”</span></h2>
									<p>Adhyay LMS is the most powerful software at present, for online classes and digital classroom environment. With our latest advancement, we are providing a complete solution for the remote/online class management system in 100 different languages.</p>
								</div>
								<div class="video-enter">
									<div class="vpop" data-type="youtube" data-id="6xcG6ttMDVY" data-autoplay='true'>
										<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 16 16">
										  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
										</svg>
										<h4>See how it works</h4>
									</div>
									
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="video-pen">
									
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->

	
	
	<!--About-->
	<section class="about-app video-about-app section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12 col-12">
					<div class="about-app-inner">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="section-title">
									<h2>"Get started with our" <span class="highlighted">Learning Management System”</span></h2>
									<p>Adhyay LMS is the most powerful software at present, for online classes and digital classroom environment. With our latest advancement, we are providing a complete solution for the remote/online class management system in 100 different languages.</p>
								</div>
								<div id="counter" class="statistics-section">
									<div class="row">
										<div class="col-md-4 stastic-col">
											<div class="stastic">
												<h4><span class="counter">10</span> <span>K</span></h4>
												<p>App Downloads</p>
											</div>
										</div>
										<div class="col-md-4 stastic-col">
											<div class="stastic">
												<h4><span class="counter">4</span> <span>+</span></h4>
												<p>Average Review </p>
											</div>
										</div>
										<div class="col-md-4 stastic-col">
											<div class="stastic">
												<h4><span class="counter percent">1</span> <span>M</span></h4>
												<p>Active Users</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="video-pen">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End about-->
	
	<!--Cta-->
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
	<!--End Cta-->
	
	<section class="features section">
		<div class="container">
			<div class="section-title title-blue">
				<h2>Exclusive Features  <span class="highlighted">Put Collaboration At <br />Your Fingertips</span></h2>
			</div>
			
			<div class="tab-section">
				<!-- about -->
				<div class="about">
					<a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank"> <span class="icon"></span> </a>
					<a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank"> <span class="icon"></span> </a>
					<a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank"> <span class="icon"></span> </a>
					<a class="bg_links logo"></a>
				</div>
				<!-- end about -->
				<section id="wrapper">
					<div class="content">
						<!-- Tab links -->
						<div class="tabs">
							<button class="tablinks active" data-tab="v1">
								<div class="tab-content">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
									<path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
									<path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
									</svg>

								<h3>Organise <small>conversation</small></h3>
							  </div>
							</button>
							<button class="tablinks" data-tab="v2">
								<div class="tab-content">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
								  <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
								  <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
								</svg>

								<h3>Shared <small>file and etc</small></h3>
							  </div>
							</button>
							<button class="tablinks" data-tab="v3">
								<div class="tab-content">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
								  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
								</svg>

								<h3>Search <small>everything</small></h3>
							  </div>
							</button>
							<button class="tablinks" data-tab="v4">
								<div class="tab-content">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
								  <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
								  <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
								  <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
								</svg>

								<h3>talk in <small>video call</small></h3>
							  </div>
							</button>
						</div>
						<!-- Tab content -->
						<div class="wrapper_tabcontent">
							<div id="v1" class="tabcontent active">
								<img src="images/v1.jpg" alt="">
							</div>
							<div id="v2" class="tabcontent">
								<img src="images/v1.jpg" alt="">
							</div>
							<div id="v3" class="tabcontent">
								<img src="images/v1.jpg" alt="">
							</div>
							<div id="v4" class="tabcontent">
								<img src="images/v1.jpg" alt="">
						</div>
					</div>
				</section>

			</div>
		</div>
	</section>
	
	<section class="all-features section">
		<div class="container">
			<div class="section-title text-center">
				<h2>We Provide Best Feature For App Design And Coding <br /><span class="highlighted">EXCLUSIVE FEATURES</span></h2>
				
			</div>
			<div class="row">
				<div class="col-md-2 col-12">
					
				</div>
				<div class="col-md-8 col-12">
					<ul class="allFeatures">
						<li><span>Digiboard/host</span></li>
						<li><span>Group messaging/Private messaging</span></li>
						<li><span>Screen sharing</span></li>
						<li><span>Dekstop storage</span></li>
						<li><span>HD audio/ HD video</span></li>
						<li><span>Schedule meeting</span></li>
						<li><span>Call logs record</span></li>
						<li><span>Password protected meeting</span></li>
						<li><span>Allow users before joining</span></li>
						<li><span>Mute/Unmute participants</span></li>
						<li><span>Shut/Unshut video participants</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="secure-msgs section" style="
	background-image: url(images/secure-msgs.png);
    background-color: #eff8ff;
    background-position: left;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 750px;
    position: relative;
    overflow: hidden;
	">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-7 col-12"></div>
				<div class="col-lg-5 col-12 d-flex align-items-center">
					<div class="section-title">
						<h2>Secure Your Messages  <br /><span class="highlighted">THE WORLD'S TOP <br />SECURE APP</span></h2>
						<p>LMS consists of amazing features such as analysis of the entire school/institute data in one click. Admin can review all the activities on our LMS system by clicking on the data links and easily acces the complete management flow. </p>
					</div>
				</div>
			</div>
		</div>
		
		
		<img class="img-fluid secure-img1" src="images/1.png" alt="parellex-img1">
		<img class="img-fluid secure-img2" src="images/1.png" alt="parellex-img1">
	</section>
	
	
	
	<!--<section id="box1" class="lms-section section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img1.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Complete analytics report  <span class="highlighted">FOR ADMIN</span></h2>
							<p>LMS consists of amazing features such as analysis of the entire school/institute data in one click. Admin can review all the activities on our LMS system by clicking on the data links and easily acces the complete management flow. </p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box2" class="lms-section section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 order-2">
					<div class="lms-figure">
						<img src="images/img2.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 order-1 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Automated attendance   <span class="highlighted">FOR STAFF AND STUDENTS</span></h2>
							<p>It is time to move forward with an automated attendance system with Adhyay and leave ancient paper work to rest.</p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box3" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Clear analytics report  <span class="highlighted">FOR MEMBERS</span></h2>
							<p>Includes data of all affiliates of schools, including: teacher, stuff, student, parent, management.</p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box4" class="lms-section section bg-light">
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
							<h2>One click communication <span class="highlighted">WITH PARENTS</span></h2>
							<p>Send emergency holiday SMS to parents, also SMS notifications regarding attendance, marks,pay fees, social events, homework and so on.</p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box5" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Online  <span class="highlighted">TEST MANAGEMENT</span></h2>
							<p>Students can easily attend the online exam, test series & mock test from their devices.<br /> Once the examination is scheduled, students will receive an instant notification and at the scheduled time students can appear for the test from their  devices.</p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
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
							<h2>Online <span class="highlighted">HOMEWORK MANAGEMENT</span></h2>
							<p>Create the homework and distribute it to the whole class or a group of particular students.<br /> Students can submit answers and also view pending and submitted homework, submission details.<br />  In this platform we can also assign the homework through the pdf , docx, image, video and youtube link. In our software you can work easily and with little time.</p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box7" class="lms-section section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="lms-figure">
						<img src="images/img3.jpg" alt="">
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-12 d-flex align-items-center">
					<div class="lms-content">
						<div class="section-title">
							<h2>Online <span class="highlighted">CLASS MANAGEMENT</span></h2>
							<p> Create online classes, see the session list. When students enter the class attendance will be automatically submitted in the session list in teacher login.<br /> This is the single platform for which we easily start an online session.</p>
						</div>
						<a href="#" class="btn-custom cd-popup-trigger">Book a free demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	
	<!--Price list-->
	
	
	<section class="section price__list">
		<div class="container">
			<div class="section-title text-center">
				<h2>What features are right <br />for you?</h2>
				<p>Price card</p>
			</div>
		</div>
		<div class="pricing pricing-palden">
			<div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-0" style="min-height: 497px;">
				<div class="pricing-deco">
					<svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
						<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
						<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
						<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
						<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
					</svg>
					<div class="pricing-price"><span class="pricing-currency">Starting at</span> &#8377;9 <span class="pricing-period">/ Student</span> </div>
					<h3 class="pricing-title">Standared plan</h3> </div>
				<ul class="pricing-feature-list">
					<li class="pricing-feature">Cloud based system</li>
					<li class="pricing-feature">Data security and encryption</li>
					<li class="pricing-feature">Student management</li>
					<li class="pricing-feature">Staff management</li>
					<li class="pricing-feature">Parent management</li>
					<li class="pricing-feature">Exam management</li>
					<li class="pricing-feature">Generate automated reportcard</li>
					<li class="pricing-feature">HR management</li>
					<li class="pricing-feature">Payroll management</li>
					<li class="pricing-feature">Fee management</li>
					<li class="pricing-feature">Leave management</li>
					<li class="pricing-feature">Pay fee online</li>
					<li class="pricing-feature">Fee notifications</li>
					<li class="pricing-feature">Analytics report</li>
					<li class="pricing-feature">Generate reports</li>
					<li class="pricing-feature">Print/download reports</li>
					<li class="pricing-feature">Create memories</li>
					<li class="pricing-feature">50,000 SMS pack/year</li>
				</ul>
				<button class="pricing-action">Choose plan</button>
			</div>
			<div class="pricing-item features-item ja-animate pricing__item--featured" data-animation="move-from-bottom" data-delay="item-1" style="min-height: 497px;">
				<div class="pricing-deco" style="background: linear-gradient(135deg,#ff5757,#584efd)">
					<svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
						<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
						<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
						<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
						<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
					</svg>
					<div class="pricing-price"><span class="pricing-currency">Starting at</span> &#8377;18 <span class="pricing-period">/ Student</span> </div>
					<h3 class="pricing-title">Platinum Plan</h3> 
				</div>
				<ul class="pricing-feature-list">
					<li class="pricing-feature">Cloud based system</li>
					<li class="pricing-feature">Data security and encryption</li>
					<li class="pricing-feature">Student management</li>
					<li class="pricing-feature">Staff management</li>
					<li class="pricing-feature">Parent management</li>
					<li class="pricing-feature">Exam management</li>
					<li class="pricing-feature">Generate automated reportcard</li>
					<li class="pricing-feature">HR management</li>
					<li class="pricing-feature">Payroll management</li>
					<li class="pricing-feature">Fee management</li>
					<li class="pricing-feature">Leave management</li>
					<li class="pricing-feature">Pay fee online</li>
					<li class="pricing-feature">Fee notifications</li>
					<li class="pricing-feature">Analytics report</li>
					<li class="pricing-feature">Generate reports</li>
					<li class="pricing-feature">Print/download reports</li>
					<li class="pricing-feature">Homework report</li>
					<li class="pricing-feature">Homework notification to parents</li>
					<li class="pricing-feature">Manage school timetable</li>
					<li class="pricing-feature">Mobile app for parents</li>
					<li class="pricing-feature">Create memories</li>
					<li class="pricing-feature">100,000 SMS pack/year</li>
					<li class="pricing-feature">RFID automated attendance</li>
					<li class="pricing-feature">Attendance SMS to parents</li>
					<li class="pricing-feature">RFID card for students</li>
					<li class="pricing-feature">RFID cards for staff</li>
				</ul>
				<button class="pricing-action">Choose plan</button>
			</div>
			<div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-2" style="min-height: 497px;">
				<div class="pricing-deco">
					<svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
						<path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
						<path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
						<path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
						<path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
					</svg>
					<div class="pricing-price"><span class="pricing-currency">Starting at</span> &#8377;15 <span class="pricing-period">/ Student</span> </div>
					<h3 class="pricing-title">Advance Plan</h3> 
				</div>
				<ul class="pricing-feature-list">
					<li class="pricing-feature">Cloud based system</li>
					<li class="pricing-feature">Data security and encryption</li>
					<li class="pricing-feature">Student management</li>
					<li class="pricing-feature">Staff management</li>
					<li class="pricing-feature">Parent management</li>
					<li class="pricing-feature">Exam management</li>
					<li class="pricing-feature">Generate automated reportcard</li>
					<li class="pricing-feature">HR management</li>
					<li class="pricing-feature">Payroll management</li>
					<li class="pricing-feature">Fee management</li>
					<li class="pricing-feature">Leave management</li>
					<li class="pricing-feature">Pay fee online</li>
					<li class="pricing-feature">Fee notifications</li>
					<li class="pricing-feature">Analytics report</li>
					<li class="pricing-feature">Generate reports</li>
					<li class="pricing-feature">Print/download reports</li>
					<li class="pricing-feature">Homework report</li>
					<li class="pricing-feature">Homework notification to parents</li>
					<li class="pricing-feature">Manage school timetable</li>
					<li class="pricing-feature">Mobile app for parents</li>
					<li class="pricing-feature">Create memories</li>
					<li class="pricing-feature">80,000 SMS pack/year</li>
				</ul>
				<button class="pricing-action">Choose plan</button>
			</div>
		</div>
	</section>
	<!--End price list-->
	
	<section class="section-testimonials" >
		<div class="">
		<div class="slider">
			<div class="slider__slides">
				<div class="slider__slide slider__slide--1">
					<figure class="testimonial slider__slide-content">
						<blockquote class="testimonial__text"> 
							<img class="testimonial__quotation-marks" src="images/pattern-quotes.svg" alt="quotation marks">
							<p class="testimonial__quote"> “ I’ve been interested in coding for a while but never taken the jump, until now. I couldn’t recommend this course enough. I’m now in the job of my dreams and so excited about the future. ” </p> 
							<cite class="testimonial__cite">
								<span class="testimonial__cite--name">Tanya Sinclair </span>
								<span class="testimonial__cite--role">Vice Chancellor</span>
							</cite> 
						</blockquote>
						<div class="testimonial__img"> <img class="testimonial__photo" src="images/image-tanya.jpg" alt=""> </div>
					</figure>
				</div>
				<div class="slider__slide slider__slide--2">
					<figure class="testimonial slider__slide-content">
						<blockquote class="testimonial__text">
							<img class="testimonial__quotation-marks" src="images/pattern-quotes.svg" alt="quotation marks">
							<p class="testimonial__quote"> “ If you want to lay the best foundation possible I’d recommend taking this course. The depth the instructors go into is incredible. I now feel so confident about starting up as a professional developer. ” </p> 
							<cite class="testimonial__cite">
								<span class="testimonial__cite--name">John Tarkpor </span>
								<span class="testimonial__cite--role">Principal of Junior School</span>
							</cite> </blockquote>
						<div class="testimonial__img"> <img class="testimonial__photo" src="images/image-john.jpg" alt="John Tarkpor"> </div>
					</figure>
				</div>
			</div>
			<div class="slider__buttons">
				<div class="slider__button slider__button--prev">
					<svg class="slider__button-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="18">
						<path fill="none" stroke-width="3" d="M11 1L3 9l8 8" />
					</svg>
				</div>
				<div class="slider__button slider__button--next">
					<svg class="slider__button-icon" xmlns="http://www.w3.org/2000/svg" width="13" height="18">
						<path fill="none" stroke-width="3" d="M2 1l8 8-8 8" />
					</svg>
				</div>
			</div>
		</div>
		
	</section>
	
	<section class="banner-footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-10 col-md-12 col-12">
					<div class="banner-inner-content">
						<h2>How Adhyay creates a new Chapter</h2>
						<h3>The power of automation</h3>
						<p>Dedicated features that act as a powerful tool for the faster completion of tasks. Smart new features like RFID attendance, online fee payment, and the most convinient communication with parents, are now on Adhyay.</p>
						<div class="vpop" data-type="youtube" data-id="FpNPX2Dnjwc" data-autoplay='true'>
							<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 16 16">
							  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
							</svg>
						</div>
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