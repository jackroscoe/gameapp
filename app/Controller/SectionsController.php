<?php
	class SectionsController extends AppController {
		function mysections($guide_id) {			
			$this->set('sections', $this->Section->find('all', array(
				'conditions' => array(
					'Section.guide_id' => $guide_id
				)
			)));
			
			$this->layout = 'ajax';
		}
	
		function add($guide_id, $title) {		
			$this->Section->set(array(
				'guide_id' => $guide_id,
				'title' => $title
			));
			$this->Section->save();
			
			exit;
		}
	}