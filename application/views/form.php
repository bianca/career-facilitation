<!--Form to be filled when user signes in for the first time. -->


	<!--Intro begins when user is login in for the first time-->
	<body>	
		<div class="container">
		<div class="panel panel-warning">
			<div class="panel-heading">You are almost there!</div>
			<form action="/getstarted/newuser" method="post">
			  <fieldset>
				<p> Please fill out this form so we can know a bit more about you.</p>
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
				<div class="form-group">
				  <label for="position">Personal Summary</label>
				  <p> Tell us a little about yourself! </p>
				  <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
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