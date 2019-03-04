<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->output->cache(1440);
    }

    public function index()
    {
        $data['title'] = "LCI | HOME";
        $this->load->view('home',$data);
    }

    public function Empresa()
    {
        $data['title'] = "LCI | A Empresa";
        $this->load->view('commons/header',$data);
        $this->load->view('empresa');
        $this->load->view('commons/footer');
    }

    public function Servicos()
    {
        $data['title'] = "LCI | Serviços";
        $this->load->view('commons/header',$data);
        $this->load->view('servicos');
        $this->load->view('commons/footer');
    }
}