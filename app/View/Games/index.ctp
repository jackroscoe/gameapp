<div class="island p20 no-bottom">
	<h1>Game Management</h1>
	<p>Below is a list of games currently in the system. You can add new games using the button below. If you want to manage the missions for a game you can click on it to view more information.</p>
	<p class="italic">NOTE: DELETION OF GAMES IS NOT CURRENTLY AVAILABLE</p>
	<a href="#" class="link">ADD LINK HERE</a>
	<?php //$session->check('Auth.User.id') ?>
	<div class="island p20 game-column col-190">
		<h2>Games</h2>
		<ul>
			<?php foreach($games as $game) { ?>
				<li><?php
					echo $this->Html->link($game['Game']['title'], '/games/view/' . $game['Game']['id'] . '/' . str_replace(' ', '-', strtolower($game['Game']['title']))); ?>
				</li><?php
			} ?>
		</ul>
	</div>
	<div class="island p20 game-column col-190">
		<h2>My Guides</h2>
		<ul>
			<li><?php
				echo $this->Form->create('Guide');
					echo $this->Form->input('title', array('label' => false));
				echo $this->Form->end('Add'); ?>
			</li>
			<?php foreach($guides as $guide) { ?>
				<li><?php
					echo $this->Html->link($guide['Guide']['title'], '/games/view/' . $guide['Guide']['id'] . '/' . str_replace(' ', '-', strtolower($guide['Guide']['title']))); ?>
				</li><?php
			} ?>
		</ul>
	</div>
	<div class="island p20 game-column col-190">
		<h2>Sections</h2>
		
	</div>
	<div class="island p20 game-column col-190">
		<h2>Missions</h2>
		
	</div>
</div>