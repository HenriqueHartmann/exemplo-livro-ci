<?php

class Contato extends CI_Controller
{
    public function TrabalheConosco()
    {
        $data['title'] = "LCI | Trabalhe Conosco";
        $this->load->view('commons/header',$data);
        $this->load->view('trabalhe-conosco');
        $this->load->view('commons/footer');
    }

    public function FaleConosco()
    {
        $data['title'] = "LCI | Fale Conosco";
        $this->load->view('commons/header',$data);
        $this->load->view('fale-conosco');
        $this->load->view('commons/footer');
    }
}