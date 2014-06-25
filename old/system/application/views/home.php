<!-- profile page, shows a little of everything that is going on in the app.-->
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
		<div class="row-fluid">
			<div class="panel col-lg-5">
			<div class="panel-body">
				 <div class="media">
					<a class="pull-left" href="#">
						<img class="media-object" src="/assets/pictures/catarina.jpg" width="150px" height="150px" alt="...">
					</a>
					<div class="media-body">
						<p><h3 class="media-heading"><?php echo $user['usarName'];?></h3><br>
							<h4><?php echo $user['userCareer'];?></h4>
							<h4><?php echo $user['userLocation'];?></h4>
						</p>
					</div>
				</div>
			</div>
			</div>
			<div class="panel col-lg-4">
				<div class="panel-body">
				<img src="/assets/pictures/calendar.png" width="150px" height="150px" alt="...">
				</div>
			</div>
			<div class="panel col-lg-3">
				<div class="panel-body">
				<h4>EVENTS</h4
					<ul class="list-group">
						<?php foreach ($event_title as $row):?>					
							  <li class="list-group-item">
								<?php echo $row;?>
							  </li>
					  <?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="panel col-lg-7">
				<div class="panel-body">
					<h4>Current tasks progress:</h4>
						<p>#2 Meeting People</p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only"></span></div>
						</div>
						<p>#1 Attach Strings</p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only"></span></div>
						</div>
						<br>
					<h4>You have assignments to be completed!</h4> <!--If there are really assignments to be complete, it wil lbe shown here-->
						<p>About my visit to the CSCI Annex</p>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="sr-only"></span></div>
						</div>			
				</div>
			</div>
			<div class="panel col-lg-5">
				<div class="panel-body">
				<h4>CSCI SUMMARY</h4> 
					<div class="list-group">
						<a href="#" class="list-group-item active">
							<h4 class="list-group-item-heading">Bianca Sayan</h4>
							<p class="list-group-item-text">Your mentor from April until August. She is an expert in technology and environmental friendly.</p>
						</a>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item active">
							<h4 class="list-group-item-heading">Business Networking Goal</h4>
							<p class="list-group-item-text">This goal has tasks related to meeting people and knowing how to be a better business person.</p>
						</a>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item active">
							<h4 class="list-group-item-heading">Newcomer Goal</h4>
							<p class="list-group-item-text">This goal will make you the foreign you want to be. </p>
						</a>
					</div>
				</div>
			</div>
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