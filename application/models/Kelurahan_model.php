<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan_model extends CI_Model
{
    private $_table = "kelurahan";

    public $id_kel;
    public $nama_kel;
    public $id_kec;

    public function rules(){
        return [
            ['field' => 'id_kel',
            'label'=> 'ID kelurahan',
            'rules' => 'required'],

            ['field' => 'nama_kel',
            'label'=> 'Nama kelurahan',
            'rules' => 'required'],

            ['field' => 'id_kec',
            'label'=> 'ID Kecamatan',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kel)
    {
        return $this->db->get_where($this->_table, ["id_kel" => $id_kel])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kel = $post["id_kel"];
        $this->nama_kel = $post["nama_kel"];
        $this->id_kec = $post["id_kec"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kel = $post["id_kel"];
        $this->nama_kel = $post["nama_kel"];
        $this->id_kec = $post["id_kec"];
        return $this->db->update($this->_table, $this, array('id_kel' => $post['id_kel']));
    }

    public function delete($id_kel)
    {
        return $this->db->delete($this->_table, array("id_kel" => $id_kel));
    }

}