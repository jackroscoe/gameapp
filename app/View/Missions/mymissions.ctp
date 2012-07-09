<ul class="missions">
	<?php foreach($missions as $mission) { ?>
		<li><?php
			echo $this->Html->link($mission['Mission']['title'], '/missions/view/' . $mission['Mission']['id'] . '/' . str_replace(' ', '-', strtolower($mission['Mission']['title'])), array('data-id' => $mission['Mission']['id'])); ?>
		</li><?php
	} ?>
</ul>