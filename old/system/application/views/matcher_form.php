<!--view for the matcher form-->
<body>

<div class="container">
	<div class="panel panel-warning">
		<div class="panel-heading">Welcome to <strong>THE MATCHER</strong>!</div>
	
		<form action="/matcher/matching" method="post">
			<p>	Here we will see who matches you for a mentor or mentee.</p>
			<p>Honest answer guys, we want to find you the missing lid of your career pan! Click it away! More than one area can be selected.</p>
			</br>
		  <fieldset>
			
			<!--area of study-->
			<div class="row-fluid">
				<p class="lead">Area of Study Expertise</p>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="accFinance" value="Account & Finance">Account & Finance</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="arch" value="Architecture">Architecture</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="artsHist" value="Arts & History">Arts & History</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="eco" value="Economics">Economics</label>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="engi" value="Engineering">Engineering</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="enviro" value="Environmental Studies">Environmental Studies</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="lang" value="Language">Language</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="law" value="Law">Law</label>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="math" value="Mathematics">Mathematics</label>
					</div>	
					<div class="checkbox">
						<label><input type="checkbox" name="media" value="Media">Media </label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="med" value="Medical Studies">Medical Studies</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="religion" value="Religious Studies">Religious Studies</label>
					</div>	
				</div>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="sci" value="Sciences">Sciences</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="other1"><input type="text" name="text1" value="" placeholder="Other"></label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="other2" ><input type="text" name="text2" value="" placeholder="Other"></label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="other3" ><input type="text" name="text3"  value="" placeholder="Other"></label>
					</div>
				</div>
			</div>
			<!--area of study ends-->
			
			<!--skills-->
			<div class="row-fluid">
				<p class="lead">Skills</p>
			</div>
			<div class="row-fluid">
				<p>The skills given bellow are rated from 1 to 5.</br>Selecting #1 means that you have no knowledge in this area.</br>From #2 to #4 shows us how big is your knowledge in the area.</br>Now #5 is the EXPERT button. If you select it, you are telling us that you know a lot about this subject, and that you could one day, teach someone about it.</p>
			</div>
			</br>		
				
			<div class="row-fluid">
				<p class="lead">Hard Skills</p>	

				<div class="col-lg-4 col-lg-offset-2">
				Business Analysis
				</div>
				
				<div class="col-lg-4 ">
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" value="5" >5</label>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </fieldset>	
	  	</form>
	</div> <!--close panel-->
</div> <!--close container-->
		
			
					<!-- <p>Business Analysis</p>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="5" >5</label>
					</div>
					
					<p>Business Case</p>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="5" >5</label>
					</div>
		
					<p>Data Analysis - Database & Design</p>
					<div class="radio-inline">
						<label><input type="radio" name="dataAnalysis" id="dataAnalysis" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="dataAnalysis" id="dataAnalysis" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="dataAnalysis" id="dataAnalysis" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="dataAnalysis" id="dataAnalysis" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="dataAnalysis" id="dataAnalysis" value="5" >5</label>
					</div>
					
					<p>Programming - Computer Science & Graphic Design</p>
					<div class="radio-inline">
						<label><input type="radio" name="programming" id="programming" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="programming" id="programming" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="programming" id="programming" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="programming" id="programming" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="programming" id="programming" value="5" >5</label>
					</div>
					
					<p>Project Management</p>
					<div class="radio-inline">
						<label><input type="radio" name="projManage" id="projManage" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="projManage" id="projManage" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="projManage" id="projManage" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="projManage" id="projManage" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="projManage" id="projManage" value="5" >5</label>
					</div>
					
					<p>Reporting & Administration</p>
					<div class="radio-inline">
						<label><input type="radio" name="reporting" id="reporting" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="reporting" id="reporting" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="reporting" id="reporting" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="reporting" id="reporting" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="reporting" id="reporting" value="5" >5</label>
					</div>
					
					<p>Strong Communications - Writing, Speaking, Lecturing</p>
					<div class="radio-inline">
						<label><input type="radio" name="communication" id="communication" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="communication" id="communication" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="communication" id="communication" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="communication" id="communication" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="communication" id="communication" value="5" >5</label>
					</div>
				
		
			<div class="row-fluid">
				<p class="lead">Soft Skills</p>
			</div>
			
			<div class="row-fluid">
				<div class="col-lg-10 col-lg-offset-2">
					<p>Meet Deadlines</p>
					<div class="radio-inline">
						<label><input type="radio" name="deadlines" id="deadlines" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="deadlines" id="deadlines" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="deadlines" id="deadlines" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="deadlines" id="deadlines" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="deadlines" id="deadlines" value="5" >5</label>
					</div>
					
					<p>Supervise Others</p>
					<div class="radio-inline">
						<label><input type="radio" name="supervise" id="supervise" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="supervise" id="supervise" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="supervise" id="supervise" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="supervise" id="supervise" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="supervise" id="supervise" value="5" >5</label>
					</div>
		
					<p>Manage People</p>
					<div class="radio-inline">
						<label><input type="radio" name="managePlp" id="managePlp" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="managePlp" id="managePlp" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="managePlp" id="managePlp" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="managePlp" id="managePlp" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="managePlp" id="managePlp" value="5" >5</label>
					</div>
					
					<p>Organize & Manage Projects</p>
					<div class="radio-inline">
						<label><input type="radio" name="organizeProj" id="organizeProj" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="organizeProj" id="organizeProj" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="organizeProj" id="organizeProj" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="organizeProj" id="organizeProj" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="organizeProj" id="organizeProj" value="5" >5</label>
					</div>
					
					<p>Public Speaking</p>
					<div class="radio-inline">
						<label><input type="radio" name="publicSpeaking" id="publicSpeaking" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="publicSpeaking" id="publicSpeaking" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="publicSpeaking" id="publicSpeaking" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="publicSpeaking" id="publicSpeaking" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="publicSpeaking" id="publicSpeaking" value="5" >5</label>
					</div>
					
					<p>Plan Daily Work or Special Events</p>
					<div class="radio-inline">
						<label><input type="radio" name="planning" id="planning" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="planning" id="planning" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="planning" id="planning" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="planning" id="planning" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="planning" id="planning" value="5" >5</label>
					</div>
					
					<p>Manage Money, Make a Budget</p>
					<div class="radio-inline">
						<label><input type="radio" name="manageMoney" id="manageMoney" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="manageMoney" id="manageMoney" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="manageMoney" id="manageMoney" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="manageMoney" id="manageMoney" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="manageMoney" id="manageMoney" value="5" >5</label>
					</div>
					
					<p>Analyze Data, Audit and Maintain Record</p>
					<div class="radio-inline">
						<label><input type="radio" name="recordData" id="recordData" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="recordData" id="recordData" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="recordData" id="recordData" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="recordData" id="recordData" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="recordData" id="recordData" value="5" >5</label>
					</div>
				</div>
			</div> -->	
		  
		
			
			<!-- 
			<div class="col-lg-4 col-lg-offset-2">
				Business Analysis
				</div>
				
				<div class="col-lg-4 ">
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessAnalysis" id="businessAnalysis" value="5" >5</label>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="col-lg-4 col-lg-offset-2">
				Business Case
				</div>
				
				<div class="col-lg-4">
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="1" >1</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="2" >2</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="3" checked>3</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="4" >4</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="businessCase" id="businessCase" value="5" >5</label>
					</div>
				</div>
			</div>
			-->
			
