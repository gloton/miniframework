<?php
/*jagl - al extender esta clase con la clase Controller, obliga a la clase 
indexController a incluir la funcion index*/

//si no se envia un metodo ejecutara esta funcion index
class indexController extends Controller
{
	
	public function __construct() {
		/*de esta forma tenemos disponible el objeto View, 
		 * a traves de la variable $this->_view
		 * */
		parent::__construct();
	}
	
	public function index()
	{
		//echo "Hola desde el indexController...";
		$this->_view->renderizar('index');
	}
	public function hola() {
		echo "Hola jorge";
	}
}

?>