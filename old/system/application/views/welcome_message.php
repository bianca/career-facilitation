<!-- intro page, this page introduces the person to the application. It has sign in button, and the social login button aswell.-->
<!DOCTYPE html>
<html>
  <head>
  <title>CSCI Mentee</title>

	<!--Logo and Cover-->
	<div class="row">
		<div class="col-lg-2">
			<h2>Career Skills Incubator</h2>
		</div>
		<div class="col-lg-9">
			<img src="/assets/pictures/cover.jpg">
		</div>
	</div>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/assets/bootstrap3.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	
  <body>	
  <!--Navbar Starts-->
	<div class="row-fluid">
		<div class="navbar">
			<ul class="nav navbar-nav">
				<li class="disabled"><a class="dropdown-toggle" data-toggle="dropdown" href="#">App</a>
				<li><a href="http://csci.nfshost.com/CSCIwordpress/" >Home</a></li>
				<li><a href="http://csci.nfshost.com/CSCIwordpress/blog/" data-toggle="tab">Blog</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="http://csci.nfshost.com/CSCIwordpress/about-us-2/what-we-are/" data-toggle="tab">What is CSCI?</a></li>
						<li><a href="http://csci.nfshost.com/CSCIwordpress/about-us-2/why-should-i-participate/" data-toggle="tab">Why join?</a></li>
						<li><a href="http://csci.nfshost.com/CSCIwordpress/about-us-2/testimonials/" data-toggle="tab">Testimonials</a></li>
					</ul>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Team<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="http://csci.nfshost.com/CSCIwordpress/team/volunteers/" data-toggle="tab">Staff&Volunteers</a></li>
						<li><a href="http://csci.nfshost.com/CSCIwordpress/team/board-of-directors/" data-toggle="tab">Board of Directors</a></li>
					</ul>
				<li><a href="http://csci.nfshost.com/CSCIwordpress/sponsors/" >Sponsors</a></li>
				<li><a href="http://csci.nfshost.com/CSCIwordpress/faq/" >FAQ</a></li>
				<li><a href="http://csci.nfshost.com/CSCIwordpress/contact/" >Contact</a></li>
			</ul>
		</div>	
	</div>
	<!--Navbar ends-->

	<div class="container">
			<div class="jumbotron">
			<h1>Welcome to CSCI app!</h1>
			<p>Here you can manage your tasks, visualize goals, get in touch with your mentor and stay up to date with events! You only need to login with LinkedIn.</p>
			<p><a class="btn btn-primary btn-lg" href="#">LinkedIn</a></p> <!--LOGIN BUTTON FROM JANRAIN HERE-->
			</div>
	</div>

	<!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="/assets/js/respond.js"></script>
  </body>
</html>