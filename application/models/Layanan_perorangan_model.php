<?php defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_perorangan_model extends CI_Model
{
    private $table = 'pengajuan_perorangan';

    public $name;
    public $nik;
    public $alamat;
    public $pekerjaan;
    public $telp;
    public $email;
    public $rincian_info;
    public $tujuan_info;
    public $cara_info;
    public $salinan_info;
    public $image;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'nik',
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
                'field' => 'telp',
                'label' => 'telp',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ],
            [
                'field' => 'rincian_info',
                'label' => 'rincian_info',
                'rules' => 'required'
            ],
            [
                'field' => 'tujuan_info',
                'label' => 'tujuan_info',
                'rules' => 'required'
            ],
            [
                'field' => 'cara_info',
                'label' => 'cara_info',
                'rules' => 'required'
            ],
            [
                'field' => 'salinan_info',
                'label' => 'salinan_info',
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
            "name" => $this->input->post('name'),
            "nik" => $this->input->post('nik'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "telp" => $this->input->post('telp'),
            "email" => $this->input->post('email'),
            "rincian_info" => $this->input->post('rincian_info'),
            "tujuan_info" => $this->input->post('tujuan_info'),
            "cara_info" => $this->input->post('cara_info'),
            "salinan_info" => $this->input->post('salinan_info'),
            "name_file" => $this->input->post('name_file')
        );
        return $this->db->insert($this->table, $data);
    }
    private function _uploadImage() {
        
    }
}
