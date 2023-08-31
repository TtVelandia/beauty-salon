<?php

trait ServiceDao {

    public static function getAll() {
        $list = [];
        $db=Db::getConnect();

        $SQL = "
            SELECT servi_id, servi_name, servi_price, servi_image
            FROM service
        ";

        $sql=$db->query($SQL);

        foreach ($sql->fetchAll() as $value) {
            $service = new Service();

            $service->id =  $value['servi_id'];
            $service->name =  $value['servi_name'];
            $service->price =  $value['servi_price'];
            $service->image =  $value['servi_image'];

            $list[]= $service;
        }
        return $list;
    }
}

?>