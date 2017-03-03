<?php

	class View {

		// we create an instance of this when we call parent::__construct() in a controller
		// the new instance can have a msg property set 
		// when that instance calls its render method, the view

		function __construct() {



		}

		public function render($name) {

			require 'views/' . $name . '.php';

		}

	}

?>