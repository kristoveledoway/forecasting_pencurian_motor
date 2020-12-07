<?php
class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = array(
            'title' => "Dashboard Admin",
        );
        $this->template->load('template', 'backend/v_dashboard', $data);
    }
}
