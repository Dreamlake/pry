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
	
	public function search($query = null)
	{
		$this->loadModel('Anuncio');
		$destacados = $this->Anuncio->query("SELECT * FROM anuncio a INNER JOIN modelo m ON m.mod_id = a.mod_id INNER JOIN marca mca ON mca.mca_id = m.mca_id WHERE a.ANU_TIP = 2");
		$this->set('destacados', $destacados);
		sleep(1);
		$this->render('search', 'site');
	}

}
?>