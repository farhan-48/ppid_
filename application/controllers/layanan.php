<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Layanan_perorangan_model');
        $this->load->model('Layanan_lembaga_model');
        $this->load->model('Layanan_keberatan_model');
        $this->load->model('Layanan_pengaduan_model');
    }

    public function layanan_permohonan()
    {
        $this->load->view('layanan_informasi/v_permohonan');
    }
    public function layanan_perorangan()
    {
        $this->load->view('layanan_informasi/v_perorangan');
    }
    public function layanan_lembaga()
    {
        $this->load->view('layanan_informasi/v_lembaga');
    }
    public function layanan_keberatan()
    {
        $this->load->view('layanan_informasi/v_keberatan');
    }
    public function layanan_pengaduan()
    {
        $this->load->view('layanan_informasi/v_pengaduan');
    }
    public function add()
    {
        $config['upload_path'] = FCPATH . '/berkas/file_layanan_perorangan/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['max_width'] = 1080;
        $config['max_height'] = 1080;
        $this->load->library('upload', $config);
        
        $perorangan = $this->Layanan_perorangan_model;
        $validation = $this->form_validation;
        $validation->set_rules($perorangan->rules());
        if ($validation->run()) {
            $perorangan->save();
            redirect("layanan/layanan_perorangan");
        }
    }
    public function add2()
    {
        $config['upload_path'] = FCPATH . '/berkas/file_layanan_lembaga/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['max_width'] = 1080;
        $config['max_height'] = 1080;
        $this->load->library('upload', $config);
        
        $lembaga = $this->Layanan_lembaga_model;
        $validation = $this->form_validation;
        $validation->set_rules($lembaga->rules());
        if ($validation->run()) {
            $lembaga->save();
            redirect("layanan/layanan_lembaga");
        }
    }
    public function add3()
    {
        $keberatan = $this->Layanan_keberatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($keberatan->rules());
        if ($validation->run()) {
            $keberatan->save();
            redirect("layanan/layanan_keberatan");
        }
    }
    public function add4()
    {
        $config['upload_path'] = FCPATH . '/berkas/file_layanan_pengaduan/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['max_width'] = 1080;
        $config['max_height'] = 1080;
        $this->load->library('upload', $config);
        
        $pengaduan = $this->Layanan_pengaduan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengaduan->rules());
        if ($validation->run()) {
            $pengaduan->save();
            redirect("layanan/layanan_pengaduan");
        }
    }
}
