<?php 
	
	class HomeController	{

		public function __construct(){}

		public function index(){
			$services = Service::getAll();
			$serviceByMinPrice = Service::getByMinPrice();
			$collaborators = Collaborator::getAll();
			require_once('views/home/index.php');
		}
		
		public function error(){
			require_once('views/error/index.php');
		} 
	}	
?>