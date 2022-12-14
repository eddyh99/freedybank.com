<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = NAMETITLE . " - Search";
        $footer["extra"]    = "member/js/js_index";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/search');
        $this->load->view('tamplate/footer', $footer);
    }

    public function getHistory()
    {
        $this->form_validation->set_rules('tgl', 'Date', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            header("HTTP/1.1 500 Internal Server Error");
            $error = array(
                "token"     => $this->security->get_csrf_hash(),
                "message"   => validation_errors()
            );
            echo json_encode($error);
            return;
        }

        $input = $this->input;
        $tgl = explode("-", $this->security->xss_clean($input->post("tgl")));
        $awal = date_format(date_create($tgl[0]), "Y-m-d");
        $akhir = date_format(date_create($tgl[1]), "Y-m-d");

        $mdata = array(
            "userid"    => $_SESSION["user_id"],
            "currency"  => $_SESSION["currency"],
            "date_start" => $awal,
            "date_end"  => $akhir,
            "timezone"  => $_SESSION["time_location"]
        );
        $result = apitrackless(URLAPI . "/v1/member/history/getAll", json_encode($mdata));
        $data['history'] = $result->message;
        $response = array(
            "token"     => $this->security->get_csrf_hash(),
            "message"   => utf8_encode($this->load->view('member/history', $data, TRUE))
        );
        echo json_encode($response);
    }

    public function searchHistory()
    {
    }
}