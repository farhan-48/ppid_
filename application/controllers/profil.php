<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('profil/v_kelembagaan');
    }
    public function profil_pedum()
    {
        $this->load->view('profil/v_pedum');
    }
    public function profil_ppid()
    {
        $this->load->view('profil/v_profil');
    }
    public function profil_visimisi()
    {
        $this->load->view('profil/v_visimisi');
    }
    public function profil_sk()
    {
        $this->load->view('profil/v_sk');
    }
    public function profil_tupoksi()
    {
        $this->load->view('profil/v_tupoksi');
    }
    public function profil_maklumat()
    {
        $this->load->view('profil/v_maklumat');
    }
    public function profil_soplayanan()
    {
        $this->load->view('profil/v_soplayanan');
    }
    public function profil_soppengajuan()
    {
        $this->load->view('profil/v_soppengajuan');
    }
    public function profil_struktur()
    {
        $this->load->view('profil/v_struktur');
    }
    public function profil_regulasi()
    {
        $this->load->view('profil/v_regulasi');
    }
}
