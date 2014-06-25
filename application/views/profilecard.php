<div class="row_fluid bs-callout bs-callout-danger">
<div class="panel panel-default">
  <div class="panel-heading">
  <?=$profile['first_name']." ".$profile['last_name']; ?> - 
  <?=$profile['title']; ?>
  </div>
  <div class="panel-body">  
		<div class="col-lg-2">
				<img src="<?=$profile['photo_url']; ?>" />
				<br />
				<a href="<?=$profile['linkedin_url']; ?>">Visit <?=$profile['first_name']; ?>'s LinkedIn Profile</a>
		</div>
		<div class="col-lg-6">
			<p>
				<?=$profile['description']; ?>
			</p>
		</div>
		<div class="col-lg-2">
		<?
			foreach ($profile as $k=>$v) {
				if (in_array($k, array("id","description","title","first_name","last_name","photo_url","linkedin_url")) == false) {
					echo "<div>".str_replace("_"," ", $k)." : ".$v."</div>";
				}
			}

			if (isset($profile_insert) == true) {
				include $profile_insert.".php";
			}			
	 	?>

		</div>
	</div>
   </div>
</div>

<!--
<div class="row_fluid bs-callout bs-callout-danger">
	<div class="span2">
			<img src="<?=$profile->photo_url; ?>" />
			<br />
			<a href="<?=$profile->linkedin_url; ?>">Visit <?=$profile->first_name; ?>'s LinkedIn Profile</a>
	</div>
	<div class="span6">
		<h3><?=$profile->first_name." ".$profile->last_name; ?></h3>
		<h2><?=$profile->title; ?></h2>
		<p>
			<?=$profile->description; ?>
		</p>
	</div>
</div>
-->