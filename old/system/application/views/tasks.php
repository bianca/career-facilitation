<div class="alert col-lg-8 col-lg-offset-2">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Events!</strong> There is a business fair this weekend!
			</div>
		<div class="panel col-lg-3 col-lg-offset-1">
			<div class="panel-heading">Tasks for this week!</div>
			
			<div class="accordion" id="accordion1">
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
					#1 Clean the house
				  </a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
				  <div class="accordion-inner">
					Clean the house and wop wop wop
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
					#2 Do the dishes
				  </a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
				  <div class="accordion-inner">
					Remove the trash from it
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
					#3 Shower every day
				  </a>
				</div>
				<div id="collapseThree" class="accordion-body collapse">
				  <div class="accordion-inner">
					Get a perfumed soap and shower with a nice and warm water
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		<div class="panel col-lg-3">
			<div class="panel-heading">Prepare for this months tasks!</div>
			
			<div class="accordion" id="accordion2">
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
					#1 Go to the movies
				  </a>
				</div>
				<div id="collapseFour" class="accordion-body collapse in">
				  <div class="accordion-inner">
					Watch top gun!
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
					#2 Go grocery shopping
				  </a>
				</div>
				<div id="collapseFive" class="accordion-body collapse">
				  <div class="accordion-inner">
					Remember to get some nuts!
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
					#3 Walk around
				  </a>
				</div>
				<div id="collapseSix" class="accordion-body collapse">
				  <div class="accordion-inner">
					Dont forget to visit the high park
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">
					#4 Say hi to grandma
				  </a>
				</div>
				<div id="collapseSix" class="accordion-body collapse">
				  <div class="accordion-inner">
					Dont forget!
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">
					#5 Try on some clothes
				  </a>
				</div>
				<div id="collapseEight" class="accordion-body collapse">
				  <div class="accordion-inner">
					Get some good old ones from granma!
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		<div class="col-lg-3 col-lg-offset-1">
			<!-- Button trigger modal -->
			<a data-toggle="modal" href="#newtask" class="btn btn-danger btn-lg">+ New Task</a>
			<!-- Modal -->
			<div class="modal fade" id="newtask">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Adding a new task.</br>Choose the goal you want to add tasks too and fill the form.</h4>
					</div>
					<div class="modal-body">
						<div class="radio">
							<label><input type="radio" name="optionsRadios" id="selectgoal" value="selectgoal1" checked>Get Goal Title 1</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optionsRadios" id="selectgoal" value="selectgoal2">Get Goal Title 2</label>
						</div>
						<form class="form-horizontal">
							<div class="form-group">
								<label for="taskTitle" class="col-lg-3 control-label">Task Ttile</label>
								<div class="col-lg-9">
								  <input type="text" class="form-control" id="taskTitle" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="taskDescription" class="col-lg-3 control-label">Task Description</label>
								<div class="col-lg-9">
								  <textarea class="form-control" rows="3" id="taskDescription"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="taskBegin" class="col-lg-3 control-label">Start Point</label>
								<div class="col-lg-9">
								  <input type="date" class="form-control" id="taskBegin" placeholder="mm/dd/yyyy">
								</div>
							</div>
							<div class="form-group">
								<label for="taskEnd" class="col-lg-3 control-label">End Point</label>
								<div class="col-lg-9">
								  <input type="date" class="form-control" id="taskEnd" placeholder="mm/dd/yyyy">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
					</div>
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
					
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button> <!--CHECK HOW TO SAVE THIS-->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>