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
        $footer['extra'] = "admin/js/js_btn_disabled";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/tobank/bank-local');
        $this->load->view('tamplate/footer', $footer);
    }

    public function inter()
    {
        $data['title'] = "Freedy - Wallet to Bank";
        $footer['extra'] = "admin/js/js_btn_disabled";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/tobank/bank-inter');
        $this->load->view('tamplate/footer', $footer);
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

        $result = apitrackless(URLAPI . "/v1/member/wallet/bankSummary", json_encode($mdata));

        if (@$result->code != 200) {
            $this->session->set_flashdata("failed", "Insuffisient Fund");
            redirect(base_url() . "bank/local");
        }

        $transfer_type  = $this->security->xss_clean($input->post("transfer_type"));
        $temp["fee"]               = $result->message->fee;
        $temp["deduct"]            = $result->message->deduct;
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
        $footer['extra'] = "admin/js/js_btn_disabled";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $body);
        $this->load->view('member/tobank/bank-confirm');
        $this->load->view('tamplate/footer', $footer);
    }

    public function banknotif()
    {
        $input          = $this->input;
        $transfer_type  = $this->security->xss_clean($input->post("transfer_type"));
        $this->form_validation->set_rules('account_number', 'Account Number/IBAN', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('recipient', 'Recipient', 'trim|required');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('causal', 'Causal', 'trim|required');
        if ($_SESSION["currency"] == "USD") {
            if ($transfer_type == 'circuit') {
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
        }

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect(base_url() . "bank");
        }

        $amount         = $this->security->xss_clean($input->post("amount"));
        $transfer_type  = $this->security->xss_clean($input->post("transfer_type"));
        $recipient      = $this->security->xss_clean($input->post("recipient"));
        $account_number = $this->security->xss_clean($input->post("account_number"));
        $causal         = $this->security->xss_clean($input->post("causal"));
        $swift          = $this->security->xss_clean($input->post("swift"));
        if ($_SESSION["currency"] == "USD") {
            $bank_name      = $this->security->xss_clean($input->post("bank_name"));
            $address        = $this->security->xss_clean($input->post("address"));
            $city           = $this->security->xss_clean($input->post("city"));
            $state          = $this->security->xss_clean($input->post("state"));
            $postalcode     = $this->security->xss_clean($input->post("postalcode"));

            if ($transfer_type == "circuit") {
                $country        = "US";
                $account_type   = $this->security->xss_clean($input->post("account_type"));
            } elseif ($transfer_type == "outside") {
                $country        = $this->security->xss_clean($input->post("country"));
                $account_type   = NULL;
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

        $result = apitrackless(URLAPI . "/v1/member/wallet/bankTransfer", json_encode($mdata));

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

    public function exemple($curr)
    {
        if (
            ($curr == 'AED') ||
            ($curr == 'ARS') ||
            ($curr == 'AUD') ||
            ($curr == 'BDT') ||
            ($curr == 'BGN') ||
            ($curr == 'BRL') ||
            ($curr == 'CAD') ||
            ($curr == 'CHF') ||
            ($curr == 'CLP') ||
            ($curr == 'CNY') ||
            ($curr == 'CZK') ||
            ($curr == 'DKK') ||
            ($curr == 'EGP') ||
            ($curr == 'EUR') ||
            ($curr == 'GBP') ||
            ($curr == 'GEL') ||
            ($curr == 'GHS') ||
            ($curr == 'HKD') ||
            ($curr == 'HRK') ||
            ($curr == 'HUF') ||
            ($curr == 'IDR') ||
            ($curr == 'ILS') ||
            ($curr == 'INR') ||
            ($curr == 'JPY') ||
            ($curr == 'KES') ||
            ($curr == 'KRW') ||
            ($curr == 'LKR') ||
            ($curr == 'MAD') ||
            ($curr == 'MXN') ||
            ($curr == 'MYR') ||
            ($curr == 'NGN') ||
            ($curr == 'NOK') ||
            ($curr == 'NPR') ||
            ($curr == 'NZD') ||
            ($curr == 'PHP') ||
            ($curr == 'PKR') ||
            ($curr == 'PLN') ||
            ($curr == 'RON') ||
            ($curr == 'SEK') ||
            ($curr == 'SGD') ||
            ($curr == 'THB') ||
            ($curr == 'TRY') ||
            ($curr == 'UAH') ||
            ($curr == 'USD') ||
            ($curr == 'VND') ||
            ($curr == 'ZAR')
        ) {
            $this->form_validation->set_rules('accountHolderName', 'accountHolderName', 'trim|required');
            // IBAN
            if (($curr == 'AED') ||
                ($curr == 'BGN') ||
                ($curr == 'CHF') ||
                ($curr == 'DKK') ||
                ($curr == 'EGP') ||
                ($curr == 'EUR') ||
                ($curr == 'GEL') ||
                ($curr == 'HKD') ||
                ($curr == 'HRK') ||
                ($curr == 'ILS') ||
                ($curr == 'NOK') ||
                ($curr == 'PKR') ||
                ($curr == 'PLN') ||
                ($curr == 'RON') ||
                ($curr == 'SEK') ||
                ($curr == 'TRY')
            ) {
                $this->form_validation->set_rules('IBAN', 'IBAN', 'trim|required');
            }
            // TAXID
            if (($curr == 'ARS')) {
                $this->form_validation->set_rules('taxId', 'taxId', 'trim|required');
            }
            // accountNumber
            if (($curr == 'ARS') ||
                ($curr == 'AUD') ||
                ($curr == 'BDT') ||
                ($curr == 'BGN') ||
                ($curr == 'BRL') ||
                ($curr == 'CAD') ||
                ($curr == 'CHF') ||
                ($curr == 'CLP') ||
                ($curr == 'CNY') ||
                ($curr == 'CZK') ||
                ($curr == 'DKK') ||
                ($curr == 'EGP') ||
                ($curr == 'EUR') ||
                ($curr == 'GBP') ||
                ($curr == 'GEL') ||
                ($curr == 'GHS') ||
                ($curr == 'HKD') ||
                ($curr == 'HRK') ||
                ($curr == 'HUF') ||
                ($curr == 'IDR') ||
                ($curr == 'ILS') ||
                ($curr == 'INR') ||
                ($curr == 'JPY') ||
                ($curr == 'KES') ||
                ($curr == 'KRW') ||
                ($curr == 'LKR') ||
                ($curr == 'MAD') ||
                ($curr == 'MXN') ||
                ($curr == 'MYR') ||
                ($curr == 'NGN') ||
                ($curr == 'NOK') ||
                ($curr == 'NPR') ||
                ($curr == 'NZD') ||
                ($curr == 'PHP') ||
                ($curr == 'PKR') ||
                ($curr == 'PLN') ||
                ($curr == 'RON') ||
                ($curr == 'SEK') ||
                ($curr == 'SGD') ||
                ($curr == 'THB') ||
                ($curr == 'TRY') ||
                ($curr == 'UAH') ||
                ($curr == 'USD') ||
                ($curr == 'VND') ||
                ($curr == 'ZAR')
            ) {
                $this->form_validation->set_rules('accountNumber', 'accountNumber', 'trim|required');
            }

            // Address
            if (
                ($curr == 'AUD') ||
                ($curr == 'PHP') ||
                ($curr == 'THB') ||
                ($curr == 'UAH') ||
                ($curr == 'USD')
            ) {
                if (($curr == 'AUD')) {
                    $this->form_validation->set_rules('countryCode', 'countryCode', 'trim|required');
                } else {
                    $this->form_validation->set_rules('country', 'country', 'trim|required');
                }

                $this->form_validation->set_rules('postCode', 'postCode', 'trim|required');
                $this->form_validation->set_rules('city', 'city', 'trim|required');
                $this->form_validation->set_rules('firstLine', 'firstLine', 'trim|required');
            }
            // accountType
            if (
                ($curr == 'BRL') ||
                ($curr == 'CAD') ||
                ($curr == 'CLP') ||
                ($curr == 'JPY') ||
                ($curr == 'USD')
            ) {
                $this->form_validation->set_rules('accountType', 'accountType', 'trim|required');
            }

            // bsbCode
            if (($curr == 'AUD')) {
                $this->form_validation->set_rules('bsbCode', 'bsbCode', 'trim|required');
            }
            // bankCode
            if (
                ($curr == 'BDT') ||
                ($curr == 'BRL') ||
                ($curr == 'CLP') ||
                ($curr == 'CZK') ||
                ($curr == 'GHS') ||
                ($curr == 'IDR') ||
                ($curr == 'JPY') ||
                ($curr == 'KES') ||
                ($curr == 'KRW') ||
                ($curr == 'LKR') ||
                ($curr == 'MAD') ||
                ($curr == 'NGN') ||
                ($curr == 'NPR') ||
                ($curr == 'PHP') ||
                ($curr == 'SGD') ||
                ($curr == 'THB')
            ) {
                $this->form_validation->set_rules('bankCode', 'bankCode', 'trim|required');
            }
            // branchCode
            if (
                ($curr == 'BDT') ||
                ($curr == 'BRL') ||
                ($curr == 'JPY') ||
                ($curr == 'LKR') ||
                ($curr == 'VND')
            ) {
                $this->form_validation->set_rules('branchCode', 'branchCode', 'trim|required');
            }

            // cpf
            if (($curr == 'BRL')) {
                $this->form_validation->set_rules('cpf', 'cpf', 'trim|required');
            }

            // rut
            if (($curr == 'CLP')) {
                $this->form_validation->set_rules('rut', 'rut', 'trim|required');
            }

            // sortCode
            if (($curr == 'GBP')) {
                $this->form_validation->set_rules('sortCode', 'sortCode', 'trim|required');
            }

            // ifscCode
            if (($curr == 'INR')) {
                $this->form_validation->set_rules('ifscCode', 'ifscCode', 'trim|required');
            }

            // clabe
            if (($curr == 'MXN')) {
                $this->form_validation->set_rules('clabe', 'clabe', 'trim|required');
            }

            // clabe
            if (($curr == 'MYR') ||
                ($curr == 'VND') ||
                ($curr == 'ZAR')
            ) {
                $this->form_validation->set_rules('swiftCode', 'swiftCode', 'trim|required');
            }

            // dateOfBirth & email
            if (($curr == 'KRW')) {
                $this->form_validation->set_rules('dateOfBirth', 'dateOfBirth', 'trim|required');
                $this->form_validation->set_rules('email', 'email', 'trim|required');
            }

            // phoneNumber
            if (
                ($curr == 'BRL') ||
                ($curr == 'CLP') ||
                ($curr == 'UAH')
            ) {
                $this->form_validation->set_rules('phoneNumber', 'phoneNumber', 'trim|required');
            }

            // abartn
            if ($curr == 'USD') {
                $this->form_validation->set_rules('abartn', 'abartn', 'trim|required');
            }
        }
    }
}