<?php defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_pengaduan_model extends CI_Model
{
    private $table = 'pengajuan_pengaduan';

    public $nama;
    public $jenis_kelamin;
    public $alamat;
    public $tanda_pengenal;
    public $no_tp;
    public $no_hp;
    public $faximile;
    public $email;
    public $name;
    public $instansi;
    public $alamats;
    public $no_hpn;
    public $faximiles;
    public $emails;
    public $kronologi;
    public $waktu;
    public $identitas_pelapor;
    public $bukti;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'jenis_kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'tanda_pengenal',
                'label' => 'tanda_pengenal',
                'rules' => 'required'
            ],
            [
                'field' => 'no_tp',
                'label' => 'no_tp',
                'rules' => 'required'
            ],
            [
                'field' => 'no_hp',
                'label' => 'no_hp',
                'rules' => 'required'
            ],
            [
                'field' => 'faximile',
                'label' => 'faximile',
                'rules' => 'required'
            ],
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ],
            [
                'field' => 'instansi',
                'label' => 'instansi',
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
                'field' => 'faximiles',
                'label' => 'faximiles',
                'rules' => 'required'
            ],
            [
                'field' => 'emails',
                'label' => 'emails',
                'rules' => 'required'
            ],
            [
                'field' => 'kronologi',
                'label' => 'kronologi',
                'rules' => 'required'
            ],
            [
                'field' => 'waktu',
                'label' => 'waktu',
                'rules' => 'required'
            ],
            [
                'field' => 'identitas_pelapor',
                'label' => 'identitas_pelapor',
                'rules' => 'required'
            ],
            [
                'field' => 'bukti',
                'label' => 'bukti',
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
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "alamat" => $this->input->post('alamat'),
            "tanda_pengenal" => $this->input->post('tanda_pengenal'),
            "no_tp" => $this->input->post('no_tp'),
            "no_hp" => $this->input->post('no_hp'),
            "faximile" => $this->input->post('faximile'),
            "email" => $this->input->post('email'),
            "name" => $this->input->post('name'),
            "instansi" => $this->input->post('instansi'),
            "alamats" => $this->input->post('alamats'),
            "no_hpn" => $this->input->post('no_hpn'),
            "faximiles" => $this->input->post('faximiles'),
            "emails" => $this->input->post('emails'),
            "kronologi" => $this->input->post('faximiles'),
            "waktu" => $this->input->post('waktu'),
            "identitas_pelapor" => $this->input->post('identitas_pelapor'),
            "bukti" => $this->input->post('bukti')
        );
        return $this->db->insert($this->table, $data);
    }
}
