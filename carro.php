<?php
class carro extends CI_Controller{

    public function index(){

        $this->load->model("carro_model");
        $lista = $this->carro_model->BuscarCarro();
        $dados = array("carro" => $lista);
        $this->load->view('carro/index', $dados);

       

    }

}