<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model ("Model_Categorie");
        $data["lesCateg"]= $this ->Model_Categorie->getAllCategorie();
        $this->load->view ("index",$data);
    }

    public function AfficherLesJeux()
    {
       // $this->load->model("Model_Jeux");
       // $data["LesJeux"]=$this->Model_Jeux->getAllJeuxByIdCateg($_GET['nomCateg']);
       // $this->load->view("view_Jeux",$data);
        $id = $this->uri->segment(3);
        $this->load->model("Model_Jeux");
        $data['LesJeux']= $this->Model_Jeux->getAllJeuxByIdCateg($id);
        $this->load->view("view_jeux",$data);
 }
}

?>