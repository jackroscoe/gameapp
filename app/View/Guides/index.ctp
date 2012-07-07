<div class="island p20 no-bottom">
	<h1>Game Management</h1>
	<p>Below is a list of games currently in the system. You can add new games using the button below. If you want to manage the missions for a game you can click on it to view more information.</p>
	<p class="italic">NOTE: DELETION OF GAMES IS NOT CURRENTLY AVAILABLE</p>
	<a href="#" class="link">ADD LINK HERE</a>
	<div class="island p20 game-column">
		<h2>My Guides</h2>
		<ul>
			<li><?php
				echo $this->Form->create('Guide');
					echo $this->Form->input('title', array('label' => false));
				echo $this->Form->end('Add'); ?>
			</li>
			<?php foreach($guides as $guide) {
				echo $this->Html->link($guide['Guide']['title'], '/games/view/' . $guide['Guide']['id'] . '/' . str_replace(' ', '-', strtolower($guide['Guide']['title'])));
			} ?>
		</ul>
	</div>
</div>