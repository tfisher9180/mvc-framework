<?php

	class Bootstrap {

		function __construct() {

			// get the URL and parse it
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);
			
			// check if the controller exists
			$file = 'controllers/' . $url[0] . '.php';
			if (file_exists($file)) {
				// requested controller exists
				require $file;
			} else {
				// requested controller does not exist
				require 'controllers/error.php';
				$controller = new Error();

				// stops rest of script from executing
				return false;
			}

			$controller = new $url[0];

			if (isset($url[2])) {

				$controller->{$url[1]}($url[2]);

			} elseif (isset($url[1])) {

				$controller->{$url[1]}();

			}

		}

	}

?>