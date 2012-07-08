<?php foreach($guides as $guide) { ?>
	<li><?php
		echo $this->Html->link($guide['Guide']['title'], '/games/view/' . $guide['Guide']['id'] . '/' . str_replace(' ', '-', strtolower($guide['Guide']['title']))); ?>
	</li><?php
} ?>