<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
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
        $data['title'] = "Freedy - Wallet to Bank";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/tobank/bank');
        $this->load->view('tamplate/footer');
    }

    public function local()
    {
        $data['title'] = "Freedy - Wallet to Bank";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/tobank/bank-local');
        $this->load->view('tamplate/footer');
    }

    public function inter()
    {
        $data['title'] = "Freedy - Wallet to Bank";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/tobank/bank-inter');
        $this->load->view('tamplate/footer');
    }

    public function banklocalconfirm()
    {
        $this->form_validation->set_rules('account_number', 'Account Number/IBAN', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('recipient', 'Recipient', 'trim|required');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('causal', 'Causal', 'trim|required');
        $this->form_validation->set_rules(
            'transfer_type',
            'Transfer Type',
            array(
                'trim',
                'required',
                array(
                    'undefined',
                    function ($str) {
                        return $str === "circuit" || $str === "outside";
                    }
                )
            ),
            array(
                'undefined' => 'Unknown {field} [' . $this->input->post('transfer_type') . ']',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect(base_url() . "bank/local");
        }

        $input    = $this->input;
        $mdata = array(
            "userid"            => $_SESSION["user_id"],
            "currency"          => $_SESSION["currency"],
            "amount"            => $this->security->xss_clean($input->post("amount")),
            "transfer_type"     => $this->security->xss_clean($input->post("transfer_type")),
        );

        $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/bankSummary", json_encode($mdata));

        if (@$result->code != 200) {
            $this->session->set_flashdata("failed", "Insuffisient Fund");
            redirect(base_url() . "bank/local");
        }

        $transfer_type  = $this->security->xss_clean($input->post("transfer_type"));
        $temp["account_number"]    = $this->security->xss_clean($input->post("account_number"));
        $temp["recipient"]         = $this->security->xss_clean($input->post("recipient"));
        $temp["amount"]            = $this->security->xss_clean($input->post("amount"));
        $temp["causal"]            = $this->security->xss_clean($input->post("causal"));
        $temp["transfer_type"]     = $transfer_type;
        $temp["swift"]             = $this->security->xss_clean($input->post("swift"));

        if ($_SESSION["currency"] == "USD") {
            if ($transfer_type == "circuit") {
                $country    = "US";
            } elseif ($transfer_type == "outside") {
                $country     = $this->security->xss_clean($input->post("country"));
            }

            $temp["bank_name"]      = $this->security->xss_clean($input->post("bank_name"));
            $temp["address"]        = $this->security->xss_clean($input->post("address"));
            $temp["account_type"]   = $this->security->xss_clean($input->post("account_type"));
            $temp["city"]           = $this->security->xss_clean($input->post("city"));
            $temp["state"]          = $this->security->xss_clean($input->post("state"));
            $temp["postalcode"]     = $this->security->xss_clean($input->post("postalcode"));
            $temp["country"]        = $country;
        }

        $body["data"] = $temp;

        $data['title'] = "Freedy - Wallet to Bank Confirmation";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $body);
        $this->load->view('member/tobank/bank-confirm');
        $this->load->view('tamplate/footer');
    }

    public function bankinterconfirm()
    {
        $this->form_validation->set_rules('account_number', 'Account Number/IBAN', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('recipient', 'Recipient', 'trim|required');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('causal', 'Causal', 'trim|required');
        if ($_SESSION["currency"] == "USD") {
            $this->form_validation->set_rules(
                'account_type',
                'Account Type',
                array(
                    'trim',
                    'required',
                    array(
                        'undefined',
                        function ($str) {
                            return $str === "savings" || $str === "checking";
                        }
                    )
                ),
                array(
                    'undefined' => 'Unknown {field} [' . $this->input->post('account_type') . ']',
                )
            );
        }

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect(base_url() . "bank");
        }

        $input            = $this->input;
        $amount         = $this->security->xss_clean($input->post("amount"));
        $transfer_type  = $this->security->xss_clean($input->post("transfer_type"));
        $recipient      = $this->security->xss_clean($input->post("recipient"));
        $account_number = $this->security->xss_clean($input->post("account_number"));
        $causal         = $this->security->xss_clean($input->post("causal"));
        $swift          = $this->security->xss_clean($input->post("swift"));
        if ($_SESSION["currency"] == "USD") {
            $bank_name      = $this->security->xss_clean($input->post("bank_name"));
            $address        = $this->security->xss_clean($input->post("address"));
            $account_type   = $this->security->xss_clean($input->post("account_type"));
            $city           = $this->security->xss_clean($input->post("city"));
            $state          = $this->security->xss_clean($input->post("state"));
            $postalcode     = $this->security->xss_clean($input->post("postalcode"));

            if ($transfer_type == "circuit") {
                $country    = "US";
            } elseif ($transfer_type == "outside") {
                $country     = $this->security->xss_clean($input->post("country"));
            }
        }

        $mdata = array(
            "userid"            => $_SESSION["user_id"],
            "currency"          => $_SESSION["currency"],
            "amount"            => $amount,
            "transfer_type"     => $transfer_type,
            "bank_detail"   => array(
                "recipient"         => $recipient,
                "account_number"    => $account_number,
                "swift"             => @$swift,
                "bank_name"         => @$bank_name,
                "address"           => @$address,
                "account_type"      => @$account_type,
                "city"              => @$city,
                "state"             => @$state,
                "postalcode"        => @$postalcode,
                "country"           => @$country,
                "causal"            => @$causal,
            )
        );

        $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/bankTransfer", json_encode($mdata));
        if (@$result->code != 200) {
            $this->session->set_flashdata("failed", $result->message);
            redirect(base_url() . "bank");
        }

        $data['title'] = "Freedy - Wallet to Bank Completed";

        $body["data"] = array(
            "amount"    => $amount,
            "recipient" => $recipient
        );

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom');
        $this->load->view('member/tobank/bank-confirm', $body);
        $this->load->view('tamplate/footer');
    }

    public function banknotif()
    {
        $data['title'] = "Freedy - Wallet to Bank";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/tobank/bank-notif');
        $this->load->view('tamplate/footer');
    }
}