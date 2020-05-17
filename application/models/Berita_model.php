<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = "berita";

    public $id_berita;
    public $judul;
    public $isi;
    public $tgl_terbit;
    public $penulis;
    public $link;

    public function rules(){
        return [
            ['field' => 'id_berita',
            'label'=> 'ID berita',
            'rules' => 'required'],

            ['field' => 'judul',
            'label'=> 'Nama berita',
            'rules' => 'required'],

            ['field' => 'isi',
            'label'=> 'Isi berita',
            'rules' => 'required'],

            ['field' => 'tgl_terbit',
            'label'=> 'Tanggal Terbit berita',
            'rules' => 'date'],

            ['field' => 'penulis',
            'label'=> 'Penulis berita',
            'rules' => 'required'],

            ['field' => 'link',
            'label'=> 'Link atau sumber berita']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_berita)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $id_berita])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id_berita"];
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tgl_terbit = $post["tgl_terbit"];
        $this->penulis = $post["penulis"];
        $this->link = $post["link"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id_berita"];
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tgl_terbit = $post["tgl_terbit"];
        $this->penulis = $post["penulis"];
        $this->link = $post["link"];
        return $this->db->update($this->_table, $this, array('id_berita' => $post['id_berita']));
    }

    public function delete($id_berita)
    {
        return $this->db->delete($this->_table, array("id_berita" => $id_berita));
    }

}