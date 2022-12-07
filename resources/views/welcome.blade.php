<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<script>

</script>
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
 </head>
<body>
<!-- banner -->
	@include('layouts.header')

	<div class="banner">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="images/slider/IMG-20200924-WA0008.jpg" />
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="images/slider/IMG-20200924-WA0010.jpg" />
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="images/slider/IMG-20200924-WA0009.jpg" />
						</div>
					</li>
					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="images/slider/IMG-20200924-WA0007.jpg" />
						</div>
					</li>

					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="mobirise/assets/gallery-image/FDP_3752.jpg" />
						</div>
					</li>

					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="mobirise/assets/gallery-image/IMG_8.jpg" />
						</div>
					</li>

					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="mobirise/assets/gallery-image/DSC_0211.jpg" />
						</div>
					</li>

					<li>
						<div class="agileits_w3layouts_banner_info">
							<img src="mobirise/assets/gallery-image/FDP_5372.jpg" />
						</div>
					</li>
				</ul>
			</div>
		</section>
		<!-- flexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			</script>
		<!-- //flexSlider -->
	</div>
<!-- //banner -->
<!-- services -->
	<div class="services">
		<div class="container">
		<h2 class="w3ls_head"><span>Wel </span>come</h2>
			<div class="services-w3lsrow">
				<div class="col-md-4 services-grids top">
					<img src="images/welcome/DSC_0042.jpg" />
					<h4>Financial Inclusion For Disables</h4>
				</div>
				<div class="col-md-4 services-grids top-1">
					<img src="images/welcome/IMG_26.jpg" />
					<h4>Loans Widen Horizons For The Poor</h4>
				</div>
				<div class="col-md-4 services-grids top-2">
					<img src="images/welcome/4.png" />
					<h4>Granting Loans To The Needy</h4>
				</div>
				<div class="col-md-4 services-grids top-3">
					<!--<img src="images/welcome/2.jpg" />-->
					<img src="images/welcome/DSC_0356.jpg" />
					<h4>Eradicate the prevalence of Hunger &amp; Poverty</h4>
				</div>
				<div class="col-md-4 services-grids top-4">
					<!--<img src="images/welcome/5.jpg" />-->
					<img src="images/welcome/DSC_0364.jpg" />
					<h4>Giving Humanitarian Service To Widows And Poor Children In Rural Society</h4>
				</div>
				<div class="col-md-4 services-grids top-5">
					<!--<img src="images/welcome/6.jpg" />-->
					<img src="images/welcome/IMG_24.jpg" />
					<h4>Care For The Sick And The Less Privilege Children</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- stats -->
	<div class="sta-agile">
		<div class="stat-agile-info">
			<div class="container">
				<div class="stats">
					<!-- <div class="col-md-3 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<p class="counter">965</p>
						<h3>TRUSTED CLIENTS</h3>
					</div> -->
					<div class="col-md-4 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-male" aria-hidden="true"></i>
						</div>
						<p class="counter">4500</p>
						<h3>DIRECT BENEFICIARIES</h3>
					</div>
					<div class="col-md-4 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
						</div>
						<p class="counter">3400</p>
						<h3>LOANS GRANTED</h3>
					</div>
					<div class="col-md-4 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-asterisk" aria-hidden="true"></i>
						</div>
						<p class="counter">10</p>
						<h3>YEARS OF EXISTENCE</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //stats -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- about-team -->
	<div class="team">
		<div class="container">
			<h2 class="w3ls_head"><span>Our </span>Gallery</h2>
			<div class="team-row-agileinfo">
				<div class="col-md-4 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/welcome/01.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption" style="background: transparent; box-shadow: 0px 0px 0px transparent; height: 80%">
							<div class="social-w3lsicon" style="background: transparent; box-shadow: 0px 0px 0px transparent;">
								<a href="images/welcome/01.jpg"><i style="font-size:2em;" class="fa fa-eye"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/welcome/11.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption" style="background: transparent; box-shadow: 0px 0px 0px transparent; height: 80%">
							<div class="social-w3lsicon" style="background: transparent; box-shadow: 0px 0px 0px transparent;">
								<a href="images/welcome/11.jpg"><i style="font-size:2em;" class="fa fa-eye"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/welcome/15.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption" style="background: transparent; box-shadow: 0px 0px 0px transparent; height: 80%">
							<div class="social-w3lsicon" style="background: transparent; box-shadow: 0px 0px 0px transparent;">
								<a href="images/welcome/15.jpg"><i style="font-size:2em;" class="fa fa-eye"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12" align="center" style="text-align:center; margin-top: 30px;">
                    <a class="btn btn-success" href="gallery.html">View more</a>
                </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about-team -->
<!-- testimonials
	<div class="col-md-6 testimonials">
		<h3 class="w3ls_head"><span>Testim</span>onials</h3>
		<div class="testi-w3agileinfo">
			<!-- Nav tabs
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#testi" aria-controls="testi" role="tab" data-toggle="tab"><img src="images/1.png" alt=""/></a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="images/3.png" alt=""/></a></li>
				<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="images/2.png" alt=""/></a></li>
			</ul>
			<!-- Tab panes
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="testi">
					<h5>FILAN FISTEKU</h5>
					<p>Donec libero dui, scelerisque ac augue id, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet.</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<h5>ULLAMCORPER FILAN </h5>
					<p>Scelerisque ac augue id Donec libero dui, , tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet.</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="messages">
					<h5>SCELERISQUE AUGUE</h5>
					<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 testimonials-left-w3">
	</div>
	<div class="clearfix"></div>
	<!-- //testimonials -->
<!-- news-letter
	<div class="news-letter">
		<div class="container">
			<h3 class="w3ls_head"><span>Subscribe </span>Here </h3>
			<div class="agileinfo-subscribe">
				<form action="#" method="post">
					<input type="text" placeholder="Name" name="Name"  required="">
					<input type="email" placeholder="Email" name="Email"  required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	 //news-letter -->
@include('layouts.footer')
<!-- for html include -->
</body>
</html>
