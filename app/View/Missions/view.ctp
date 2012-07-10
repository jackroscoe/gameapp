<div class="mission-view p20 relative">
	<?php foreach($missions as $mission) { ?>
		<div class="island col col-280">
			<h2><?php echo $mission['title']; ?></h2>
		</div>
		<div class="island col-575">
			<p><?php echo nl2br($mission['description']); ?></p>
		</div>
		<?php echo $this->Html->link('Edit Mission', '/missions/edit_view/' . $mission['id'] . '/' . str_replace(' ', '-', strtolower($mission['title'])), array('class' => 'open-mission edit-mission', 'data-id' => $mission['id'])); ?>
	<?php } ?>
</div>