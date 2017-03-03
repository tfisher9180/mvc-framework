<?php

	class Error extends Controller {

		function __construct() {

			parent::__construct();

			// $view = new View();
			// $view->msg = 'This page does not exist';
			// $view->render('error/index');
			// file is required in the View therefore exists in the view

			// since the view file is rendered by the instance of the view controller -
			// properties can be accessed from within the view by using $this->{property}

			$this->view->msg = 'This page does not exist';
			$this->view->render('error/index');

		}

	}

?>