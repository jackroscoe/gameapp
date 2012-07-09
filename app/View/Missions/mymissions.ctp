<ul class="missions">
	<?php foreach($missions as $mission) { ?>
		<li><?php
			echo $this->Html->link($mission['Mission']['title'], '/missions/view/' . $mission['Mission']['id'] . '/' . str_replace(' ', '-', strtolower($mission['Mission']['title'])), array('class' => 'listing', 'data-id' => $mission['Mission']['id'], 'data-parent-id' => $sections['Section']['id']));
			echo $this->Html->link('Delete Mission', '/missions/delete/' . $mission['Mission']['id'], array('class' => 'delete')); ?>
		</li><?php
	}
	if(count($missions) == 0) { ?>
		<li>You have not added any missions for this section yet.</li><?php
	} ?>
</ul>