<?php 
	
	class LoginController {

		public function __construct(){}

		public function index(){
			require_once('views/login/index.php');
		}

		public function signIn(){

			$nickname= isset($_POST['nickname']) ? $_POST['nickname'] : "" ;
			$password= isset($_POST['password']) ? $_POST['password'] : "" ;

			$user=User::validate($nickname, $password);
			
			if ($user !== null) {
				$this->sessionStart($user);

				/*$listaCategoria = Categoria::listarCategorias();
				$listaProducto=Producto::listaProductosInicio();
				$listaCarrusel = Carrusel::listaCarrusel();*/
				require_once('views/admin/index.php');
			} else {
				require_once('views/login/index.php');
			}
		}

		public function signOut(){
			$this->sessionDestroy();
			$this->index();
		}
		
		public function error(){
			require_once('views/error/index.php');
		} 

		private function sessionStart($user) {
			$_SESSION['id_user'] = $user->id;
			$_SESSION['nickname_user'] = $user->nickname;
		}

		private function sessionDestroy() {
			session_unset();
			session_destroy();
		}
	}	
?>