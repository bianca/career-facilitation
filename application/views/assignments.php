<!--the assigments page--> 
<body> 
	<div class="row">
		<div class="col-lg-8">
		<form action="/app/insert_ass" method="post">
		<fieldset>
			<div class="form-group">
				<label for="title" class="col-lg-2 control-label">Title </label>
				<div class="col-lg-8">
					<input type="text" class="form-control" id="title" name="title" placeholder="type here a very short description">
				</div>
			</div>
			<div class="form-group">
				<label for="text" class="col-lg-2 control-label">Text</label>
				<div class="col-lg-8">
					<textarea class="form-control" name="text" rows="10"></textarea>
				</div>
			</div>
			<div class="form-group">
			  <label for="date" class="col-lg-2 control-label">Date</label>
				<div class="col-lg-8">
					<input type="date" class="form-control" id="date" name="date" placeholder="">
				</div>
			</div>
			<div class="col-lg-offset-8">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</fieldset>
		</form>
		</div>
		
		<div class="col-lg-4">
			<!-- Button trigger modal -->
			<a data-toggle="modal" href="#oldass" class="btn btn-warning btn-lg">Old Assignments</a>
				<!-- Modal -->
				<div class="modal fade" id="oldass">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">List of assignments you have already sent.</h4>
							</div>
							
							<div class="modal-body">
								<div class="list-group">
									<?php foreach ($assignment["title"] as $index => $row):?>
									<a href="#" class="list-group-item active">
										<h4 class="list-group-item-heading"><?php echo $row; ?></h4>
										<p class="list-group-item-text"><?php echo $assignment["text"][$index];?></p>
									<?php endforeach; ?>
								</div>
							</div><!-- /.modal body-->
							
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
		</div>	
	</div>

			