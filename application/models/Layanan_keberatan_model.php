<?php defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_keberatan_model extends CI_Model
{
    private $table = 'pengajuan_keberatan';

    public $no_regiskeberatan;
    public $no_pendaftaran;
    public $tujuan_pengguna;
    public $nama;
    public $alamat;
    public $pekerjaan;
    public $no_hp;
    public $name;
    public $alamats;
    public $no_hpn;
    public $kasus;

    public function rules()
    {
        return [
            [
                'field' => 'tujuan_pengguna',
                'label' => 'tujuan_pengguna',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'pekerjaan',
                'rules' => 'required'
            ],
            [
                'field' => 'no_hp',
                'label' => 'no_hp',
                'rules' => 'required'
            ],
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ],
            [
                'field' => 'alamats',
                'label' => 'alamats',
                'rules' => 'required'
            ],
            [
                'field' => 'no_hpn',
                'label' => 'no_hpn',
                'rules' => 'required'
            ],
            [
                'field' => 'kasus',
                'label' => 'kasus',
                'rules' => 'required'
            ]
        ];
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function save()
    {
        $data = array(
            "no_regiskeberatan" => $this->input->post('no_regiskeberatan'),
            "no_pendaftaran" => $this->input->post('no_pendaftaran'),
            "tujuan_pengguna" => $this->input->post('tujuan_pengguna'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "no_hp" => $this->input->post('no_hp'),
            "name" => $this->input->post('name'),
            "alamats" => $this->input->post('alamats'),
            "no_hpn" => $this->input->post('no_hpn'),
            "cara_info" => $this->input->post('cara_info'),
            "kasus" => $this->input->post('kasus')
        );
        return $this->db->insert($this->table, $data);
    }
    private function _uploadImage() {
        
    }
}
