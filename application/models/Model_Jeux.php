<?php

Class Model_Jeux extends CI_Model
{
    public function getAllJeuxByIdCateg()
    {
        $query = $this->db->query("select idJeux, nomJeux from Jeux where numCateg=".$id);
        return $query-> result();
    
    }
}

?>