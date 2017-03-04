<?php

	class Bootstrap {

		function __construct() {

			// get the URL and parse it
			$url = isset($_GET['url']) ? $_GET['url'] : null;
			$url = rtrim($url, '/');
			$url = explode('/', $url);

			if (empty($url[0])) {
				require 'controllers/test.php';
				$controller = new Test();

				return false;
			}
			
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