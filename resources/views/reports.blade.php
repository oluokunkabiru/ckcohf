<!DOCTYPE html>
<html lang="en">
<head>
<title>Reports</title>
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
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
}
</script> 
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
 </head>
<body>
<!-- banner -->
	<div class="w3ls-banner-info-bottom">
		<div class="container">
			<div class="banner-address">
				<!--<div class="col-md-4 banner-address-left">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i>83, Idomila Road, GRA, Ijebu-Ode, Ogun State</p>
				</div>-->
				<div class="col-md-4 banner-address-left">
					<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@ckcohf.org">info@ckcohf.org</a></p>
				</div>
				<div class="col-md-4 banner-address-left">
					<p><i class="fa fa-phone" aria-hidden="true"></i> +234 906 397 7967</p>
				</div>
					<div class="col-md-4 agile_banner_social">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">CK-COHF</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="about.html#history">History</a></li>
									<li><a href="about.html#vmp">Vision, Mission &amp; Philosophy</a></li>
									<li><a href="about.html#objectives">Aims &amp; Objectives</a></li>
								</ul>
							</li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown nav1">
									<li class="dropdown-submenu">
										<a tabindex="-1" href="#">Financial and Economic: Micro-finance Institution</a>
										<ul class="dropdown-menu">
											<li><a href="special_loan.html">Special Loan/Festival Loan</a></li>
											<li><a href="group_lending.html">Group Lending</a></li>
											<li><a href="asset_loan.html">Asset Loan</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a tabindex="-1" href="#">Medical</a>
										<ul class="dropdown-menu">
											<li><a href="medical.html">Primary Healthcare Scheme</a></li>
										</ul>
									</li>
									<li><a href="scholarship.html">Scholarship Scheme</a></li>
									
								</ul>
							</li>
							<li><a href="management_board.html">Management Board</a></li>
							
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
	<div class="banner1">
	</div>
<!-- //banner -->	
<!-- services -->
	<div class="services-agile-info">
		<div class="container">
			<h2 class="w3ls_head">Reports </h2>
			<div class="w3_services_grids">
				<div class="col-md-12 w3_services_grid w3_services_grid3">
					<img src="images/coming.png" style="width:100%; height:auto;" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<div w3-include-html="footer.html"></div>
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- for html include -->
<script>
	includeHTML();
</script> 
<!-- for html include -->
</body>
</html>