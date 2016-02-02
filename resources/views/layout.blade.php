<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Author" content="Keith Whyman">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Robinson Harmsen</title>
  <link rel="stylesheet" href="/css/all.css">
  <script src="/js/all.js"></script>
  <!-- <script src="/js/what-input.min.js"></script> -->

 <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

  <script>
  $(document).ready(function() {
	$(document).foundation();

		$('.hamburgbanner').slick({
		  lazyLoad: 'ondemand',
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  speed: 500,
		  fade: true,
		  cssEase: 'linear',
			  arrows:false,
			  adaptiveHeight:true,
			  centerMode:true,  
		});


  });
  </script>
<style>
.slick-slide img
	{
		width: 100%;
	}
@media only screen and (min-width: 40em)
.menu {
    margin-top: 0.3rem;
    margin-left: 14rem;
}

</style>


 </head>
 <body>
  

<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<nav class="top-bar" data-topbar role="navigation">
  <div class="logo">
    <a href="http://robinsonharmsen.com"><img src="/images/ROB_Logo_lre_long.gif" /></a>
  </div>

<section class="top-bar-section">
  <ul class="rightmenu">
        @foreach (Config::get('languages') as $lang => $language)
		{{--   @if ($lang != App::getLocale()) --}}
                <li><a href="{!! route('lang.switch', $lang) !!}">
                    {!! $language !!}
					</a>
                </li>
       {{-- @endif --}}
        @endforeach
</ul>

    <ul class="dropdown menu center-buttons" data-dropdown-menu>
    
	        <li><a href="#"> {!! Lang::get('nav.listing') !!}</a></li>
	  <li class="has-submenu">
        <a href="#">{!! Lang::get('nav.relocation') !!}</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">{!! Lang::get('nav.immigration') !!}</a></li>
          <li><a href="#">{!! Lang::get('nav.translation') !!}</a></li>
        </ul>
      </li>
	   <li class="divider"></li>

      <li><a href="/magazine">{!! Lang::get('nav.magazine') !!}</a></li>
	   <li class="divider"></li>

      <li><a href="#">{!! Lang::get('nav.nova') !!}</a></li>
	   <li class="divider"></li>

      <li><a href="/hamburg">{!! Lang::get('nav.hamburg') !!}</a></li>
	   <li class="divider"></li>

     <li><a href="aboutus">{!! Lang::get('nav.about') !!}</a></li>
	   <li class="divider"></li>
	        <li><a href="/contact">{!! Lang::get('nav.contact') !!}</a></li>
	   <li class="divider"></li>
</ul>
  </section>
</nav>
<div class="container">

<div class="row">
<div class="columns">

@yield('content')

</div>	
</div>

</div>

<!-- Footer -->
<footer class="footer">
  <div class="row full-width">

							<div class="large-1 columns">
							 <a href="datenschutz.php"  class="menu1">Privacy</a>
							</div>
							<div class="large-2 columns">
								  <a href="http://www.vervin.de" target="_blank" class="menu1">Webdesign <strong>VERVIN</strong>GRAFIK <!-- Hamburg --></a> 
							</div>
							<div class="large-2 columns">
								 <a href="http://www.webital.de" target="_blank"  class="menu1">Programming <strong>&nbsp;W E B I T A L</strong> <!-- Hamburg --></a>&nbsp; 
							</div>
								<div class="large-3 columns">
								&nbsp;<span class="copy11grey">&copy;&nbsp;Robinson & Harmsen die Makler GbR 2006-2016&nbsp;</span>
							</div>
									<div class="large-1 columns">
							   <span class="copy11grey"><a href="http://www.robinsonharmsen.com/admin/" target="_blank"  class="menu1">Login</a></span>
							</div>
										<div class="large-2 columns">
						   &nbsp;<span class="copy11grey">Last update 05.01.2016 </span>
							</div>

  </div>
</footer>





 </body>
</html>