<?php
	class GuidesController extends AppController {
		var $uses = array('Game', 'Guide', 'Section', 'Mission');
		
		function index() {
			$this->set('guides', $this->Guide->find('all'));
			
		}
		
		function myguides($game_id) {
			$user = $this->Auth->user();
			$user_id = $user['id'];
			
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
	
		function add($game_id, $title) {
			$user = $this->Auth->user();
			$user_id = $user['id'];
			
			$this->Guide->set(array(
				'user_id' => $user_id,
				'game_id' => $game_id,
				'title' => $title
			));
			$this->Guide->save();
			
			exit;
		}
		
		function delete($id) {
			
		}
	}