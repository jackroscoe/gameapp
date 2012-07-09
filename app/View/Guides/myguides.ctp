<ul class="guides">
	<?php foreach($guides as $guide) { ?>
		<li><?php
			echo $this->Html->link($guide['Guide']['title'], '/games/view/' . $guide['Guide']['id'] . '/' . str_replace(' ', '-', strtolower($guide['Guide']['title'])), array('class' => 'listing', 'data-id' => $guide['Guide']['id'], 'data-parent-id' => $games['Game']['id']));
			echo $this->Html->link('Delete Guide', '/', array('class' => 'delete'));
			echo $this->Html->link('Delete Guide', '/guides/delete/' . $guide['Guide']['id'], array('class' => 'delete confirm-delete')); ?>
		</li><?php
	}
	if(count($guides) == 0) { ?>
		<li>You have not added any guides for this game yet.</li><?php
	} ?>
</ul>