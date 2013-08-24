<?php
/*
 * A diferecia de los controladores que todos deben extender 
 * desde un controlador principal. En las vistas no es necesario ya que 
 * estas no son instanciadas, pero si necesitamos un objeto que nos maneje 
 * el trabajo con las vistas, y eso lo va a ser la clase View.
 * 
 * Por ejemplo los controladores son todos instanciados en con
 * $controller = new $controller; en Bootstrap.php
 * */
class View
{
	private $_controlador;
	
	
	public function __construct(Request $peticion) {
		$this->_controlador = $peticion->getControlador();
	}
	# $vista
	#Es el nombre de la vista
	//este metodo es quien nos va a hacer las llamadas a las vistas
	public function renderizar ($vista, $item = false) {
		/*crearemos una carpeta por cada controlador ej; para el controlador
		 * index creamos la carppeta index
		 * este nombre de carpeta (index en este caso)
		 * quedara almacenada en la variable $this->_controlador 	
		 * renderizar ('index') llamaria a 
		 * controllers/indexController.php 
		 * views/index
		 * 
		 */
		$rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.phtml';
		
		//verificamos que exista y sea legible
		if(is_readable($rutaView)) {
			//es el contenido de la vista ej;views/index/index.phtml (depende del controlador)
			include_once $rutaView;
		} else {
			throw new Exception('Error de vista');
		}		
		
	}
	
}
?>