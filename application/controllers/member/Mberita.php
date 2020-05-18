<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mberita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("berita_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["mberita"] = $this->berita_model->getAll();
        $this->load->view("member/berita/list", $data);
    }
}