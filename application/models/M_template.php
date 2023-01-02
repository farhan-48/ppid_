<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_template extends CI_Model
{

	function tampilinfo()
	{
		$query = $this->db->select('*')
			->from('data_rs')
			->get();

		return $query->result();
	}

	function ambil($id)
	{
		$query = $this->db->select('*')
			->from('tb_login')
			->join('pegawai', 'pegawai.id_user = tb_login.id_user')
			->where('pegawai.id_user', $id)
			->get();
		return $query->result();
	}

	function tampil()
	{
		$query = $this->db->select('*')
			->from('data_rs')
			->get();

		return $query->num_rows();
	}
	function beritakan()
	{
		$query = $this->db->select('*')
			->from('konten_isi')
			->join('konten', 'id_konten.konten = id_konten.isi_konten')
			->order_by('tanggal','DESC')
			->limit(3)
			->get();

		return $query->result();
	}

	function zona()
	{
		$this->db->select('*')
				->from('foto');
		$query = $this->db->get();
		return $query;
	}
}
