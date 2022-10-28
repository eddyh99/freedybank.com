<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wallet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet');
        $this->load->view('tamplate/footer');
    }

    public function send()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet-send');
        $this->load->view('tamplate/footer');
    }

    public function send_confirm()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet-send-confirm');
        $this->load->view('tamplate/footer');
    }

    public function send_notif()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet-send-notif');
        $this->load->view('tamplate/footer');
    }

    public function receive()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet-receive');
        $this->load->view('tamplate/footer');
    }

    public function request()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet-request');
        $this->load->view('tamplate/footer');
    }

    public function request_qrcode()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet-request-qrcode');
        $this->load->view('tamplate/footer');
    }

    public function request_notif()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet-request-notif');
        $this->load->view('tamplate/footer');
    }
}