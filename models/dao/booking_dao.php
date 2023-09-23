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
}

?>