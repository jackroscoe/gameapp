<?php
	class GamesController extends AppController {
		var $uses = array('Game', 'Guide', 'Section', 'Mission');
		
		function index() {
			$this->set('user', $user = $this->Auth->user());
		
			$this->set('games', $this->Game->find('all'));
		}
		
		function add() {
			
		}
	}