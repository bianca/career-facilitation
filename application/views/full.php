<? include "header.php"; ?>

<div class="row_fluid">
	<h1><?=$site_title; ?>
</div>
<div class="row_fluid">
	<table class="table">
		<tr>
		<th> Member </th> 
		<th> Mentor </th>
		<th> Mentee </th>
		</tr>
<?
	foreach($list as $p) {
		echo "<tr>";
		echo "<td>".$p['user_first_name']." ".$p['user_last_name']."</td>";

		echo "<td>";
		if ($p['mentor_id'] == null) {
			echo '<a class="btn btn-primary" href="/admin/possibleMentors/'.$p['user_id'].'">Match</a>';
		} else {
			echo $p['mentor_first_name']." ".$p['mentor_last_name'].'	 &#09; <a href="/admin/end/'.$p['mentor_mentorship_id'].'">( End )</button>';
		}
		echo "</td>";
		echo "<td>";
		if ($p['mentee_id'] == null) {
			echo '<a class="btn btn-primary" href="/admin/possibleMentees/'.$p['user_id'].'">Match</a>';
		} else {
			echo $p['mentee_first_name']." ".$p['mentee_last_name'].'	 &#09; <a href="/admin/end/'.$p['mentee_mentorship_id'].'">( End )</button>';
		}
		echo "</td>";
		echo "</tr>";
	}
?>
</table>
</div>
<? include "footer.php"; ?>

