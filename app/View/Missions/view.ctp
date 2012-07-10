<div class="mission-view p20 col-649 relative">
	<?php foreach($missions as $mission) { ?>
		<div class="col-649">
			<h2><?php echo $mission['title']; ?></h2>
			<div class="scroll description">
				<p><?php echo nl2br($mission['description']); ?></p>
			</div>
		</div>
		<?php echo $this->Html->link('Edit Mission', '/missions/edit_view/' . $mission['id'] . '/' . str_replace(' ', '-', strtolower($mission['title'])), array('class' => 'open-mission edit-mission', 'data-id' => $mission['id'])); ?>
	<?php } ?>
</div>