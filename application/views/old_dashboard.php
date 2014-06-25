<!-- profile page, shows a little of everything that is going on in the app.-->
<body>
	<div class="container">
		<div class="row-fluid">
			<div class="panel col-lg-5">
			<div class="panel-body">
				 <div class="media">
					<a class="pull-left" href="#">
						<img class="media-object" src="/assets/pictures/catarina.jpg" width="150px" height="150px" alt="...">
					</a>
					<div class="media-body">
						<p><h3 class="media-heading"><?php echo $user['usarName'];?></h3>
							<h5><?php echo $user['userCareer'];?></h5>
							<h5><?php echo $user['userLocation'];?></h5>
							<h5><?php echo $user['userComment'];?></h5> 
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
						<?php foreach ($goal["title"] as $index => $row) : ?>
						<p> <?php echo $row;?></p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress[$index]['percentage'] ?>%"><span class="sr-only"></span></div>
						</div>
						<?php endforeach; ?>
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
	
