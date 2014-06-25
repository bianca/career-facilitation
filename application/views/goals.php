<div class="container">
	<div class="row-fluid">
		<div class="panel col-lg-4 col-lg-offset-1">
			<div class="panel-heading">These are all your goals:</div>
				<div class="panel-body">
					<ul class="list-group">
						<?php foreach ($goal["title"] as $index => $row):?>
						<li class="list-group-item">
							<?php echo $row; ?>
							<ul>
							<?php echo $goal["description"][$index]; ?>
							</ul>
						</li>
							<?php endforeach; ?>
					</ul>
				</div>
		
		</div>
		
		<div class="col-lg-4">
			<!-- Button trigger modal -->
			<a data-toggle="modal" href="#newgoal" class="btn btn-danger btn-lg">+ New Goal</a>
				<!-- Modal -->
				<div class="modal fade" id="newgoal">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Adding a new goal.</br>Choose from our goal list, the tasks in it are going to be added in your dashboard automatically. </h4>
							</div>
							    
							<div class="modal-body">
							<form action="">
											    <div class="list-group">
												<?php foreach ($allgoals["title"] as $index => $row):?>
												<a href="#" class="list-group-item active">
													<h4 class="list-group-item-heading"><?php echo $row; ?></h4>
													<p class="list-group-item-text"><?php echo $allgoals["description"][$index];?> </p>
												</a>
												<?php endforeach; ?>
											</div>
											
							</div><!-- /.modal body-->
								
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="save" >Save</button>
							</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
	</div>
	
</div> <!--container close-->
<!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/bootstrap3.0/js/bootstrap.min.js"></script>

    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="/assets/bootstrap3.0/js/respond.js"></script>
  </body>
</html>