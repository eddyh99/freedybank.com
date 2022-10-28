<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Swap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Freedy - Swap";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/swap');
        $this->load->view('tamplate/footer');
    }

    public function confirm()
    {
        $data['title'] = "Freedy - Swap";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/swap-confirm');
        $this->load->view('tamplate/footer');
    }

    public function notif()
    {
        $data['title'] = "Freedy - Swap";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/swap-notif');
        $this->load->view('tamplate/footer');
    }
}