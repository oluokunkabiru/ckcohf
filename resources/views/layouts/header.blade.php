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
                <h1><a class="navbar-brand" href="{{ route('index') }}">CK-COHF</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-13" id="cl-effect-13">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle menu" data-toggle="dropdown">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown nav1">
                                <li><a href="{{ route('branch') }}">Branches</a></li>
                                <li><a href="{{ route('about') }}#history">History</a></li>
                                <li><a href="{{ route('about') }}#vmp">Vision, Mission &amp; Philosophy</a></li>
                                <li><a href="{{ route('about') }}#objectives">Aims &amp; Objectives</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown nav1">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Financial and Economic: Micro-finance Institution</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('special-loan') }}">Special Loan/Festival Loan</a></li>
                                        <li><a href="{{ route('grouploan') }}">Group Lending</a></li>
                                        <li><a href="{{ route('assetloan') }}">Asset Loan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Medical</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('medical') }}">Primary Healthcare Scheme</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('scholarship') }}">Scholarship Scheme</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('management') }}">Management Board</a></li>

                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                    <!-- script for menu -->
                        <script>
                            $( "a.menu" ).click(function() {
                            $( "ul.nav1" ).slideToggle( 300, function() {
                                Animation complete.
                            });
                            });
                        </script>
                    <!-- //script for menu -->
                </nav>
            </div>
        </nav>
    </div>
</div>
