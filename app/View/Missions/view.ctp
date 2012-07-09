<div class="mission-view p20 mb20">
	<?php foreach($missions as $mission) { ?>
		<div class="island col col-280">
			<h2><?php echo $mission['title']; ?></h2>
		</div>
		<div class="island col-575">
			<p><?php echo nl2br($mission['description']); ?></p>
		</div>
	<?php } ?>
</div>