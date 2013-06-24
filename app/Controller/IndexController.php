<?php
class IndexController extends AppController {
	
	public $components = array('RequestHandler');
	public $helpers = array('Js' => array('Jquery'),'Html','Form');

	public function index() 
	{
		//$x = $this->xval();
		//$this->set('x', $x);
		$this->set('title_for_layout', 'Vendomiauto.cl - Autos nuevos y usados a la venta.');
		$this->render('index', 'site');
	}
	
	public function search() 
	{
		$this->loadModel('Anuncio');
		$destacados = $this->Anuncio->query("SELECT * FROM anuncio a INNER JOIN modelo m ON m.mod_id = a.mod_id INNER JOIN marca mca ON mca.mca_id = m.mca_id WHERE a.ANU_TIP = 2");
		$this->set('destacados', $destacados);
		$this->set('title_for_layout', 'Compramiauto.cl - Autos nuevos y usados a la venta.');
		$this->render('search', 'site');
	}
	
	public function crearAnuncio()
	{
		$this->loadModel('Comuna');
		$this->loadModel('Modelo');
		$this->set('comunas', $this->Comuna->find('list'));
		$this->set('modelos', $this->Modelo->find('list'));
		$this->render('crearAnuncio', 'site');
	}

}
?>