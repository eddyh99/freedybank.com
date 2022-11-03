<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION)){
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['title'] = "Freedy - Homepage";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/index');
        $this->load->view('tamplate/footer');
    }

    public function setting_currency()
    {
        $data['title'] = "Freedy - Currency Setting";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/setting-currency');
        $this->load->view('tamplate/footer');
    }
}