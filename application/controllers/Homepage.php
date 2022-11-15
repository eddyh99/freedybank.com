<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
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
        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );

        $url = "https://api.tracklessbank.com/v1/member/currency/getActiveCurrency";
        $currency   = apitrackless($url, json_encode($mdata))->message;

        $data=array();
        foreach ($currency as $dt) {
            if ($dt->status == 'active') {
                $temp["currency"]=$dt->currency;
                $temp["symbol"]=$dt->symbol;
                $temp["status"]=$dt->status;
                $temp["balance"]=apitrackless("https://api.tracklessbank.com/v1/member/wallet/getBalance?currency=" . $dt->currency . "&userid=" . $_SESSION["user_id"])->message->balance;
                array_push($data,(object) $temp);
            }
        }

        $dataobj=(object)$data;

        $data['title'] = "Freedy - Homepage";
        $footer["extra"]    = "member/js/js_index";
        $body["currency"]=$dataobj;


        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom-homepage', $data);
        $this->load->view('member/index', $body);
        $this->load->view('tamplate/footer', $footer);
    }

    public function setting_currency()
    {
        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );

        $url = "https://api.tracklessbank.com/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url, json_encode($mdata))->message;

        $footer["extra"]    = "member/js/js_currency";
        $data['title']      = "Freedy - Currency Setting";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/setting-currency', $body);
        $this->load->view('tamplate/footer', $footer);
    }

    public function wallet()
    {
        if (!empty($_GET["cur"])) {

            $url = "https://api.tracklessbank.com/v1/member/currency/getByCurrency?currency=" . $_GET["cur"] . "&userid=" . $_SESSION["user_id"];
            $result = apitrackless($url);
            if ($result->code == 200) {
                $_SESSION["currency"] = @$_GET["cur"];
                $_SESSION["symbol"] = $result->message->symbol;
                $_SESSION["balance"] = apitrackless("https://api.tracklessbank.com/v1/member/wallet/getBalance?currency=" . $_GET["cur"] . "&userid=" . $_SESSION["user_id"])->message->balance;
            } else {
                $_SESSION["currency"] = "USD";
                $_SESSION["symbol"] = "&dollar;";
                $_SESSION["balance"] = apitrackless("https://api.tracklessbank.com/v1/member/wallet/getBalance?currency=USD&userid=" . $_SESSION["user_id"])->message->balance;
            }
        } else {
            $_SESSION["balance"] = apitrackless("https://api.tracklessbank.com/v1/member/wallet/getBalance?currency=" . $_SESSION["currency"] . "&userid=" . $_SESSION["user_id"])->message->balance;
        }

        $mdata = array(
            "userid" => $_SESSION["user_id"]
        );
        $url = "https://api.tracklessbank.com/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url, json_encode($mdata))->message;
        $data['title'] = "Freedy - Homepage";
        $footer["extra"]    = "member/js/js_index";


        $this->load->view('tamplate/header', $data);
        $this->load->view('member/mywallet', $body);
        $this->load->view('tamplate/footer', $footer);
    }

    public function setCurrency()
    {
        $currency = $_GET["currency"];
        $status = $_GET["status"];
        $url = "https://api.tracklessbank.com/v1/member/currency/setCurrency?status=" . $status . "&userid=" . $_SESSION["user_id"] . "&currency=" . $currency;
        $result = apitrackless($url);
        echo json_encode($result);
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
        $result = apitrackless("https://api.tracklessbank.com/v1/member/history/getAll", json_encode($mdata));
        $response = array(
            "token"     => $this->security->get_csrf_hash(),
            "message"   => utf8_encode($this->load->view('member/history', $result->message, TRUE))
        );
        echo json_encode($response);
    }
}