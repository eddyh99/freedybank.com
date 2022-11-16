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

        $body["data"] = array(
            "account_number"    => $this->security->xss_clean($input->post("account_number")),
            "recipient"         => $this->security->xss_clean($input->post("recipient")),
            "amount"            => $this->security->xss_clean($input->post("amount")),
            "causal"            => $this->security->xss_clean($input->post("causal")),
            "transfer_type"     => $this->security->xss_clean($input->post("transfer_type")),
            "fee"               => $result->message->fee,
            "deduct"            => $result->message->deduct,
        );


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
            redirect(base_url() . "bank/inter");
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
            redirect(base_url() . "bank/inter");
        }

        $body["data"] = array(
            "account_number"    => $this->security->xss_clean($input->post("account_number")),
            "recipient"         => $this->security->xss_clean($input->post("recipient")),
            "amount"            => $this->security->xss_clean($input->post("amount")),
            "causal"            => $this->security->xss_clean($input->post("causal")),
            "transfer_type"     => $this->security->xss_clean($input->post("transfer_type")),
        );


        $data['title'] = "Freedy - Wallet to Bank Confirmation";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $body);
        $this->load->view('member/tobank/bank-confirm');
        $this->load->view('tamplate/footer');
    }

    public function banknotif()
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
                            return $str === "saving" || $str === "checking";
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
        if (($_SESSION["currency"] == "USD") && ($transfer_type == "circuit")) {
            $swift          = $this->security->xss_clean($input->post("swift"));
            $bank_name      = $this->security->xss_clean($input->post("bank_name"));
            $address        = $this->security->xss_clean($input->post("bank_address"));
            $account_type   = $this->security->xss_clean($input->post("account_type"));
            $city           = $this->security->xss_clean($input->post("city"));
            $state          = $this->security->xss_clean($input->post("state"));
            $postalcode     = $this->security->xss_clean($input->post("postalcode"));
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
        $this->load->view('member/tobank/bank-notif', $body);
        $this->load->view('tamplate/footer');
    }
}