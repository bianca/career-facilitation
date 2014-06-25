<body>
<div class="container">
	
	<div class="row">
		
		<div class="panel col-lg-3 col-lg-offset-3">
			<div class="panel-heading">Tasks for this week!</div>
				<div class="panel-body">
					<ul class="list-group">
						<?php foreach ($wtask["title"] as $index => $row):?>
						<li class="list-group-item">
							<?php echo $row; ?>
							<ul>
						    <?php echo $wtask["description"][$index]; ?>
							</ul>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
		</div> <!--panel close-->
		
		<div class="panel col-lg-3">
			<div class="panel-heading">This month tasks</div>
				<div class="panel-body">
					<ul class="list-group">
						<?php foreach ($mtask["title"] as $index => $row):?>
						<li class="list-group-item">
							<?php echo $row; ?>
							<ul>
						    <?php echo $mtask["description"][$index]; ?>
							</ul>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
		</div> <!--panel close-->
		
		
		<div class="col-lg-3 col-lg-offset-1">
			
			<!-- Button trigger modal -->
			<a data-toggle="modal" href="#newtask" class="btn btn-danger btn-lg">+ New Task</a>
				<!-- Modal -->
				<div class="modal fade" id="newtask">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Adding a new task.</br>Choose the goal you want to add tasks too and fill in the form.</h4>
							</div>
							
							<div class="modal-body">
								
							<form action="/app/insertTask"class="form-horizontal" method="post">
								<fieldset>
									<div class="form-group">
										<label for="goal" class="col-lg-3 control-label">Goal</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" name="goal" id="goal" placeholder="insert number">
										</div>
									</div>
									<div class="form-group">
										<label for="taskTitle" class="col-lg-3 control-label">Task Title</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" name="taskTitle" id="taskTitle" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label for="taskDescription" class="col-lg-3 control-label">Task Description</label>
										<div class="col-lg-9">
										  <textarea class="form-control" rows="3" name="taskDescription" id="taskDescription" ></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="taskBegin" class="col-lg-3 control-label">Start Point</label>
										<div class="col-lg-9">
										  <input type="date" class="form-control" name="taskBegin" id="taskBegin" placeholder="mm/dd/yyyy">
										</div>
									</div>
									<div class="form-group">
										<label for="taskEnd" class="col-lg-3 control-label">End Point</label>
										<div class="col-lg-9">
										  <input type="date" class="form-control" name="taskEnd" id="taskEnd" placeholder="mm/dd/yyyy">
										</div>
									</div>
							
							</div><!-- /.modal body-->
							
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="save" >Insert</button>
							</div>
							</fieldset>
						</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			
			<!-- Button trigger modal -->
			<a data-toggle="modal" href="#oldtask" class="btn btn-warning btn-lg">Old Tasks</a>
				<!-- Modal -->
				<div class="modal fade" id="oldtask">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">List of tasks you have already done. Congrats!</h4>
							</div>
							
							<div class="modal-body">
								<div class="list-group">
									<?php foreach ($oldtask["title"] as $index => $row):?>
									<a href="#" class="list-group-item active">
										<h4 class="list-group-item-heading"><?php echo $row; ?></h4>
										<p class="list-group-item-text"><?php echo $oldtask["description"][$index];?> </p>
									</a>
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
</div><!--container-->

