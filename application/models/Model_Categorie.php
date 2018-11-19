<?php

class Model_Categorie extends CI_Model
{
    public function getAllCategorie()
    {

    // On ecrit notre requete SQL
    $query = $this->db->query ("select idCateg, nomCateg from categorie");
    return $query->result();

}
    }

?>