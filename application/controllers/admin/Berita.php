<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
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
        $data["berita"] = $this->berita_model->getAll();
        $this->load->view("admin/berita/list", $data);
    }

    public function add()
    {
        $berita = $this->berita_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/berita/new_form");
    }

    public function edit($id_berita = null)
    {
        if (!isset($id_berita)) redirect('admin/berita');
       
        $berita = $this->berita_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->update();
            $this->session->set_flashdata('success', 'berita Berhasil diupdate');
        }

        $data["berita"] = $berita->getById($id_berita);
        if (!$data["berita"]) show_404();
        
        $this->load->view("admin/berita/edit_form", $data);
    }

    public function delete($id_berita=null)
    {
        if (!isset($id_berita)) show_404();
        
        if ($this->berita_model->delete($id_berita)) {
            redirect(site_url('admin/berita'));
        }
    }
}