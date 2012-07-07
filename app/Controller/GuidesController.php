<?php
	class GuidesController extends AppController {
		var $uses = array('Game', 'Guide', 'Section', 'Mission');
		
		function index() {
			$this->set('guides', $this->Guide->find('all'));
			
		}
		
		function autocomplete() {
			$this->set('games', $this->Game->find('all', array(
				'conditions' => array(
					'Game.title LIKE' => $this->data['Guide']['title'].'%'
				),
				'fields' => array('title')
			)));
			$this->layout = 'ajax';
		}
	
		function add() {
			
		}
		
		function delete($id) {
			
		}
	}