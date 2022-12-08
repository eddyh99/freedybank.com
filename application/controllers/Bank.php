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

    public function banklocalconfirm_belumfix()
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

    public function banknotif_belumfix()
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

    public function banklocalconfirm()
    {
        if (
            ($_SESSION['currency'] == 'AED') ||
            ($_SESSION['currency'] == 'ARS') ||
            ($_SESSION['currency'] == 'AUD') ||
            ($_SESSION['currency'] == 'BDT') ||
            ($_SESSION['currency'] == 'BGN') ||
            ($_SESSION['currency'] == 'BRL') ||
            ($_SESSION['currency'] == 'CAD') ||
            ($_SESSION['currency'] == 'CHF') ||
            ($_SESSION['currency'] == 'CLP') ||
            ($_SESSION['currency'] == 'CNY') ||
            ($_SESSION['currency'] == 'CZK') ||
            ($_SESSION['currency'] == 'DKK') ||
            ($_SESSION['currency'] == 'EGP') ||
            ($_SESSION['currency'] == 'EUR') ||
            ($_SESSION['currency'] == 'GBP') ||
            ($_SESSION['currency'] == 'GEL') ||
            ($_SESSION['currency'] == 'GHS') ||
            ($_SESSION['currency'] == 'HKD') ||
            ($_SESSION['currency'] == 'HRK') ||
            ($_SESSION['currency'] == 'HUF') ||
            ($_SESSION['currency'] == 'IDR') ||
            ($_SESSION['currency'] == 'ILS') ||
            ($_SESSION['currency'] == 'INR') ||
            ($_SESSION['currency'] == 'JPY') ||
            ($_SESSION['currency'] == 'KES') ||
            ($_SESSION['currency'] == 'KRW') ||
            ($_SESSION['currency'] == 'LKR') ||
            ($_SESSION['currency'] == 'MAD') ||
            ($_SESSION['currency'] == 'MXN') ||
            ($_SESSION['currency'] == 'MYR') ||
            ($_SESSION['currency'] == 'NGN') ||
            ($_SESSION['currency'] == 'NOK') ||
            ($_SESSION['currency'] == 'NPR') ||
            ($_SESSION['currency'] == 'NZD') ||
            ($_SESSION['currency'] == 'PHP') ||
            ($_SESSION['currency'] == 'PKR') ||
            ($_SESSION['currency'] == 'PLN') ||
            ($_SESSION['currency'] == 'RON') ||
            ($_SESSION['currency'] == 'SEK') ||
            ($_SESSION['currency'] == 'SGD') ||
            ($_SESSION['currency'] == 'THB') ||
            ($_SESSION['currency'] == 'TRY') ||
            ($_SESSION['currency'] == 'UAH') ||
            ($_SESSION['currency'] == 'USD') ||
            ($_SESSION['currency'] == 'VND') ||
            ($_SESSION['currency'] == 'ZAR')
        ) {
            $this->form_validation->set_rules('accountHolderName', 'accountHolderName', 'trim');
            // IBAN
            if (($_SESSION['currency'] == 'AED') ||
                ($_SESSION['currency'] == 'BGN') ||
                ($_SESSION['currency'] == 'CHF') ||
                ($_SESSION['currency'] == 'DKK') ||
                ($_SESSION['currency'] == 'EGP') ||
                ($_SESSION['currency'] == 'EUR') ||
                ($_SESSION['currency'] == 'GEL') ||
                ($_SESSION['currency'] == 'HKD') ||
                ($_SESSION['currency'] == 'HRK') ||
                ($_SESSION['currency'] == 'ILS') ||
                ($_SESSION['currency'] == 'NOK') ||
                ($_SESSION['currency'] == 'PKR') ||
                ($_SESSION['currency'] == 'PLN') ||
                ($_SESSION['currency'] == 'RON') ||
                ($_SESSION['currency'] == 'SEK') ||
                ($_SESSION['currency'] == 'TRY')
            ) {
                $this->form_validation->set_rules('IBAN', 'IBAN', 'trim');
            }
            // TAXID
            if (($_SESSION['currency'] == 'ARS')) {
                $this->form_validation->set_rules('taxId', 'taxId', 'trim');
            }
            // accountNumber
            if (($_SESSION['currency'] == 'ARS') ||
                ($_SESSION['currency'] == 'AUD') ||
                ($_SESSION['currency'] == 'BDT') ||
                ($_SESSION['currency'] == 'BGN') ||
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CAD') ||
                ($_SESSION['currency'] == 'CHF') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'CNY') ||
                ($_SESSION['currency'] == 'CZK') ||
                ($_SESSION['currency'] == 'DKK') ||
                ($_SESSION['currency'] == 'EGP') ||
                ($_SESSION['currency'] == 'EUR') ||
                ($_SESSION['currency'] == 'GBP') ||
                ($_SESSION['currency'] == 'GEL') ||
                ($_SESSION['currency'] == 'GHS') ||
                ($_SESSION['currency'] == 'HKD') ||
                ($_SESSION['currency'] == 'HRK') ||
                ($_SESSION['currency'] == 'HUF') ||
                ($_SESSION['currency'] == 'IDR') ||
                ($_SESSION['currency'] == 'ILS') ||
                ($_SESSION['currency'] == 'INR') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'KES') ||
                ($_SESSION['currency'] == 'KRW') ||
                ($_SESSION['currency'] == 'LKR') ||
                ($_SESSION['currency'] == 'MAD') ||
                ($_SESSION['currency'] == 'MXN') ||
                ($_SESSION['currency'] == 'MYR') ||
                ($_SESSION['currency'] == 'NGN') ||
                ($_SESSION['currency'] == 'NOK') ||
                ($_SESSION['currency'] == 'NPR') ||
                ($_SESSION['currency'] == 'NZD') ||
                ($_SESSION['currency'] == 'PHP') ||
                ($_SESSION['currency'] == 'PKR') ||
                ($_SESSION['currency'] == 'PLN') ||
                ($_SESSION['currency'] == 'RON') ||
                ($_SESSION['currency'] == 'SEK') ||
                ($_SESSION['currency'] == 'SGD') ||
                ($_SESSION['currency'] == 'THB') ||
                ($_SESSION['currency'] == 'TRY') ||
                ($_SESSION['currency'] == 'UAH') ||
                ($_SESSION['currency'] == 'USD') ||
                ($_SESSION['currency'] == 'VND') ||
                ($_SESSION['currency'] == 'ZAR')
            ) {
                $this->form_validation->set_rules('accountNumber', 'accountNumber', 'trim');
            }

            // Address
            if (
                ($_SESSION['currency'] == 'AUD') ||
                ($_SESSION['currency'] == 'PHP') ||
                ($_SESSION['currency'] == 'THB') ||
                ($_SESSION['currency'] == 'UAH') ||
                ($_SESSION['currency'] == 'USD')
            ) {
                if (($_SESSION['currency'] == 'AUD')) {
                    $this->form_validation->set_rules('countryCode', 'countryCode', 'trim');
                } else {
                    $this->form_validation->set_rules('country', 'country', 'trim');
                }

                $this->form_validation->set_rules('postCode', 'postCode', 'trim');
                $this->form_validation->set_rules('city', 'city', 'trim');
                $this->form_validation->set_rules('firstLine', 'firstLine', 'trim');
            }
            // accountType
            if (
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CAD') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'USD')
            ) {
                $this->form_validation->set_rules('accountType', 'accountType', 'trim');
            }

            // bsbCode
            if (($_SESSION['currency'] == 'AUD')) {
                $this->form_validation->set_rules('bsbCode', 'bsbCode', 'trim');
            }
            // bankCode
            if (
                ($_SESSION['currency'] == 'BDT') ||
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'CZK') ||
                ($_SESSION['currency'] == 'GHS') ||
                ($_SESSION['currency'] == 'IDR') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'KES') ||
                ($_SESSION['currency'] == 'KRW') ||
                ($_SESSION['currency'] == 'LKR') ||
                ($_SESSION['currency'] == 'MAD') ||
                ($_SESSION['currency'] == 'NGN') ||
                ($_SESSION['currency'] == 'NPR') ||
                ($_SESSION['currency'] == 'PHP') ||
                ($_SESSION['currency'] == 'SGD') ||
                ($_SESSION['currency'] == 'THB')
            ) {
                $this->form_validation->set_rules('bankCode', 'bankCode', 'trim');
            }
            // branchCode
            if (
                ($_SESSION['currency'] == 'BDT') ||
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'LKR') ||
                ($_SESSION['currency'] == 'VND')
            ) {
                $this->form_validation->set_rules('branchCode', 'branchCode', 'trim');
            }

            // cpf
            if (($_SESSION['currency'] == 'BRL')) {
                $this->form_validation->set_rules('cpf', 'cpf', 'trim');
            }

            // rut
            if (($_SESSION['currency'] == 'CLP')) {
                $this->form_validation->set_rules('rut', 'rut', 'trim');
            }

            // sortCode
            if (($_SESSION['currency'] == 'GBP')) {
                $this->form_validation->set_rules('sortCode', 'sortCode', 'trim');
            }

            // ifscCode
            if (($_SESSION['currency'] == 'INR')) {
                $this->form_validation->set_rules('ifscCode', 'ifscCode', 'trim');
            }

            // clabe
            if (($_SESSION['currency'] == 'MXN')) {
                $this->form_validation->set_rules('clabe', 'clabe', 'trim');
            }

            // clabe
            if (($_SESSION['currency'] == 'MYR') ||
                ($_SESSION['currency'] == 'VND') ||
                ($_SESSION['currency'] == 'ZAR')
            ) {
                $this->form_validation->set_rules('swiftCode', 'swiftCode', 'trim');
            }

            // dateOfBirth & email
            if (($_SESSION['currency'] == 'KRW')) {
                $this->form_validation->set_rules('dateOfBirth', 'dateOfBirth', 'trim');
                $this->form_validation->set_rules('email', 'email', 'trim');
            }

            // phoneNumber
            if (
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'UAH')
            ) {
                $this->form_validation->set_rules('phoneNumber', 'phoneNumber', 'trim');
            }

            // abartn
            if ($_SESSION['currency'] == 'USD') {
                $this->form_validation->set_rules('abartn', 'abartn', 'trim');
            }
        }
        $input    = $this->input;
        $accountHolderName = $this->security->xss_clean($input->post("accountHolderName"));
        $IBAN = $this->security->xss_clean($input->post("IBAN"));
        $taxId = $this->security->xss_clean($input->post("taxId"));
        $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
        $countryCode = $this->security->xss_clean($input->post("countryCode"));
        $country = $this->security->xss_clean($input->post("country"));
        $postCode = $this->security->xss_clean($input->post("postCode"));
        $city = $this->security->xss_clean($input->post("city"));
        $firstLine = $this->security->xss_clean($input->post("firstLine"));
        $accountType = $this->security->xss_clean($input->post("accountType"));
        $bsbCode = $this->security->xss_clean($input->post("bsbCode"));
        $bankCode = $this->security->xss_clean($input->post("bankCode"));
        $branchCode = $this->security->xss_clean($input->post("branchCode"));
        $cpf = $this->security->xss_clean($input->post("cpf"));
        $rut = $this->security->xss_clean($input->post("rut"));
        $sortCode = $this->security->xss_clean($input->post("sortCode"));
        $ifscCode = $this->security->xss_clean($input->post("ifscCode"));
        $clabe = $this->security->xss_clean($input->post("clabe"));
        $swiftCode = $this->security->xss_clean($input->post("swiftCode"));
        $dateOfBirth = $this->security->xss_clean($input->post("dateOfBirth"));
        $email = $this->security->xss_clean($input->post("email"));
        $phoneNumber = $this->security->xss_clean($input->post("phoneNumber"));
        $abartn = $this->security->xss_clean($input->post("abartn"));


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

        $temp["accountHolderName"] = $accountHolderName;
        $temp["IBAN"] = $IBAN;
        $temp["taxId"] = $taxId;
        $temp["accountNumber"] = $accountNumber;
        $temp["countryCode"] = $countryCode;
        $temp["country"] = $country;
        $temp["postCode"] = $postCode;
        $temp["city"] = $city;
        $temp["firstLine"] = $firstLine;
        $temp["accountType"] = $accountType;
        $temp["bsbCode"] = $bsbCode;
        $temp["bankCode"] = $bankCode;
        $temp["branchCode"] = $branchCode;
        $temp["cpf"] = $cpf;
        $temp["rut"] = $rut;
        $temp["sortCode"] = $sortCode;
        $temp["ifscCode"] = $ifscCode;
        $temp["clabe"] = $clabe;
        $temp["swiftCode"] = $swiftCode;
        $temp["dateOfBirth"] = $dateOfBirth;
        $temp["email"] = $email;
        $temp["phoneNumber"] = $phoneNumber;
        $temp["abartn"] = $abartn;

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

        $amount         = $this->security->xss_clean($input->post("amount"));
        $transfer_type  = $this->security->xss_clean($input->post("transfer_type"));
        if (
            ($_SESSION['currency'] == 'AED') ||
            ($_SESSION['currency'] == 'ARS') ||
            ($_SESSION['currency'] == 'AUD') ||
            ($_SESSION['currency'] == 'BDT') ||
            ($_SESSION['currency'] == 'BGN') ||
            ($_SESSION['currency'] == 'BRL') ||
            ($_SESSION['currency'] == 'CAD') ||
            ($_SESSION['currency'] == 'CHF') ||
            ($_SESSION['currency'] == 'CLP') ||
            ($_SESSION['currency'] == 'CNY') ||
            ($_SESSION['currency'] == 'CZK') ||
            ($_SESSION['currency'] == 'DKK') ||
            ($_SESSION['currency'] == 'EGP') ||
            ($_SESSION['currency'] == 'EUR') ||
            ($_SESSION['currency'] == 'GBP') ||
            ($_SESSION['currency'] == 'GEL') ||
            ($_SESSION['currency'] == 'GHS') ||
            ($_SESSION['currency'] == 'HKD') ||
            ($_SESSION['currency'] == 'HRK') ||
            ($_SESSION['currency'] == 'HUF') ||
            ($_SESSION['currency'] == 'IDR') ||
            ($_SESSION['currency'] == 'ILS') ||
            ($_SESSION['currency'] == 'INR') ||
            ($_SESSION['currency'] == 'JPY') ||
            ($_SESSION['currency'] == 'KES') ||
            ($_SESSION['currency'] == 'KRW') ||
            ($_SESSION['currency'] == 'LKR') ||
            ($_SESSION['currency'] == 'MAD') ||
            ($_SESSION['currency'] == 'MXN') ||
            ($_SESSION['currency'] == 'MYR') ||
            ($_SESSION['currency'] == 'NGN') ||
            ($_SESSION['currency'] == 'NOK') ||
            ($_SESSION['currency'] == 'NPR') ||
            ($_SESSION['currency'] == 'NZD') ||
            ($_SESSION['currency'] == 'PHP') ||
            ($_SESSION['currency'] == 'PKR') ||
            ($_SESSION['currency'] == 'PLN') ||
            ($_SESSION['currency'] == 'RON') ||
            ($_SESSION['currency'] == 'SEK') ||
            ($_SESSION['currency'] == 'SGD') ||
            ($_SESSION['currency'] == 'THB') ||
            ($_SESSION['currency'] == 'TRY') ||
            ($_SESSION['currency'] == 'UAH') ||
            ($_SESSION['currency'] == 'USD') ||
            ($_SESSION['currency'] == 'VND') ||
            ($_SESSION['currency'] == 'ZAR')
        ) {
            $accountHolderName = $this->security->xss_clean($input->post("accountHolderName"));
            // IBAN
            if (($_SESSION['currency'] == 'AED') ||
                ($_SESSION['currency'] == 'BGN') ||
                ($_SESSION['currency'] == 'CHF') ||
                ($_SESSION['currency'] == 'DKK') ||
                ($_SESSION['currency'] == 'EGP') ||
                ($_SESSION['currency'] == 'EUR') ||
                ($_SESSION['currency'] == 'GEL') ||
                ($_SESSION['currency'] == 'HKD') ||
                ($_SESSION['currency'] == 'HRK') ||
                ($_SESSION['currency'] == 'ILS') ||
                ($_SESSION['currency'] == 'NOK') ||
                ($_SESSION['currency'] == 'PKR') ||
                ($_SESSION['currency'] == 'PLN') ||
                ($_SESSION['currency'] == 'RON') ||
                ($_SESSION['currency'] == 'SEK') ||
                ($_SESSION['currency'] == 'TRY')
            ) {
                $IBAN = $this->security->xss_clean($input->post("IBAN"));
            }
            // TAXID
            if (($_SESSION['currency'] == 'ARS')) {
                $taxId = $this->security->xss_clean($input->post("taxId"));
            }
            // accountNumber
            if (($_SESSION['currency'] == 'ARS') ||
                ($_SESSION['currency'] == 'AUD') ||
                ($_SESSION['currency'] == 'BDT') ||
                ($_SESSION['currency'] == 'BGN') ||
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CAD') ||
                ($_SESSION['currency'] == 'CHF') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'CNY') ||
                ($_SESSION['currency'] == 'CZK') ||
                ($_SESSION['currency'] == 'DKK') ||
                ($_SESSION['currency'] == 'EGP') ||
                ($_SESSION['currency'] == 'EUR') ||
                ($_SESSION['currency'] == 'GBP') ||
                ($_SESSION['currency'] == 'GEL') ||
                ($_SESSION['currency'] == 'GHS') ||
                ($_SESSION['currency'] == 'HKD') ||
                ($_SESSION['currency'] == 'HRK') ||
                ($_SESSION['currency'] == 'HUF') ||
                ($_SESSION['currency'] == 'IDR') ||
                ($_SESSION['currency'] == 'ILS') ||
                ($_SESSION['currency'] == 'INR') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'KES') ||
                ($_SESSION['currency'] == 'KRW') ||
                ($_SESSION['currency'] == 'LKR') ||
                ($_SESSION['currency'] == 'MAD') ||
                ($_SESSION['currency'] == 'MXN') ||
                ($_SESSION['currency'] == 'MYR') ||
                ($_SESSION['currency'] == 'NGN') ||
                ($_SESSION['currency'] == 'NOK') ||
                ($_SESSION['currency'] == 'NPR') ||
                ($_SESSION['currency'] == 'NZD') ||
                ($_SESSION['currency'] == 'PHP') ||
                ($_SESSION['currency'] == 'PKR') ||
                ($_SESSION['currency'] == 'PLN') ||
                ($_SESSION['currency'] == 'RON') ||
                ($_SESSION['currency'] == 'SEK') ||
                ($_SESSION['currency'] == 'SGD') ||
                ($_SESSION['currency'] == 'THB') ||
                ($_SESSION['currency'] == 'TRY') ||
                ($_SESSION['currency'] == 'UAH') ||
                ($_SESSION['currency'] == 'USD') ||
                ($_SESSION['currency'] == 'VND') ||
                ($_SESSION['currency'] == 'ZAR')
            ) {
                $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            }

            // Address
            if (
                ($_SESSION['currency'] == 'AUD') ||
                ($_SESSION['currency'] == 'PHP') ||
                ($_SESSION['currency'] == 'THB') ||
                ($_SESSION['currency'] == 'UAH') ||
                ($_SESSION['currency'] == 'USD')
            ) {
                if (($_SESSION['currency'] == 'AUD')) {
                    $countryCode = $this->security->xss_clean($input->post("countryCode"));
                } else {
                    $country = $this->security->xss_clean($input->post("country"));
                }

                $postCode = $this->security->xss_clean($input->post("postCode"));
                $city = $this->security->xss_clean($input->post("city"));
                $firstLine = $this->security->xss_clean($input->post("firstLine"));
            }
            // accountType
            if (
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CAD') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'USD')
            ) {
                $accountType = $this->security->xss_clean($input->post("accountType"));
            }

            // bsbCode
            if (($_SESSION['currency'] == 'AUD')) {
                $bsbCode = $this->security->xss_clean($input->post("bsbCode"));
            }
            // bankCode
            if (
                ($_SESSION['currency'] == 'BDT') ||
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'CZK') ||
                ($_SESSION['currency'] == 'GHS') ||
                ($_SESSION['currency'] == 'IDR') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'KES') ||
                ($_SESSION['currency'] == 'KRW') ||
                ($_SESSION['currency'] == 'LKR') ||
                ($_SESSION['currency'] == 'MAD') ||
                ($_SESSION['currency'] == 'NGN') ||
                ($_SESSION['currency'] == 'NPR') ||
                ($_SESSION['currency'] == 'PHP') ||
                ($_SESSION['currency'] == 'SGD') ||
                ($_SESSION['currency'] == 'THB')
            ) {
                $bankCode = $this->security->xss_clean($input->post("bankCode"));
            }
            // branchCode
            if (
                ($_SESSION['currency'] == 'BDT') ||
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'JPY') ||
                ($_SESSION['currency'] == 'LKR') ||
                ($_SESSION['currency'] == 'VND')
            ) {
                $branchCode = $this->security->xss_clean($input->post("branchCode"));
            }

            // cpf
            if (($_SESSION['currency'] == 'BRL')) {
                $cpf = $this->security->xss_clean($input->post("cpf"));
            }

            // rut
            if (($_SESSION['currency'] == 'CLP')) {
                $rut = $this->security->xss_clean($input->post("rut"));
            }

            // sortCode
            if (($_SESSION['currency'] == 'GBP')) {
                $sortCode = $this->security->xss_clean($input->post("sortCode"));
            }

            // ifscCode
            if (($_SESSION['currency'] == 'INR')) {
                $ifscCode = $this->security->xss_clean($input->post("ifscCode"));
            }

            // clabe
            if (($_SESSION['currency'] == 'MXN')) {
                $clabe = $this->security->xss_clean($input->post("clabe"));
            }

            // clabe
            if (($_SESSION['currency'] == 'MYR') ||
                ($_SESSION['currency'] == 'VND') ||
                ($_SESSION['currency'] == 'ZAR')
            ) {
                $swiftCode = $this->security->xss_clean($input->post("swiftCode"));
            }

            // dateOfBirth & email
            if (($_SESSION['currency'] == 'KRW')) {
                $dateOfBirth = $this->security->xss_clean($input->post("dateOfBirth"));
                $email = $this->security->xss_clean($input->post("email"));
            }

            // phoneNumber
            if (
                ($_SESSION['currency'] == 'BRL') ||
                ($_SESSION['currency'] == 'CLP') ||
                ($_SESSION['currency'] == 'UAH')
            ) {
                $phoneNumber = $this->security->xss_clean($input->post("phoneNumber"));
            }

            // abartn
            if ($_SESSION['currency'] == 'USD') {
                $abartn = $this->security->xss_clean($input->post("abartn"));
            }
        }

        if ($_SESSION["currency"] == "USD") {
            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "legalType" =>  "PRIVATE",
                    "abartn" =>  $abartn,
                    "accountNumber" =>  $accountNumber,
                    "accountType" =>  "CHECKING",
                    "address"  =>  array(
                        "country" =>  $country,
                        "city" =>  $city,
                        "postCode" =>  $postCode,
                        "firstLine" =>  $firstLine
                    )
                )
            );
        }
        if ($_SESSION["currency"] == "EUR") {
            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "legalType" => "PRIVATE",
                    "IBAN" => $IBAN
                )
            );
        }
        if ($_SESSION["currency"] == "AED") {
            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "legalType" => "PRIVATE",
                    "IBAN"         => $IBAN,
                )
            );
        }
        $result = apitrackless(URLAPI . "/v1/member/wallet/bankTransfer", json_encode($mdata));

        if (@$result->code != 200) {
            $this->session->set_flashdata("failed", $result->message);
            redirect(base_url() . "bank");
        }

        $data['title'] = "Freedy - Wallet to Bank Completed";

        $body["data"] = array(
            "amount"    => $amount
        );

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom');
        $this->load->view('member/tobank/bank-notif', $body);
        $this->load->view('tamplate/footer');
    }
}