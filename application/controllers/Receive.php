<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receive extends CI_Controller
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
        $currency = $_SESSION["currency"];
        $url = "https://api.tracklessbank.com/v1/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        if ($result->code != 200) {
            $body["bank"] = NULL;
        } else {
            $body["bank"] = $result->message;
        }

        $data['title'] = "Freedy - Add Receve";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/topup/receive', $body);
        $this->load->view('tamplate/footer');
    }

    public function localbank()
    {
        $currency = $_SESSION["currency"];
        $url = "https://api.tracklessbank.com/v1/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        if ($result->code != 200) {
            $body["bank"] = NULL;
        } else {
            $body["bank"] = $result->message;
        }

        $data['title'] = "Freedy - Add Receve";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/topup/localbank', $body);
        $this->load->view('tamplate/footer');
    }

    public function interbank()
    {
        $currency = $_SESSION["currency"];
        $url = "https://api.tracklessbank.com/v1/bank/getBank?currency=" . $currency;
        $result = apitrackless($url);
        if ($result->code != 200) {
            $body["bank"] = NULL;
        } else {
            $body["bank"] = $result->message;
        }

        $data['title'] = "Freedy - Add Receve";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/topup/interbank', $body);
        $this->load->view('tamplate/footer');
    }
}