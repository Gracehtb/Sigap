<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adusaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("adusaha_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["adusaha"] = $this->adusaha_model->getAll();
        $this->load->view("admin/adusaha/list", $data);
    }

    public function add()
    {
        $usaha = $this->adusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/adusaha/new_form");
    }

    public function edit($id_usaha = null)
    {
        if (!isset($id_usaha)) redirect('admin/adusaha');
       
        $usaha = $this->adusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->update();
            $this->session->set_flashdata('success', 'berita Berhasil diupdate');
        }

        $data["adusaha"] = $usaha->getById($id_usaha);
        if (!$data["adusaha"]) show_404();
        
        $this->load->view("admin/adusaha/edit_form", $data);
    }

    public function delete($id_usaha=null)
    {
        if (!isset($id_usaha)) show_404();
        
        if ($this->adusaha_model->delete($id_usaha)) {
            redirect(site_url('admin/adusaha'));
        }
    }
}