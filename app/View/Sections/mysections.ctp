<ul class="sections">
	<?php foreach($sections as $section) { ?>
		<li><?php
			echo $this->Html->link($section['Section']['title'], '/sections/view/' . $section['Section']['id'] . '/' . str_replace(' ', '-', strtolower($section['Section']['title'])), array('data-id' => $section['Section']['id'])); ?>
		</li><?php
	} ?>
</ul>