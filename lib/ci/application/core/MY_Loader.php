<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {
		
	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Default function
	 */
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('include/header', $vars, $return);
        $content  = $this->view('include/menu', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('include/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
}