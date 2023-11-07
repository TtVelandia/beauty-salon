<?php 
	
	class AdminController {

		public function __construct(){}

		public function bookingSubmit(){
			if (isset($_SESSION['id_user']) && $_SESSION['id_user'] !== null && !empty($_SESSION['id_user'])) {
				$this->runBookingSubmit();
			} else {
				require_once('views/login/index.php');
			}		
		}

		private function runBookingSubmit() {
			if (isset($_GET['id']) && !empty($_GET['id'])) {
				$id= $_GET['id'];
				$state= "SUBMIT";
				$success = Booking::updateStateById($id, $state);
				if ($success) {
					$this->successSubmit();
				} else {
					$this->errorSubmit();
				}
			} else {
				$this->errorSubmit();
			}
		}

		private function successSubmit() {
			$showSuccessSubmit = true;
			$bookings = Booking::getAll();
			require_once('views/admin/index.php');
		}

		private function errorSubmit() {
			$showSuccessSubmit = false;
			$bookings = Booking::getAll();
			require_once('views/admin/index.php');
		}
	}	
?>