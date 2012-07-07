<?php
	class GamesController extends AppController {
		function index() {
			$this->set('games', $this->Game->find('all'));
			
		}
	}