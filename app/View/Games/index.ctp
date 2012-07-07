<div class="island p20 no-bottom">
	<h1>Game Management</h1>
	<p>Below is a list of games currently in the system. You can add new games using the button below. If you want to manage the missions for a game you can click on it to view more information.</p>
	<p class="italic">NOTE: DELETION OF GAMES IS NOT CURRENTLY AVAILABLE</p>
	<a href="#" class="link">ADD LINK HERE</a>
	<h2>Current Games</h2>
	<ul class="games">
		<?php foreach($games as $game) {
			echo $this->Html->link($game['Game']['title'], '/games/view/' . $game['Game']['id'] . '/' . str_replace(' ', '-', strtolower($game['Game']['title'])));
		} ?>
	</ul>
</div>