<?php

	class Test extends Controller {

		function __construct() {

			parent::__construct();

			$this->view->render('test/index');

		}

		public function index($arg = false) {

			require 'models/test_model.php';
			$model = new Test_Model();

		}

	}

?>