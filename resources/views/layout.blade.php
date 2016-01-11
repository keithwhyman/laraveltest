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
  <script>
  $(document).ready(function() {
	$(document).foundation();
  });
  </script>
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
     
                <li><a href="{!! route('lang.switch', $language, $lang) !!}">
                    {!! $language !!}
					</a>
                </li>
       
        @endforeach
</ul>

    <ul class="dropdown menu center-buttons" data-dropdown-menu>
     
	        <li><a href="#">Nova Scotia Listings</a></li>
	  <li class="has-submenu">
        <a href="#">Relocation</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">Immigration</a></li>
          <li><a href="#">Translation</a></li>
        </ul>
      </li>
	   <li class="divider"></li>

      <li><a href="#">Connect Magazine </a></li>
	   <li class="divider"></li>

      <li><a href="#">Nova Scotia</a></li>
	   <li class="divider"></li>

      <li><a href="#">Hamburg</a></li>
	   <li class="divider"></li>

     <li><a href="#">About us</a></li>
	   <li class="divider"></li>
	        <li><a href="#">Contact</a></li>
	   <li class="divider"></li>
</ul>
  </section>
</nav>


<div class="row">
<div class="columns">

@yield('content')

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