<?php



class FirePhp_ControllerPlugin extends Zend_Controller_Plugin_Abstract
{

	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		$writer = new Zend_Log_Writer_Firebug();
		try {
			$bootstrap = Zend_Registry::get('bootstrap');
		} catch (Zend_Exception $e) {
			return;
		}
		if (!($log = $bootstrap->getResource('Logger'))) {
			return;
		}
		$log->addWriter($writer);		
	}
}
