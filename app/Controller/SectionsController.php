<?php
	class SectionsController extends AppController {
		var $uses = array('Section', 'Guide');
		
		function mysections($guide_id) {	
			$this->set('guides', $this->Guide->findById($guide_id));
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
		
		function delete($id) {
			$this->Section->delete($id);
			exit;
		}
	}