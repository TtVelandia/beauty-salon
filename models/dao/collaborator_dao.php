<?php

trait CollaboratorDao {

    public static function getAll() {
        $list = [];
        $db=Db::getConnect();

        $SQL = "
            SELECT collab_id, collab_name, collab_image
            FROM collaborator
        ";

        $sql=$db->query($SQL);

        foreach ($sql->fetchAll() as $value) {
            $collaborator = new Collaborator();

            $collaborator->id =  $value['collab_id'];
            $collaborator->name =  $value['collab_name'];
            $collaborator->image =  $value['collab_image'];

            $list[]= $collaborator;
        }
        return $list;
    }
}

?>