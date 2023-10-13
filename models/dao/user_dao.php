<?php

trait UserDao {

    public static function validate($nickname, $password){

        $user = null;
        $db=Db::getConnect();
        
        $SQL = "        
            SELECT user_id, user_nickname, user_name
            FROM user
            WHERE BINARY user_nickname = :nickname
            AND BINARY user_password = :password 
        ";

		$select=$db->prepare($SQL);
		$select->bindValue('nickname',$nickname);
		$select->bindValue('password',$password);
		$select->execute();
        
        $value=$select->fetch();
        if ($value) {
            
            $user = new User();
            $user->id = $value['user_id'];
            $user->nickname = $value['user_nickname'];
            $user->name = $value['user_name'];
        }
		
		return $user;
    }
}

?>