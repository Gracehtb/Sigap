<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Musaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("musaha_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["musaha"] = $this->musaha_model->getAll();
        $this->load->view("member/musaha/list", $data);
    }

    public function add()
    {
        $usaha = $this->musaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("member/musaha/new_form");
    }

    public function edit($id_usaha = null)
    {
        if (!isset($id_usaha)) redirect('member/musaha');
       
        $usaha = $this->musaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->update();
            $this->session->set_flashdata('success', 'berita Berhasil diupdate');
        }

        $data["musaha"] = $usaha->getById($id_usaha);
        if (!$data["musaha"]) show_404();
        
        $this->load->view("member/musaha/edit_form", $data);
    }

    public function delete($id_usaha=null)
    {
        if (!isset($id_usaha)) show_404();
        
        if ($this->musaha_model->delete($id_usaha)) {
            redirect(site_url('member/musaha'));
        }
    }
}