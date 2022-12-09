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

    public function bankconfirm()
    {
        $input    = $this->input;
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

        $this->form_validation->set_rules('accountHolderName', 'Recipient Name', 'trim|required');

        if ($_SESSION["currency"] == "USD") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim|required');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('postCode', 'Post Code', 'trim');
            $this->form_validation->set_rules('firstLine', 'First Line', 'trim');
            $this->form_validation->set_rules('accountType', 'Account Type', 'trim');
            $this->form_validation->set_rules('countryCode', 'Country initial', 'trim');
            $this->form_validation->set_rules('state', 'State initial', 'trim');
            $this->form_validation->set_rules('abartn', 'Abartn', 'trim');
            $this->form_validation->set_rules('swiftCode', 'swift Code', 'trim');
        }

        if ($_SESSION["currency"] == "EUR") {
            $this->form_validation->set_rules('IBAN', 'IBAN', 'trim');
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('swiftCode', 'Swift Code', 'trim');
        }

        if ($_SESSION["currency"] == "AED") {
            $this->form_validation->set_rules('IBAN', 'IBAN', 'trim');
        }

        if ($_SESSION["currency"] == "AED") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('taxId', 'TAX ID', 'trim');
        }

        if ($_SESSION["currency"] == "AUD") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('postCode', 'Post Code', 'trim');
            $this->form_validation->set_rules('firstLine', 'First Line', 'trim');
            $this->form_validation->set_rules('countryCode', 'Country initial', 'trim');
            $this->form_validation->set_rules('state', 'State initial', 'trim');
            $this->form_validation->set_rules('bsbCode', 'BSB Code', 'trim');
        }

        if ($_SESSION["currency"] == "BDT") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('bankCode', 'Bank Code', 'trim');
            $this->form_validation->set_rules('branchCode', 'Branch Code', 'trim');
        }

        if ($_SESSION["currency"] == "CAD") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('accountType', 'Account Type', 'trim');
            $this->form_validation->set_rules('institutionNumber', 'Institution Number', 'trim');
            $this->form_validation->set_rules('transitNumber', 'Transit Number', 'trim');
        }

        if ($_SESSION["currency"] == "CLP") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('accountType', 'Account Type', 'trim');
            $this->form_validation->set_rules('bankCode', 'Bank Code', 'trim');
            $this->form_validation->set_rules('rut', 'Rut', 'trim');
            $this->form_validation->set_rules('phoneNumber', 'Phone Number', 'trim');
        }

        if ($_SESSION["currency"] == "CNY") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('swiftCode', 'Swift Code', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('country', 'Country', 'trim');
            $this->form_validation->set_rules('firstLine', 'FirstLine', 'trim');
            $this->form_validation->set_rules('postCode', 'Post Code', 'trim');
            $this->form_validation->set_rules('legalType', 'Legal Type', 'trim');
            $this->form_validation->set_rules('type', 'Type', 'trim');
        }


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect(base_url() . "bank/" . $this->security->xss_clean($input->post("url")));
        }

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
        $temp["accountHolderName"] = $this->security->xss_clean($input->post("accountHolderName"));
        $temp["amount"]            = $this->security->xss_clean($input->post("amount"));
        $temp["causal"]            = $this->security->xss_clean($input->post("causal"));
        $temp["transfer_type"]     = $transfer_type;

        if ($_SESSION["currency"] == "USD") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["city"] = $this->security->xss_clean($input->post("city"));
            $temp["postCode"] = $this->security->xss_clean($input->post("postCode"));
            $temp["firstLine"] = $this->security->xss_clean($input->post("firstLine"));
            $temp["accountType"] = $this->security->xss_clean($input->post("accountType"));
            $temp["state"] = $this->security->xss_clean($input->post("state"));
            $temp["countryCode"] = $this->security->xss_clean($input->post("countryCode"));
            $temp["abartn"] = $this->security->xss_clean($input->post("abartn"));
            $temp["swiftCode"] = $this->security->xss_clean($input->post("swiftCode"));
        }

        if ($_SESSION["currency"] == "EUR") {
            $temp["IBAN"] = $this->security->xss_clean($input->post("IBAN"));
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["swiftCode"] = $this->security->xss_clean($input->post("swiftCode"));
        }

        if ($_SESSION["currency"] == "AED") {
            $temp["IBAN"] = $this->security->xss_clean($input->post("IBAN"));
        }

        if ($_SESSION["currency"] == "ARS") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["taxId"] = $this->security->xss_clean($input->post("taxId"));
        }

        if ($_SESSION["currency"] == "AUD") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["city"] = $this->security->xss_clean($input->post("city"));
            $temp["postCode"] = $this->security->xss_clean($input->post("postCode"));
            $temp["firstLine"] = $this->security->xss_clean($input->post("firstLine"));
            $temp["countryCode"] = $this->security->xss_clean($input->post("countryCode"));
            $temp["state"] = $this->security->xss_clean($input->post("state"));
            $temp["bsbCode"] = $this->security->xss_clean($input->post("bsbCode"));
        }

        if ($_SESSION["currency"] == "BDT") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["bankCode"] = $this->security->xss_clean($input->post("bankCode"));
            $temp["branchCode"] = $this->security->xss_clean($input->post("branchCode"));
        }

        if ($_SESSION["currency"] == "CAD") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["accountType"] = $this->security->xss_clean($input->post("accountType"));
            $temp["institutionNumber"] = $this->security->xss_clean($input->post("institutionNumber"));
            $temp["transitNumber"] = $this->security->xss_clean($input->post("transitNumber"));
        }

        if ($_SESSION["currency"] == "CLP") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["accountType"] = $this->security->xss_clean($input->post("accountType"));
            $temp["bankCode"] = $this->security->xss_clean($input->post("bankCode"));
            $temp["rut"] = $this->security->xss_clean($input->post("rut"));
            $temp["phoneNumber"] = $this->security->xss_clean($input->post("phoneNumber"));
        }

        if ($_SESSION["currency"] == "CNY") {
            $temp["accountNumber"] = $this->security->xss_clean($input->post("accountNumber"));
            $temp["swiftCode"] = $this->security->xss_clean($input->post("swiftCode"));
            $temp["city"] = $this->security->xss_clean($input->post("city"));
            $temp["country"] = $this->security->xss_clean($input->post("country"));
            $temp["firstLine"] = $this->security->xss_clean($input->post("firstLine"));
            $temp["postCode"] = $this->security->xss_clean($input->post("postCode"));
            $temp["legalType"] = $this->security->xss_clean($input->post("legalType"));
            $temp["type"] = $this->security->xss_clean($input->post("type"));
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
            $this->form_validation->set_rules('accountHolderName', 'Recipient Name', 'trim|required');
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim|required');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('postCode', 'Post Code', 'trim');
            $this->form_validation->set_rules('firstLine', 'First Line', 'trim');
            $this->form_validation->set_rules('accountType', 'Account Type', 'trim');
            $this->form_validation->set_rules('countryCode', 'Country initial', 'trim');
            $this->form_validation->set_rules('state', 'State initial', 'trim');
            $this->form_validation->set_rules('abartn', 'Abartn', 'trim');
            $this->form_validation->set_rules('swiftCode', 'Swift Code', 'trim');
        }

        if ($_SESSION["currency"] == "EUR") {
            $this->form_validation->set_rules('IBAN', 'IBAN', 'trim');
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('swiftCode', 'Swift Code', 'trim');
        }
        if ($_SESSION["currency"] == "AED") {
            $this->form_validation->set_rules('IBAN', 'IBAN', 'trim');
        }
        if ($_SESSION["currency"] == "ARS") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('taxId', 'TAX ID', 'trim');
        }

        if ($_SESSION["currency"] == "AUD") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('postCode', 'Post Code', 'trim');
            $this->form_validation->set_rules('firstLine', 'First Line', 'trim');
            $this->form_validation->set_rules('countryCode', 'Country initial', 'trim');
            $this->form_validation->set_rules('state', 'State initial', 'trim');
            $this->form_validation->set_rules('bsbCode', 'BSB Code', 'trim');
        }

        if ($_SESSION["currency"] == "BDT") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('bankCode', 'Bank Code', 'trim');
            $this->form_validation->set_rules('branchCode', 'Branch Code', 'trim');
        }

        if ($_SESSION["currency"] == "CAD") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('accountType', 'Account Type', 'trim');
            $this->form_validation->set_rules('institutionNumber', 'Institution Number', 'trim');
            $this->form_validation->set_rules('transitNumber', 'Transit Number', 'trim');
        }

        if ($_SESSION["currency"] == "CLP") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('accountType', 'Account Type', 'trim');
            $this->form_validation->set_rules('bankCode', 'Bank Code', 'trim');
            $this->form_validation->set_rules('rut', 'Rut', 'trim');
            $this->form_validation->set_rules('phoneNumber', 'Phone Number', 'trim');
        }

        if ($_SESSION["currency"] == "CNY") {
            $this->form_validation->set_rules('accountNumber', 'Account Number', 'trim');
            $this->form_validation->set_rules('swiftCode', 'Swift Code', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim');
            $this->form_validation->set_rules('country', 'Country', 'trim');
            $this->form_validation->set_rules('firstLine', 'FirstLine', 'trim');
            $this->form_validation->set_rules('postCode', 'Post Code', 'trim');
            $this->form_validation->set_rules('legalType', 'Legal Type', 'trim');
            $this->form_validation->set_rules('type', 'Type', 'trim');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect(base_url() . "bank");
        }

        $input = $this->input;
        $transfer_type = $this->security->xss_clean($input->post("transfer_type"));
        $accountHolderName = $this->security->xss_clean($input->post("accountHolderName"));
        $amount = $this->security->xss_clean($input->post("amount"));
        $causal = $this->security->xss_clean($input->post("causal"));
        $transfer_type = $transfer_type;

        if ($_SESSION["currency"] == "USD") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $city = $this->security->xss_clean($input->post("city"));
            $postCode = $this->security->xss_clean($input->post("postCode"));
            $firstLine = $this->security->xss_clean($input->post("firstLine"));
            $accountType = $this->security->xss_clean($input->post("accountType"));
            $countryCode = $this->security->xss_clean($input->post("countryCode"));
            $state = $this->security->xss_clean($input->post("state"));
            $abartn = $this->security->xss_clean($input->post("abartn"));
            $swiftCode = $this->security->xss_clean($input->post("swiftCode"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => @$accountNumber,
                    "accountType"       => $accountType,
                    "abartn"            => $abartn,
                    "firstLine"         => $firstLine,
                    "city"              => $city,
                    "state"             => $state,
                    "postCode"          => $postCode,
                    "swiftCode"         => $swiftCode,
                    "countryCode"       => @$countryCode,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "EUR") {
            $IBAN = $this->security->xss_clean($input->post("IBAN"));
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $swiftCode = $this->security->xss_clean($input->post("swiftCode"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "IBAN"              => $IBAN,
                    "accountNumber"     => @$accountNumber,
                    "swiftCode"         => @$swiftCode,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "AED") {
            $IBAN = $this->security->xss_clean($input->post("IBAN"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "IBAN"              => $IBAN,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "ARS") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $taxId = $this->security->xss_clean($input->post("taxId"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => $accountNumber,
                    "taxId"             => $taxId,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "AUD") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $city = $this->security->xss_clean($input->post("city"));
            $postCode = $this->security->xss_clean($input->post("postCode"));
            $firstLine = $this->security->xss_clean($input->post("firstLine"));
            $countryCode = $this->security->xss_clean($input->post("countryCode"));
            $state = $this->security->xss_clean($input->post("state"));
            $bsbCode = $this->security->xss_clean($input->post("bsbCode"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => $accountNumber,
                    "city"              => $city,
                    "postCode"          => $postCode,
                    "firstLine"         => $firstLine,
                    "countryCode"       => $countryCode,
                    "state"             => $state,
                    "bsbCode"           => $bsbCode,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "BDT") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $bankCode = $this->security->xss_clean($input->post("bankCode"));
            $branchCode = $this->security->xss_clean($input->post("branchCode"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => $accountNumber,
                    "bankCode"          => $bankCode,
                    "branchCode"        => $branchCode,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "CAD") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $accountType = $this->security->xss_clean($input->post("accountType"));
            $institutionNumber = $this->security->xss_clean($input->post("institutionNumber"));
            $transitNumber = $this->security->xss_clean($input->post("transitNumber"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => $accountNumber,
                    "accountType"       => $accountType,
                    "institutionNumber" => $institutionNumber,
                    "transitNumber"     => $transitNumber,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "CLP") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $accountType = $this->security->xss_clean($input->post("accountType"));
            $bankCode = $this->security->xss_clean($input->post("bankCode"));
            $rut = $this->security->xss_clean($input->post("rut"));
            $phoneNumber = $this->security->xss_clean($input->post("phoneNumber"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => $accountNumber,
                    "accountType"       => $accountType,
                    "bankCode"          => $bankCode,
                    "rut"               => $rut,
                    "phoneNumber"       => $phoneNumber,
                    "causal"            => @$causal,
                )
            );
        }

        if ($_SESSION["currency"] == "CNY") {
            $accountNumber = $this->security->xss_clean($input->post("accountNumber"));
            $swiftCode = $this->security->xss_clean($input->post("swiftCode"));
            $city = $this->security->xss_clean($input->post("city"));
            $country = $this->security->xss_clean($input->post("country"));
            $firstLine = $this->security->xss_clean($input->post("firstLine"));
            $postCode = $this->security->xss_clean($input->post("postCode"));
            $legalType = $this->security->xss_clean($input->post("legalType"));
            $type = $this->security->xss_clean($input->post("type"));

            $mdata = array(
                "userid"            => $_SESSION["user_id"],
                "currency"          => $_SESSION["currency"],
                "amount"            => $amount,
                "transfer_type"     => $transfer_type,
                "bank_detail"   => array(
                    "accountHolderName" => $accountHolderName,
                    "accountNumber"     => $accountNumber,
                    "swiftCode"         => $swiftCode,
                    "city"              => $city,
                    "country"           => $country,
                    "firstLine"         => $firstLine,
                    "postCode"          => $postCode,
                    "legalType"         => $legalType,
                    "type"              => $type,
                    "causal"            => @$causal,
                )
            );
        }

        $result = apitrackless(URLAPI . "/v1/member/wallet/bankTransfer", json_encode($mdata));

        if (@$result->code != 200) {
            if (@$result->code == 5055) {
                $this->session->set_flashdata("failed", "Something wrong, please try again later!");
                redirect(base_url() . "bank");
            }
            $this->session->set_flashdata("failed", $result->message);
            redirect(base_url() . "bank");
        }

        $data['title'] = "Freedy - Wallet to Bank Completed";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom');
        $this->load->view('member/tobank/bank-notif');
        $this->load->view('tamplate/footer');
    }
}