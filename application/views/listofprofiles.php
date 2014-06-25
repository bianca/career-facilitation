<? include "header.php"; ?>

<div class="row_fluid">
	<h1><?=$site_title; ?>
</div>


<?
	if (isset($hidden) ==true) {
	 foreach ($hidden as $k => $v) { 
		echo '<input type="hidden" name="'.$k.'" id="'.$k.'" value="'.$v.'" />';
 	 }
 	}
	if ($profiles != false) {
	 foreach ($profiles as $profile) { 
		include "profilecard.php";
 	 }
 	} else {
 		echo "Nope, nobody...";
 	}
 ?>

<script type="text/javascript">
	$(".match").click(function () {
		var btn = $(this);
		var data = {};
		data['mentor_id'] = (($("#mentor_id")).length != 0 ) ? $("#mentor_id").attr("value") : btn.attr("value");
		data['mentee_id'] = (($("#mentee_id")).length != 0 ) ? $("#mentee_id").attr("value") : btn.attr("value");
		console.log(data);
		$.ajax({
			url : "/admin/match",
			data : data,
			type : "POST",
			success : function (data) {
				console.log(data);
				if (data == "true") {
				btn.text("Matched!");
				btn.addClass("btn-info");
				$(".match").prop('disabled', true);
				window.location.replace("/admin/status");
				}
			}
		});

	});

</script>
<? include "footer.php"; ?>

