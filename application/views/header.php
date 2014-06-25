<!--header from all the application.-->
<html>
  <head>
	  <title>CSCI</title>


		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Bootstrap -->
	    <link href="/assets/scripts/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	    <link href="/assets/styles/bootswatch-untitled.css" rel="stylesheet" media="screen">	    
	    <link href="/assets/styles/style.css" rel="stylesheet" media="screen">

		<link rel="stylesheet" type="text/css" media="all" href="http://www.careerskillsincubator.com/wp-content/themes/discover/style.css">
	    <link rel="stylesheet" id="superfish-css" href="http://www.careerskillsincubator.com/wp-content/themes/discover/css/superfish.css?ver=3.5.1" type="text/css" media="all">
		<link rel="stylesheet" id="foundation-css" href="http://www.careerskillsincubator.com/wp-content/themes/discover/css/foundation.css?ver=3.5.1" type="text/css" media="all">

   	    <!-- JavaScript plugins (requires jQuery) -->
	    <script src="/assets/scripts/jquery-2.0.3.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/assets/scripts/bootstrap/js/bootstrap.js"></script>

	    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
	    <script src="/assets/scripts/bootstrap/js/respond.js"></script>

	    <script type="text/javascript" src="http://www.careerskillsincubator.com/wp-content/themes/discover/js/modernizr.js?ver=2.6.1"></script>
	    <script type="text/javascript" src="http://www.careerskillsincubator.com/wp-content/themes/discover/js/superfish.js?ver=1.0"></script>
	    <script type="text/javascript" src="http://www.careerskillsincubator.com/wp-content/themes/discover/js/jquery.custom.js?ver=1.0"></script>
	    <script type="text/javascript" src="http://www.careerskillsincubator.com/wp-content/themes/discover/js/jquery.flexslider.js?ver=2.1"></script>
	    <script type="text/javascript" src="http://www.careerskillsincubator.com/wp-content/themes/discover/js/selectnav.js?ver=0.1"></script>
	    <script type="text/javascript" src="http://www.careerskillsincubator.com/wp-content/themes/discover/js/responsive-scripts.js?ver=1.2.1"></script>
<script type="text/javascript">
      (function() {
       if (typeof window.janrain !== 'object') window.janrain = {};
       window.janrain.settings = {};
 
       janrain.settings.tokenUrl = '<?=$this->config->base_url(); ?>auth/login';
       //janrain.settings.tokenUrl = '<?=$this->config->base_url(); ?>ja';
       janrain.settings.providers = [
        'linkedin'
    ]
 
       function isReady() { janrain.ready = true; };
       if (document.addEventListener) {
         document.addEventListener("DOMContentLoaded", isReady, false);
       } else {
         window.attachEvent('onload', isReady);
       }
 
       var e = document.createElement('script');
       e.type = 'text/javascript';
       e.id = 'janrainAuthWidget';
 
       if (document.location.protocol === 'https:') {
         e.src = 'https://rpxnow.com/js/lib/csci/engage.js';
       } else {
         e.src = 'http://widget-cdn.rpxnow.com/js/lib/csci/engage.js';
       }
 
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(e, s);
      })();
    </script>
   </head>
   <body>

  <!--Navbar Starts-->
  		<!--Logo and Cover-->
  	<div class="header_container">
	<div class="row">	
		<div class="three columns">
	
			<div id="logo">
				<a href="http://www.careerskillsincubator.com/" title="Career Skills Incubator" rel="home">
					<img src="http://www.careerskillsincubator.com/wp-content/uploads/2013/10/cropped-logo.png" width="220" height="129" alt="">
				</a>
			</div><!--logo end-->						
		</div>
	
		<div class="nine columns" id="menu_container">			
			<ul id="nav">
				<li><a href="http://www.careerskillsincubator.com" title="Home">Home</a></li>				
				<li class="page_item page-item-139"><a href="http://www.careerskillsincubator.com/blog/">Blog</a></li>
				<li class="page_item page-item-87"><a href="http://www.careerskillsincubator.com/about/" class="sf-with-ul">About</a>
				<ul class="children" style="display: none; visibility: hidden;">
					<li class="page_item page-item-62"><a href="http://www.careerskillsincubator.com/about/what-we-d/">What We Do</a></li>
					<li class="page_item page-item-166"><a href="http://www.careerskillsincubator.com/about/why-should-i-participate/">Why join?</a></li>
					<li class="page_item page-item-273"><a href="http://www.careerskillsincubator.com/about/testimonials/">Testimonials</a></li>
				</ul>
				</li>
				<li class="page_item page-item-96"><a href="http://www.careerskillsincubator.com/team/" class="sf-with-ul">Team</a>
				<ul class="children" style="display: none; visibility: hidden;">
					<li class="page_item page-item-64"><a href="http://www.careerskillsincubator.com/team/volunteers/">Staff &amp; Volunteers</a></li>
					<li class="page_item page-item-67"><a href="http://www.careerskillsincubator.com/team/board-of-directors/">Board of Directors</a></li>
				</ul>
				</li>
				<li class="page_item page-item-13"><a href="http://www.careerskillsincubator.com/sponsors/">Sponsors</a></li>
				<li class="page_item page-item-12"><a href="http://www.careerskillsincubator.com/faq/">FAQ</a></li>
				<li class="page_item page-item-14 current_page_item"><a href="http://www.careerskillsincubator.com/contact/">Contact</a></li>
			</ul>
  		</div>
	</div>
	</div>
	<div style="clear: both; height: 20px"></div>
		<?
		/*
		<div class="row-fluid">
		<div class="navbar navbar-default">
			<ul class="nav navbar-nav">				
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="/dashboard">App <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/dashboard">Dashboard</a></li>
						</ul>
				</li>
				
				<li><a href="http://csci.nfshost.com/CSCIwordpress/" >Home</a></li>
				
				<li><a href="http://csci.nfshost.com/CSCIwordpress/blog/" data-toggle="tab">Blog</a></li>
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">About<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="http://csci.nfshost.com/CSCIwordpress/about-us-2/what-we-are/">What is CSCI?</a></li>
							<li><a href="http://csci.nfshost.com/CSCIwordpress/about-us-2/why-should-i-participate/">Why join?</a></li>
							<li><a href="http://csci.nfshost.com/CSCIwordpress/about-us-2/testimonials/">Testimonials</a></li>
						</ul>
				</li>
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Team<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="http://csci.nfshost.com/CSCIwordpress/team/volunteers/">Staff&Volunteers </a></li>
							<li><a href="http://csci.nfshost.com/CSCIwordpress/team/board-of-directors/">Board of Directors</a></li>
						</ul>
				</li>
				
				<li><a href="http://csci.nfshost.com/CSCIwordpress/sponsors/" >Sponsors</a></li>
				
				<li><a href="http://csci.nfshost.com/CSCIwordpress/faq/" >FAQ</a></li>
				
				<li><a href="http://csci.nfshost.com/CSCIwordpress/contact/" >Contact</a></li>
			</ul>
		</div>	
	</div>
	*/
	?>

<!--Navbar ends-->
