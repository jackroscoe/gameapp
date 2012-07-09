<ul class="guides">
	<?php foreach($guides as $guide) { ?>
		<li><?php
			echo $this->Html->link($guide['Guide']['title'], '/games/view/' . $guide['Guide']['id'] . '/' . str_replace(' ', '-', strtolower($guide['Guide']['title'])), array('class' => 'listing', 'data-id' => $guide['Guide']['id'], 'data-parent-id' => $games['Game']['id']));
			echo $this->Html->link('Delete Guide', '/guides/delete/' . $guide['Guide']['id'], array('class' => 'delete')); ?>
		</li><?php
	} ?>
</ul>