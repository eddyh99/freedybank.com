<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wallet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet/wallet');
        $this->load->view('tamplate/footer');
    }

    public function send()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet/wallet-send');
        $this->load->view('tamplate/footer');
    }

    public function send_confirm()
    {
        $this->form_validation->set_rules('ucode', 'Unique Code', 'trim|required');
        $this->form_validation->set_rules('confirm_ucode', 'Confirm Unique Code', 'trim|required|matches[ucode]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('confirm_amount', 'Confirm Amount', 'trim|required|greater_than[0]|matches[amount]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', "<p style='color:black'>" . validation_errors() . "</p>");
            redirect("wallet/send");
            return;
        }

        $input        = $this->input;
        $ucode        = $this->security->xss_clean($input->post("ucode"));
        $amount        = $this->security->xss_clean($input->post("amount"));

        $mdata  = array(
            "userid"    => $_SESSION["user_id"],
            "currency"  => $_SESSION["currency"],
            "ucode"     => $ucode,
            "amount"    => number_format($amount, 2)
        );

        $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/getSummary", json_encode($mdata));

        if (@$result->code != "200") {
            $this->session->set_flashdata('failed', $result->message);
            redirect("wallet/send");
            return;
        }

        $infolist = array(
            "userid"    => $_SESSION["user_id"],
            "currency"  => $_SESSION["currency"],
            "ucode"     => $ucode,
            "fee"     => $result->message->fee,
            "deduct"     => $result->message->deduct,
            "amount"    => number_format($amount, 2)
        );

        $data['title'] = "Freedy - Wallet to Wallet";
        $body["data"] = $infolist;

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet/wallet-send-confirm', $body);
        $this->load->view('tamplate/footer');
    }

    public function send_notif()
    {
        $this->form_validation->set_rules('ucode', 'Unique Code', 'trim|required');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|decimal|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', "<p style='color:black'>" . validation_errors() . "</p>");
            redirect("wallet/send");
            return;
        }

        $input        = $this->input;
        $ucode        = $this->security->xss_clean($input->post("ucode"));
        $amount        = $this->security->xss_clean($input->post("amount"));

        $mdata  = array(
            "userid"    => $_SESSION["user_id"],
            "currency"  => $_SESSION["currency"],
            "ucode"     => $ucode,
            "amount"    => $amount
        );

        $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/walletTransfer", json_encode($mdata));
        if (@$result->code != "200") {
            $this->session->set_flashdata('failed', $result->message);
            redirect("wallet/send");
            return;
        }

        $data['title'] = "Freedy - Wallet to Wallet";
        $body["data"] = $mdata;

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet/wallet-send-notif', $body);
        $this->load->view('tamplate/footer');
    }

    public function receive()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet/wallet-receive');
        $this->load->view('tamplate/footer');
    }

    public function request()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/wallet/wallet-request');
        $this->load->view('tamplate/footer');
    }

    public function request_qrcode()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet/wallet-request-qrcode');
        $this->load->view('tamplate/footer');
    }

    public function request_notif()
    {
        $data['title'] = "Freedy - Wallet to Wallet";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/wallet/wallet-request-notif');
        $this->load->view('tamplate/footer');
    }
}