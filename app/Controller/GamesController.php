<?php
	class GamesController extends AppController {
		var $uses = array('Game', 'Guide', 'Section', 'Mission');
		
		function index() {
			$this->set('user', $user = $this->Auth->user());
		
			$this->set('games', $this->Game->find('all'));
			$this->set('guides', $this->Guide->find('all', array(
				'conditions' => array(
					'Guide.user_id' => $user['id']
				)
			)));
		}
		
		function add() {
			
		}
	}