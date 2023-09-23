<?php 
	
	class HomeController	{

		public function __construct(){}

		public function index(){
			$services = Service::getAll();
			$serviceByMinPrice = Service::getByMinPrice();
			$collaborators = Collaborator::getAll();
			require_once('views/home/index.php');
		}

		public function booking(){

			$booking = $this->buildBooking($_POST);
			$isBookingSuccess = Booking::save($booking);

			if ($isBookingSuccess) {
				$showSuccess = true;
				$services = Service::getAll();
				$serviceByMinPrice = Service::getByMinPrice();
				$collaborators = Collaborator::getAll();
				require_once('views/home/index.php');
			} else {
				$showError = true;
				//$this->registroFallido();
			}
		}
		
		public function error(){
			require_once('views/error/index.php');
		}
		
		private function buildBooking($post) { 
			
			$booking = new Booking();
			$booking->name = isset($post['name']) ? $post['name'] : "" ;
			$booking->celphone = isset($post['celphone']) ? $post['celphone'] : "" ;
			$booking->date = isset($post['date']) ? $post['date'] : "" ;
			$booking->hour = isset($post['hour']) ? $post['hour'] : "" ;
			$booking->quantity = isset($post['quantity']) ? $post['quantity'] : "" ;
			$booking->comment = isset($post['comment']) ? $post['comment'] : "" ;

			$service = new Service();
			$service->id = isset($post['service']) ? $post['service'] : "" ;
			$booking->service = $service;

			return $booking;
		}
	}	
?>