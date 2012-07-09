<?php
	class MissionsController extends AppController {
		function mymissions($section_id) {			
			$this->set('missions', $this->Mission->find('all', array(
				'conditions' => array(
					'Mission.section_id' => $section_id
				)
			)));
			
			$this->layout = 'ajax';
		}
	
		function add($section_id, $title) {		
			$this->Mission->set(array(
				'section_id' => $section_id,
				'title' => $title
			));
			$this->Mission->save();
			
			exit;
		}
	}