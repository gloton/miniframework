<?php
 //echo $_GET["url"];
define('DS', DIRECTORY_SEPARATOR);

/*Ruta raiz de nuestra aplicacion.
 La constante ROOT la vamos a utilizar para hacer la inclusion de archivos que
este dentro del servidor y que vallamos a ocupar en nuestra aplicacion.
*/
define('ROOT', realpath(dirname(__FILE__)) . DS);

//vamos a definir el directorio de las aplicaciones
define('APP_PATH', ROOT . 'application' . DS);

#Config.php
# Aca se colocaran nuestras variables de configuracion
require_once APP_PATH . 'Config.php';

#Request.php
# Recive las peticiones por la url y las va a pasar al Bootstrap.php
require_once APP_PATH . 'Request.php';

#Bootstrap.php
# el bootstrap va a llamar a los controladores ubicados
# dentro de la carpeta controllers
require_once APP_PATH . 'Bootstrap.php';

#Controller.php
# este archivo va a extender a todos los controladores
# de la carpte controllers
# es decir, aca vamos a colocar los metodos usados por todos
# los controladores
require_once APP_PATH . 'Controller.php';

#Model.php'
# Igual que Controller.php
require_once APP_PATH . 'Model.php';

#View.php'
# Igual que Controller.php
require_once APP_PATH . 'View.php';

#Registro.php
# Con esto se va a trabajar con el patron singleton "aun no lo explican"
require_once APP_PATH . 'Registro.php';

$r = new Request();
echo $r->getControlador() . "<br />";
echo $r->getMetodo() . "<pre>";
print_r ($r->getArgs());
 ?>