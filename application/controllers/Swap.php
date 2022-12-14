<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Swap extends CI_Controller
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
        $url = URLAPI . "/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url, json_encode($mdata))->message;

        $data['title'] = NAMETITLE . " - Swap";
        $footer['extra'] = "member/swap/js/js_swap";

        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/swap/swap', $body);
        $this->load->view('tamplate/footer', $footer);
    }

    public function swapcalculate()
    {
        $this->form_validation->set_rules('toswap', 'Currency Target', 'trim|required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            header("HTTP/1.1 500 Internal Server Error");
            $error = array(
                "token"     => $this->security->get_csrf_hash(),
                "message"   => validation_errors()
            );
            echo json_encode($error);
            return;
        }

        $input        = $this->input;
        $target        = $this->security->xss_clean($input->post("toswap"));
        $amount        = $this->security->xss_clean($input->post("amount"));

        if ($amount > 0) {
            $mdata  = array(
                "source"    => $_SESSION["currency"],
                "target"    => $target,
                "amount"    => $amount,
                "userid"    => $_SESSION["user_id"]
            );
            $result = apitrackless(URLAPI . "/v1/member/swap/getSummary", json_encode($mdata));
            if (@$result->code != 200) {
                header("HTTP/1.1 500 Internal Server Error");
                $error = array(
                    "token"     => $this->security->get_csrf_hash(),
                    "message"   => $result->message
                );
                echo json_encode($error);
                return;
            }

            $data = array(
                "quoteid"   => $result->message->quoteid,
                "token"     => $this->security->get_csrf_hash(),
                "receive"   => $result->message->receive
            );
            echo json_encode($data);
        } else {
            header("HTTP/1.1 500 Internal Server Error");
            $error = array(
                "token"     => $this->security->get_csrf_hash(),
                "message"   => "Amount swap can't be negative"
            );
            echo json_encode($error);
            return;
        }
    }
    public function confirm()
    {
        $this->form_validation->set_rules('toswap', 'Currency Target', 'trim|required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('quoteid', 'quoteid', 'trim|required');
        $this->form_validation->set_rules('amountget', 'Amount Get', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect('swap');
        }

        $input    = $this->input;
        $target = $this->security->xss_clean($input->post("toswap"));
        $data = array(
            "target"    => $target,
            "amount"    => $this->security->xss_clean(number_format($input->post("amount"), 2)),
            "quoteid"   => $this->security->xss_clean($input->post("quoteid")),
            "amountget" => $this->security->xss_clean($input->post("amountget")),
            "symbol"    => apitrackless(URLAPI . "/v1/member/currency/getByCurrency?currency=" . $target . "&userid=" . $_SESSION["user_id"])->message->symbol
        );

        $data['title']  = NAMETITLE . " - Swap";
        $body["data"] = $data;
        $footer['extra'] = "admin/js/js_btn_disabled";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/swap/swap-confirm', $body);
        $this->load->view('tamplate/footer', $footer);
    }


    public function notif()
    {
        $this->form_validation->set_rules('toswap', 'Currency Target', 'trim|required|max_length[3]|min_length[3]');
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|greater_than[0]');
        $this->form_validation->set_rules('quoteid', 'quoteid', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("failed", validation_errors());
            redirect('swap');
        }

        $input    = $this->input;
        $target = $this->security->xss_clean($input->post("toswap"));
        $amount = $this->security->xss_clean($input->post("amount"));
        $quoteid = $this->security->xss_clean($input->post("quoteid"));

        if ($amount > 0) {
            $mdata = array(
                "userid"    => $_SESSION["user_id"],
                "source"    => $_SESSION["currency"],
                "target"    => $target,
                "amount"    => $amount,
                "quoteid"   => $quoteid,
            );

            $result = apitrackless(URLAPI . "/v1/member/swap/swapCurrency", json_encode($mdata));
            if (@$result->code != 200) {
                header("HTTP/1.1 500 Internal Server Error");
                $error = array(
                    "token"     => $this->security->get_csrf_hash(),
                    "message"   => $result->message
                );
                $this->session->set_flashdata("failed", $result->message);
                redirect('swap');
            }


            $data['title'] = NAMETITLE . " - Swap";
            $body["data"] = array(
                "amount"    => $amount,
                "amountget" => $result->message->receive,
                "symbol"    => apitrackless(URLAPI . "/v1/member/currency/getByCurrency?currency=" . $target . "&userid=" . $_SESSION["user_id"])->message->symbol
            );

            $this->load->view('tamplate/header', $data);
            $this->load->view('member/swap/swap-notif', $body);
            $this->load->view('tamplate/footer');
        }
    }
}