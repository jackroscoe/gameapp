<ul class="sections">
	<?php foreach($sections as $section) { ?>
		<li><?php
			echo $this->Html->link($section['Section']['title'], '/sections/view/' . $section['Section']['id'] . '/' . str_replace(' ', '-', strtolower($section['Section']['title'])), array('class' => 'listing', 'data-id' => $section['Section']['id'], 'data-parent-id' => $guides['Guide']['id']));
			echo $this->Html->link('Delete Section', '/', array('class' => 'delete'));
			echo $this->Html->link('Delete Section', '/sections/delete/' . $section['Section']['id'], array('class' => 'delete confirm-delete')); ?>
		</li><?php
	}
	if(count($sections) == 0) { ?>
		<li>You have not added any sections for this guide yet.</li><?php
	} ?>
</ul>