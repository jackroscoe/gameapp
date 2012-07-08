<?php
	class GuidesController extends AppController {
		var $uses = array('Game', 'Guide', 'Section', 'Mission');
		
		function index() {
			$this->set('guides', $this->Guide->find('all'));
			
		}
		
		function myguides($user_id, $game_id) {
			$this->set('guides', $this->Guide->find('all', array(
				'conditions' => array(
					'Guide.user_id' => $user_id,
					'Guide.game_id' => $game_id
				)
			)));
			
			$this->layout = 'ajax';
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