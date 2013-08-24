 <?php
class Bootstrap
{
	//como parametro se le pasa un objeto del Request
    public static function run(Request $peticion)
    {
    	# $peticion->getControlador();
    	#contiene solo el nombre del controlador
    	#Ej; mvc-poo-fw/dfsdfdf/uuuu, en este caso su valor es dfsdfdf (toma el primero)
    	#en caso no pasarle nada , es decir, mvc-poo-fw, toma el valor index (Request.php)   
    	 	
    	//concatena el nombre del controlador con Controler
    	//ejemplo; nombrecontroladorController
        $controller = $peticion->getControlador() . 'Controller'; 
        
        //ruta completa al archivo controlador dentro de la carpeta controllers
        $rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
        
        echo $rutaControlador;
        exit();

    }
}

?>