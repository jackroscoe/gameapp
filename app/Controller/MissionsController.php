<?php
	class MissionsController extends AppController {
		var $uses = array('Mission', 'Section');
		
		function view($mission_id) {
			$this->set('missions', $this->Mission->findById($mission_id));
			
			$this->layout = 'ajax';
		}
		
		function edit_view($mission_id) {
			$this->helpers[] = 'Js';
			$this->set('missions', $this->Mission->findById($mission_id));
			
			$this->layout = 'ajax';
		}
		
		function save_mission() {
			if(!empty($this->data)) {
				if($this->Mission->save($this->data)) {
					$this->Session->setFlash("Mission Saved");
					exit;
				}
			}
			
			$this->layout = 'ajax';
		}
		
		function mymissions($section_id) {			
			$this->set('sections', $this->Section->findById($section_id));
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
		
		function delete($id) {
			$this->Mission->delete($id);
			exit;
		}
	}