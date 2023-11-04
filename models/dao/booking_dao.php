<?php

trait BookingDao {

    public static function save($booking){		

		$db=Db::getConnect();
        $isSuccess = true;
		
		try {
			
			$db->beginTransaction();	

			$SQL = "
                INSERT INTO booking (book_name, book_celphone, book_date, book_hour, book_quantity, book_comment, servi_id) 
                VALUES (:name, :celphone, :date, :hour, :quantity, :comment, :service)					   
			";
			
			$select = $db->prepare($SQL);
			$select->bindValue('name', $booking->name);
			$select->bindValue('celphone', $booking->celphone);
			$select->bindValue('date', $booking->date);
			$select->bindValue('hour', $booking->hour);	
			$select->bindValue('quantity', $booking->quantity);	
			$select->bindValue('comment', $booking->comment);	
			$select->bindValue('service', $booking->service->id);	
			$select->execute();

			$db->commit();
		} catch (Exception $e) {
			$db->rollback();
            $isSuccess = false;
		}
        
        return $isSuccess;
	}

	public static function getAll() {
        $list = [];
        $db=Db::getConnect();

        $SQL = "
			SELECT b.book_id, b.book_name, b.book_celphone, b.book_date, b.book_hour, b.book_quantity, b.book_comment, s.servi_id, s.servi_name
			FROM booking as b
			INNER JOIN service as s ON s.servi_id = b.servi_id
        ";

        $sql=$db->query($SQL);

        foreach ($sql->fetchAll() as $value) {
            $booking = new Booking();

			$service = new Service();
            $service->id =  $value['servi_id'];
            $service->name =  $value['servi_name'];

            $booking->id = $value['book_id'];
            $booking->name = $value['book_name'];
            $booking->celphone = $value['book_celphone'];
            $booking->date = $value['book_date'];
            $booking->hour = $value['book_hour'];
            $booking->quantity = $value['book_quantity'];
            $booking->comment = $value['book_comment'];
            $booking->service = $service;

            $list[]= $booking;
        }
        return $list;
    }
}

?>