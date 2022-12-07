@extends('layouts.app')
@section('title')
Gallery
@endsection

@push('style')
<!-- //font-awesome icons -->
<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

<!--Mobirise gallery-->
  <link rel="stylesheet" href="{{ asset('mobirise/assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/mobirise-gallery/style.css') }}">
  <link rel="stylesheet" href="{{ asset('mobirise/assets/mobirise/css/mbr-additional.css') }}" type="text/css">

@endpush
@section('content')
	<!-- about-team -->
	<div class="services-agile-info">
		<div class="container">
			<h2 class="w3ls_head"><span>Our </span>Gallery</h2>

			<section class="mbr-gallery mbr-slider-carousel" id="gallery2-u" data-rv-view="8996">
              <div class="container">
                <div>
                  <!-- Filter -->
                  <div class="mbr-gallery-filter container gallery-filter-active">
                    <ul buttons="0">
                      <li class="mbr-gallery-filter-all">
                        <a class="btn btn-md btn-primary-outline active display-4" href=""
                          >All</a
                        >
                      </li>
                      <li>
                        <a class="btn btn-md btn-primary-outline display-4" href=""
                          >Opening Mass</a
                        >
                      </li>
                      <li>
                        <a class="btn btn-md btn-primary-outline display-4" href=""
                          >Seminar</a
                        >
                      </li>
                      <li>
                        <a class="btn btn-md btn-primary-outline display-4" href=""
                          >Health Talk</a
                        >
                      </li>
                      <li>
                        <a class="btn btn-md btn-primary-outline display-4" href=""
                          >Rally</a
                        >
                      </li>
                      <li>
                        <a class="btn btn-md btn-primary-outline display-4" href=""
                          >Grand Finale</a
                        >
                      </li>
                      <li>
                        <a class="btn btn-md btn-primary-outline display-4" href=""
                          >Others</a
                        >
                      </li>
                    </ul>
                  </div>
                  <!-- Gallery -->
                  <div
                    class="mbr-gallery-row"
                    style="position: relative; height: 900.876px"
                  >
                    <div class="mbr-gallery-layout-default">
                      <div>
                        <div id="demo">



                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- Lightbox -->
                  <div
                    data-app-prevent-settings=""
                    class="mbr-slider modal fade carousel slide"
                    tabindex="-1"
                    data-keyboard="true"
                    data-interval="false"
                    id="lb-gallery2-u"
                  >
                    <div class="modal-dialog" style="width: 774px; top: 78.125px">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="carousel-inner" id="demo2">

                            <div class="carousel-item active">
                              <img src="mobirise/assets/gallery-image/IMG_1.jpg" alt="" />
                            </div>

                          </div>
                          <a
                            class="carousel-control carousel-control-prev"
                            role="button"
                            data-slide="prev"
                            href="#lb-gallery2-u"
                            ><span class="mbri-left mbr-iconfont" aria-hidden="true"></span
                            ><span class="sr-only">Previous</span></a
                          ><a
                            class="carousel-control carousel-control-next"
                            role="button"
                            data-slide="next"
                            href="#lb-gallery2-u"
                            ><span class="mbri-right mbr-iconfont" aria-hidden="true"></span
                            ><span class="sr-only">Next</span></a
                          ><a class="close" href="#" role="button" data-dismiss="modal"
                            ><span class="sr-only">Close</span></a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>


		</div>
	</div>
<!-- //about-team -->

@endsection
@push('script')

  <script src="{{ asset('mobirise/assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/popper/popper.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/tether/tether.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/smooth-scroll/smooth-scroll.js') }}"></script>
  <script src="{{ asset('mobirise/assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/touch-swipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js') }}"></script>
  <script src="{{ asset('mobirise/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js') }}"></script>
  <script src="{{ asset('mobirise/assets/masonry/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/theme/js/script.js') }}"></script>
  <script src="{{ asset('mobirise/assets/mobirise-gallery/player.min.js') }}"></script>
  <script src="{{ asset('mobirise/assets/mobirise-gallery/script.js') }}"></script>
  <script src="{{ asset('mobirise/assets/mobirise-slider-video/script.js') }}"></script>

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<script>
                            var i;
                            var text = "";
                            for (i = 1; i <= 4; i++) {
                              text += "<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='Opening Mass' style='position: absolute; left: 50%; top: 0px'><div href='#lb-gallery2-u' data-slide-to='" + i + "' data-toggle='modal'><img src='mobirise/assets/gallery-image/IMG_" + i + ".jpg' alt='' /><span class='icon-focus'></span></div></div>";
                            }

                            var x;
                            var text2 = "";
                            for (x = 5; x <= 8; x++) {
                              text2 += "<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='Seminar' style='position: absolute; left: 50%; top: 0px'><div href='#lb-gallery2-u' data-slide-to='" + x + "' data-toggle='modal'><img src='mobirise/assets/gallery-image/IMG_" + x + ".jpg' alt='' /><span class='icon-focus'></span></div></div>";
                            }

                            var l;
                            var text3 = "";
                            for (l = 9; l <= 12; l++) {
                              text3 += "<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='Health Talk' style='position: absolute; left: 50%; top: 0px'><div href='#lb-gallery2-u' data-slide-to='" + l + "' data-toggle='modal'><img src='mobirise/assets/gallery-image/IMG_" + l + ".jpg' alt='' /><span class='icon-focus'></span></div></div>";
                            }

                            var m;
                            var text4 = "";
                            for (m = 13; m <= 16; m++) {
                              text4 += "<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='Rally' style='position: absolute; left: 50%; top: 0px'><div href='#lb-gallery2-u' data-slide-to='" + m + "' data-toggle='modal'><img src='mobirise/assets/gallery-image/IMG_" + m + ".jpg' alt='' /><span class='icon-focus'></span></div></div>";
                            }

                            var n;
                            var text5 = "";
                            for (n = 17; n <= 20; n++) {
                              text5 += "<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='Grand Finale' style='position: absolute; left: 50%; top: 0px'><div href='#lb-gallery2-u' data-slide-to='" + n + "' data-toggle='modal'><img src='mobirise/assets/gallery-image/IMG_" + n + ".jpg' alt='' /><span class='icon-focus'></span></div></div>";
                            }

                            var z;
                            var text6 = "";
                            for (z = 21; z <= 32; z++) {
                              text6 += "<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='Others' style='position: absolute; left: 50%; top: 0px'><div href='#lb-gallery2-u' data-slide-to='" + z + "' data-toggle='modal'><img src='mobirise/assets/gallery-image/IMG_" + z + ".jpg' alt='' /><span class='icon-focus'></span></div></div>";
                            }

                            document.getElementById("demo").innerHTML = text +""+ text2 +""+ text3 +""+ text4 +""+ text5 +""+ text6;
                          </script>

                          <script>
                                var i;
                                var text = "";
                                for (i = 2; i <= 20; i++) {
                                  text += "<div class='carousel-item'><img src='mobirise/assets/gallery-image/IMG_" + i + ".jpg' alt='' /></div></div>";
                                }
                                document.getElementById("demo2").innerHTML = text;
                            </script>

@endpush


<!-- //for bootstrap working -->
<!-- for html include -->


