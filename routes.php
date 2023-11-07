<?php

	//array con los controladores y sus respectivas acciones
	$controllers= array(
		'home'=>['index', 'booking'],
		'login'=>['index', 'signIn', 'signOut'],
		'admin'=>['bookingSubmit']
	);

	//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
	if (array_key_exists($controller, $controllers)) {
		//verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
		if (in_array($action, $controllers[$controller])) {
			//llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
			call($controller, $action);
		}else{
			call('home', 'error');
		}
	}else{// le pasa el nombre del controlador y la pagina de error
		call('home', 'error');
	}

	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($controller, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('controllers/' . $controller . '_controller.php');
		//crea el controlador
		switch($controller){
			case 'home':
				require_once('models/service.php');
				require_once('models/collaborator.php');
				require_once('models/booking.php');
				$controller= new HomeController();
				break;
			case 'login':		
				require_once('models/user.php');
				require_once('models/booking.php');		
				$controller= new LoginController();
				break;	
			case 'admin':		;
				require_once('models/booking.php');		
				$controller= new AdminController();
				break;		
		}
		//llama a la acción del controlador
		$controller->{$action}();
	}	
?>