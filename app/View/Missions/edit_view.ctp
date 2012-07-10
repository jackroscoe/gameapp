<div class="mission-view p20 relative" styel="display: block !important;">
	<?php foreach($missions as $mission) {
			//serialize the form element to submit
		 
			$data = $this->Js->get('#MissionSaveMissionForm')->serializeForm(
				array(
				'isForm' => true,
				'inline' => true)
			);
		 
			// Submit the serialize data on submit click
			$this->Js->get('#MissionSaveMissionForm')->event(
			  'submit',
			  $this->Js->request(
				array('action' => 'save_mission'),
				array(
					'data' => $data,
					'async' => true,
					'dataExpression'=>true,
					'method' => 'POST'
					)
				)
			);
		
			echo $this->Form->create('Mission', array('action' => 'save_mission', 'default' => false));
			echo $this->Form->input('title', array('value' => $mission['title']));
			echo $this->Form->input('description', array('label' => 'Description', 'type' => 'textarea', 'value' => $mission['description']));
			echo $this->Form->input('id', array('type' => 'hidden', 'value' => $mission['id'])); 
			echo $this->Form->end(__('Submit'));
			echo $this->Js->writeBuffer(); // cache the js code generated
			
		echo $this->Html->link('Save Mission', '/missions/save_mission/' . $mission['id'] . '/', array('class' => 'edit-mission save-mission')); ?>
	<?php } ?>
</div>