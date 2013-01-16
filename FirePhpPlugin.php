<?php

require_once('FirePhp_ControllerPlugin.php');

class FirePhpPlugin extends Omeka_Plugin_AbstractPlugin
{
	
	public function setUp()
	{
		Zend_Controller_Front::getInstance()->registerPlugin(new FirePhp_ControllerPlugin);
	}
}