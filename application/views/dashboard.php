<? include "header.php"; ?>

<? include "profilecard.php"; ?>

<? if ($hasSI == false) { ?>
	<div class="row_fluid">
		Thanks for signing up! For your next step, we'd love you to fill out a Skills Inventory. We use skills inventory information to match mentees with mentors, plan workshops, and target assignments and tasks. 
		<div>
			<a href="/dashboard/skillsInventory"><input type="button" class="btn" value="Fill out my first skills inventory &raquo;"  /></a>
		</div>
	</div>
<? } ?>
<? if ($admin == true) { ?>
	<a class="btn btn-primary" href="/admin">Admin Page </a>
<? } ?>
<? if (count($goals) < 0) { ?>
	<div class="row_fluid">
		You haven't commited to any goals yet. Do you want to commit to one of these?
		<? foreach ($all_goals as $g) {
				
			} ?>		
	</div>
<? } ?>

<? include "footer.php"; ?>

