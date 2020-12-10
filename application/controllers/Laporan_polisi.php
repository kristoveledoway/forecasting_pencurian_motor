<?php
class Laporan_polisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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

    public function print()
    {
        $data['laporan'] = $this->M_laporan->print();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-data.pdf";
        $this->pdf->load_view('backend/laporan/print', $data);
    }

    public function konfirmasi($id)
    {
        $data = array(
            'title' => "Konfirmasi Data Laporan Polisi"
        );
        $data['temuan'] = $this->M_laporan->get_detail($id);
        $this->template->load('template', 'backend/laporan/v_konfirmasi_laporan', $data);
    }

    function ditemukan($id)
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
        $this->db->insert('ditemukan', $data);
        $where = array(
            'id' => $id
        );
        $this->M_laporan->delete_data($where, 'laporan');
        redirect('laporan_polisi/lihat');
    }
}
