<div class="island p20">
	<h1>Choose your mode</h1>
	<p>Pick 'Manage' if you wish to add, edit or remove games from the system. If you wish to login to track and update your own progress, click 'Log In'.</p>
	<ul class="choose-mode">
		<li><a href="<?php echo $this->Html->url('/games', true); ?>">Manage Games</a></li>
		<li><a href="<?php echo $this->Html->url('/users/profile', true); ?>">Check Your Progress</a></li>
	</ul>
</div>