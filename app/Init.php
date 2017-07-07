<?php

namespace MWD\ExampleCPT;

// Set up plugin class
class Init {

	function __construct() {

    /**
	   * Includes
	   */
	 		$includes = [
	 		  'app/types/type-example.php',   // Post Type
	 		];

      // Require each file in the $includes array
	 		foreach ($includes as $file) {
	 		  require_once EXAMPLECPT_PLUGIN_DIR . $file;
	 		}

      // Unset $file for best practices.
	 		unset($file);
	}

}
