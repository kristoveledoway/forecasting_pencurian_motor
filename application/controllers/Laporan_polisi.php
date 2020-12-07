<?php
class Laporan_polisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url());
        }
        $this->load->model('M_laporan');
    }

    function tambah()
    {
        $data = array(
            'title' => "Tambah Data Laporan Polisi"
        );
        $this->template->load('template', 'backend/laporan/v_tambah_laporan', $data);
    }

    function lihat()
    {
        $data = array(
            'title' => "Lihat Data Laporan Polisi"
        );
        $data['laporan'] = $this->db->query("SELECT * FROM laporan")->result_array();
        $this->template->load('template', 'backend/laporan/v_lihat_laporan', $data);
    }

    function tambah_data()
    {
        $data = array(
            'laporan_polisi' => $this->input->post('laporan_polisi'),
            'tanggal_lapor' => $this->input->post('tanggal_lapor'),
            'nama_pelapor' => $this->input->post('nama_pelapor'),
            'umur' => $this->input->post('umur'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat_tkp' => $this->input->post('alamat_tkp'),
            'uraian_singkat' => $this->input->post('uraian_singkat'),
            'nama_motor' => $this->input->post('nama_motor'),
            'no_rangka' => $this->input->post('no_rangka'),
            'no_mesin' => $this->input->post('no_mesin'),
            'pasal' => $this->input->post('pasal'),
            'terlapor' => $this->input->post('terlapor'),
            'unit' => $this->input->post('unit'),
            'laporan_tahun' => $this->input->post('laporan_tahun')
        );
        $this->db->insert('laporan', $data);
        redirect('laporan_polisi/lihat');
    }

    function hapus($id)
    {
        $where = array(
            'id' => $id
        );
        $this->M_laporan->delete_data($where, 'laporan');

        redirect(base_url() . 'laporan_polisi/lihat');
    }
}
