<?php
class Prediksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_laporan');
    }

    function index()
    {
        $data = array(
            'title' => "Lihat Prediksi"
        );
        $this->template->load('template', 'backend/prediksi/v_prediksi', $data);
    }
}
