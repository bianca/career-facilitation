<? include "header.php"; ?>

<div class="container">
	<div class="panel panel-warning">
		<div class="panel-heading">Welcome to <strong>THE MATCHER</strong>!</div>
	
		<form action="/dashboard/skillsInventory" method="post">
			<p>	Here we will see who matches you for a mentor or mentee.</p>
			<p>Honest answer guys, we want to find you the missing lid of your career pan! Click it away! More than one area can be selected.</p>
			</br>
		  <fieldset>
			
			<!--area of study-->
			<div class="row-fluid">
				<p class="lead">Area of Study Expertise</p>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_accFinance" value="Account & Finance">Account & Finance</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_arch" value="Architecture">Architecture</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_artsHist" value="Arts & History">Arts & History</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_eco" value="Economics">Economics</label>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_engi" value="Engineering">Engineering</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_enviro" value="Environmental Studies">Environmental Studies</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_lang" value="Language">Language</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_law" value="Law">Law</label>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_math" value="Mathematics">Mathematics</label>
					</div>	
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_media" value="Media">Media </label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_med" value="Medical Studies">Medical Studies</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_religion" value="Religious Studies">Religious Studies</label>
					</div>	
				</div>
				<div class="col-lg-3">
					<div class="checkbox">
						<label><input type="checkbox" name="expertise_sci" value="Sciences">Sciences</label>
					</div>
						<label><input class="other" type="text" name="text1" value="" placeholder="Other" /></label>
						<label><input class="other" type="text" name="text2" value="" placeholder="Other" /></label>
						<label><input class="other" type="text" name="text3"  value="" placeholder="Other" /></label>
						<script type="text/javascript">
							$(".other").keyup(function() {
								var r = new RegExp(" ", "g");
								$(this).attr("name", "expertise_"+($(this).val()).toString().replace(r,"_"));
								$(this).attr("id", "expertise_"+($(this).val()).toString().replace(r,"_"));
							});
						</script>
				</div>
			</div>
			<!--area of study ends-->
			
			<!--skills-->
			<div class="row-fluid">
				<p class="lead">Skills</p>
			</div>
			<div class="row-fluid">
				<p>Rate your skill level below for each skill ranging from 1 (novice) to 5 (expert). Please check the checkbox ( <input type="checkbox" /> ) if that skill is a key area that you would like to work on through CSCI. We'll use this to find mentors that are highly rated in the fields you care about. Thanks!
				</p>
			</div>
			</br>		
				

			<? 

			$skills = array(
				"Hard Skills" => array(
					"Designing and Maintaining Databases",
					"Business Analysis",
					"Project Management",
					"Programming and Computer Science",
					"Business Cases",
					"Reporting and Administration"
					),
				"Soft Skills" => array(
					"Meeting Deadlines",
					"Supervising Others",
					"Managing People",
					"Managing Projects",
					"Public Speaking",
					"Planning Daily Work or Special Events",
					"Managing Money and Budgets",
					"Analyzing Data with Auditing and Maintaining Records",
					"Inventorying",
					"Researching and Writing Reports",
					"Arranging meetings or social functions",
					"Being Competitive When Necessary",
					"Making Decisions",
					"Setting Goals for a Team",
					"Settling Disagreements",
					"Showing Self-confidence",
					"Helping Care for Others",
					"Conflict Resolution",
					"Negotiation",
					"Graphic and Illustration Design",
					"Internet and Library Research"
					),
				"Mentorship Style (Your priorities)" => array(
					"Supportive - positive and relaxed",
					"Supportive - but a bit strict",
					"Somewhere in between"
					)
				);

			foreach ($skills as $skill_block=>$sk) { ?>
				<div class="row-fluid ">
					<p class="lead"><?=$skill_block; ?></p>
				</div>			
				<div class="row-fluid">

				<? foreach ($sk as $s){
					$sv = strtolower(str_replace(" ", "_",$s)); ?>
					<p><?=$s; ?></p>
					<div class="radio-inline">
						<input type="hidden" name="<?=$sv; ?>_kls" />
						<label><input type="checkbox" name="<?=$sv; ?>_kls" id="<?=$sv; ?>_kls" /></label>
					</div>
					<?
					for ($i = 1; $i < 6; $i++) { ?>
						<div class="radio-inline">
							<label><input type="radio" name="skill_<?=$sv; ?>" id="skill_<?=$sv; ?>" value="<?=$i; ?>"><?=$i; ?></label>
						</div>
					<? }
				} ?>
				</div>
			<? } ?>

				
			<div class="row_fluid">
					<button type="submit" class="btn btn-default">Submit</button>
			</div>
		  </fieldset>	
	  	</form>
	</div> <!--close panel-->
</div> <!--close container-->
<? include "footer.php"; ?>
