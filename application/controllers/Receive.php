<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receive extends CI_Controller
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
        $data['title'] = "Freedy - Add Receve";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/receive');
        $this->load->view('tamplate/footer');
    }
}