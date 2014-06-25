<!--mentee profile-->
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
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">App<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#profile" data-toggle="tab">Profile</a></li>
						<li><a href="#tasks" data-toggle="tab">Tasks</a></li>
						<li><a href="#assignments" data-toggle="tab">Assignments</a></li>
						<li><a href="#goals" data-toggle="tab">Goals</a></li>
						<li><a href="#calendar" data-toggle="tab">Calendar</a></li>
					</ul>
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
				<p class="navbar-text pull-right">Signed in as <a href="http://br.linkedin.com/in/catarinasmidth" class="navbar-link">Catarina Smidth</a></p>
			</ul>
		</div>	
	</div>
	<!--Navbar ends-->
    

	<!--App Content-->
	<div class="tab-content">
			<!--Profile-->
			<div class="tab-pane" id="profile">
			</div>
			<!--Task-->
			<div class="tab-pane active" id="tasks">
			<?php include 'tasks.php'; ?>		
			</div>
		  	<!--End Tasks-->
			<!--Assignments-->
			<div class="tab-pane" id="assignments">
				<p>Write assignments to your mentor, so he/she knows how have this period been to you.</p>
			</div>
			<!--End Assigments-->
			<!--Goals-->
			<div class="tab-pane" id="goals">
			<?php include 'goals.php'; ?>
			</div>	
			<!--End Goals-->
			<!--Calendar-->
			<div class="tab-pane" id="calendar">
				<p>Check out your calendar</p>
			</div>
			<!--End Calendar-->
		</div>
		<!--App Content Ends-->
	
	

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="/assets/js/respond.js"></script>
  </body>
</html>