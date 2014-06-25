<!--Form to be filled when user signes in for the first time. -->
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
	<!--Intro begins when user is login in for the first time-->
	
	<div class="container">
	<div class="panel panel-warning">
		<div class="panel-heading">You are almost there!</div>
		<form action="/getstarted/newuser" method="post">
		  <fieldset>
			<p> Please fill out this form so we can set your preferences.</p>
			<div class="form-group">
			  <label for="name">Name</label>
			  <input type="text" class="form-control" id="name" name="fullname" placeholder=""><!--PRINT THE NAME GOT FROM JANRAIN-->
			</div>
		   <div class="form-group">
			  <label for="email">Email address</label>
			  <input type="text" class="form-control" id="email" name="email" placeholder="Enter valid email">
			</div>
			<div class="form-group">
			  <label for="phone">Phone</label>
			  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Personal phone">
			</div>
			<div class="form-group">
			  <label for="bday">Birthday</label>
			  <input type="date" class="form-control" id="bday" name="bday" placeholder="">
			</div>
			<div class="form-group">
			  <label for="location">Location</label>
			  <input type="text" class="form-control" id="location" name="location" placeholder="">
			</div>
			<div class="form-group">
			  <label for="position">Career</label>
			  <p> Let us know what do you aim in your career.</p>
			  <input type="text" class="form-control" id="position" name="career" placeholder=""> <!--MAYBE SET SOME CAREERS?-->
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox"> I agree with the x terms
			  </label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </fieldset>
		</form>
	</div>
	</div>
</div>