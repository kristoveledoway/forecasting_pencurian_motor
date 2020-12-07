<?php
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == "login") {
            redirect(base_url("dashboard"));
        }
        $this->load->model('M_laporan');
    }

    function index()
    {
        //$this->load->view('template');
        $data = array(
            'title' => "Login Admin",
        );
        $this->load->view('v_login', $data);
    }

    public function aksi_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_laporan->get($username);

        if ($password == $user->password) {
            $session = array(
                'username' => $user->username,
                'level' => $user->level
            );
            $this->session->set_userdata($session);
            redirect('dashboard');
        } else {
            echo "Username dan Password Salah!";
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        redirect('login');
    }
}
