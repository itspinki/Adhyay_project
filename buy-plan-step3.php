<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhyay - Buy a Plan</title>
	
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
<body class="plan-page ">
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

	
	<!--New Header-->
	<?php include "inc/header.php";?>	
	<!--New header end-->
	
	<!-- New structure-->
	


	<section class="design-process-section ecommerce_packages_block margin-top-small" id="process-tab">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<!-- design process steps-->
					<!-- Nav tabs -->
					<ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
						<li role="presentation" class="active">
							<a href="#">
								<i>01</i>
								<p>CONFIGURE PRODUCTS</p>
							</a>
						</li>
						<li role="presentation" class="active">
							<a href="#">
								<i>02</i>
								<p>CREATE AN ACCOUNT</p>
							</a>
						</li>
						<li role="presentation" class="active">
							<a href="#">
								<i>03</i>
								<p>BILLING INFORMATION</p>
							</a>
						</li>
						<li role="presentation" class="">
							<a href="#">
								<i>04</i>
								<p>PAYMENT</p>
							</a>
						</li>
						
					</ul>
					<!-- end design process steps-->
					
					<div class="process-content">
						<div class="content">
							<div class="">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
										<div class="box payments">
											<h3 class="box-title">Billing Information</h3>
											<div class="plan-details">
												<h4>Video confrencing annual plan</h4>
												<div>
													<label>Date and Time</label>
													<p>01-06-2022 at 8am</p>
												</div>
												<div>
													<label>Valid Till</label>
													<p>01-06-2023 at 8am</p>
												</div>
											</div>
											<div class="plan-selection">
												<div class="plan-data">
													<input id="question4" name="question" type="radio" class="with-font" value="sel" />
													<label for="question4">Card  
													<img src="images/card-payment.png" alt="">
														
													</label> 
												</div>
											</div>
											<div class="plan-selection">
												<div class="plan-data">
													<input id="question5" name="question" type="radio" class="with-font" value="sel" />
													<label for="question5">Paypal
													<img src="images/PayPal.png" alt="">
														
													</label> 
												</div>
											</div>
											<div class="plan-selection">
												<div class="plan-data">
													<input id="question6" name="question" type="radio" class="with-font" value="sel" />
													<label for="question6">Razorpay
													<img src="images/razorpay.svg." alt="">
														
													</label> 
												</div>
											</div>
											
										</div>
										
										<a href="#" class="btn-custom mb30">Continue With Plans</a> 
									</div>
									<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
										<div class="widget">
											<h4 class="widget-title">Order Summary</h4>
											<div class="summary-block">
												<div class="summary-content">
													<div class="summary-head">
														<h5 class="summary-title">Personal</h5></div>
													<div class="summary-price">
														<p class="summary-text">$29 / mo</p> <span class="summary-small-text pull-right">1 month</span> </div>
												</div>
											</div>
											<div class="summary-block">
												<div class="summary-content">
													<div class="summary-head">
														<h5 class="summary-title">Website Security 
						Essential</h5></div>
													<div class="summary-price">
														<p class="summary-text">$229 / mo</p> <span class="summary-small-text pull-right">1 month</span> </div>
												</div>
											</div>
											<div class="summary-block">
												<div class="summary-content">
													<div class="summary-head">
														<h5 class="summary-title">Total</h5></div>
													<div class="summary-price">
														<p class="summary-text">$258 / mo</p> <span class="summary-small-text pull-right">1 month</span> </div>
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
		</div>
	</section>
	
	
	<!--Cta-->
	<section class="full-cta d-none">
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
	
	<!--Price list-->
	
	
	
	
    <!--  FOOTER    -->
	<?php include "inc/footer.php";?>
	
	<script src="js/mynavigation.js"></script>
</body>
</html>