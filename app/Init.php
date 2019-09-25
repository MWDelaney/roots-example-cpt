<?php

namespace MWD\ExampleCPT;

// Set up plugin class
class Init {

  function __construct() {

    // Include all post types
    foreach (glob(EXAMPLECPT_PLUGIN_DIR . "app/types/*.php") as $filename) {
      include $filename;
    }
  }
}
