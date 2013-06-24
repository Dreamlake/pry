<?php
class AjaxController extends AppController {
	
	//public $components = array('RequestHandler');
	//public $helpers = array('Js' => array('Jquery'),'Html','Form');

	public function getComunas($query = null) 
	{
		$this->loadModel('Comuna');
		$this->set('comunas', $this->Comuna->find('list', array('conditions' => array('COM_NOM LIKE' => "%$query%"))));
		$this->render('get_comunas', 'ajax');
	}

}
?>