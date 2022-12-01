<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Link extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function work_with_us()
    {
        $data = array(
            "title"     => "FreedyBank - Work with us",
            "content"   => "auth/landingpage/work-us",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function translate()
    {
        $data = array(
            "title"     => "FreedyBank - Work with us",
            "content"   => "auth/landingpage/translate",
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function whychoosing()
    {
        $choose = $_GET['choose'];

        $data = array(
            "title"     => "FreedyBank - Work with us",
            "content"   => "auth/landingpage/why-choosing-us",
            "choose"   => $choose,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function service()
    {
        $service = $_GET['service'];

        $data = array(
            "title"     => "FreedyBank - Work with us",
            "content"   => "auth/landingpage/service",
            "service"   => $service,
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function features()
    {
        $features = $_GET['features'];

        $data = array(
            "title"     => "FreedyBank - Work with us",
            "content"   => "auth/landingpage/features",
            "features"   => $features,
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function lern_transparency()
    {
        $url = "https://api.tracklessbank.com/v1/trackless/currency/getAllCurrency";
        $currency   = apitrackless($url)->message;

        $data = array(
            "title"     => "FreedyBank",
            "content"   => "auth/landingpage/lern-transparency",
            "currency"   => $currency,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function price_currency()
    {
        $curr = $_GET['currency'];
        $url_cost = "https://api.tracklessbank.com/v1/admin/cost/getCost?currency=" . $curr;
        $url_fee = "https://api.tracklessbank.com/v1/admin/fee/getFee?currency=" . $curr;
        $url_curr = "https://api.tracklessbank.com/v1/trackless/currency/getAllCurrency";
        $cost   = apitrackless($url_cost);
        $fee   = apitrackless($url_fee);
        $currency   = apitrackless($url_curr)->message;

        $mdatacost = array();
        if (@$cost->code == 5052) {
            $mdatacost = array(
                "topup_circuit_fxd" => number_format(0, 2, ".", ","),
                "topup_circuit_pct" => number_format(0, 2, ".", ","),
                "topup_outside_fxd" => number_format(0, 2, ".", ","),
                "topup_outside_pct" => number_format(0, 2, ".", ","),
                "wallet_sender_fxd" => number_format(0, 2, ".", ","),
                "wallet_sender_pct" => number_format(0, 2, ".", ","),
                "wallet_receiver_fxd" => number_format(0, 2, ".", ","),
                "wallet_receiver_pct" => number_format(0, 2, ".", ","),
                "walletbank_circuit_fxd" => number_format(0, 2, ".", ","),
                "walletbank_circuit_pct" => number_format(0, 2, ".", ","),
                "walletbank_outside_fxd" => number_format(0, 2, ".", ","),
                "walletbank_outside_pct" => number_format(0, 2, ".", ","),
            );
        } else {
            $mdatacost = array(
                "topup_circuit_fxd" => number_format($cost->message->topup_circuit_fxd, 2, ".", ","),
                "topup_circuit_pct" => number_format($cost->message->topup_circuit_pct * 100, 2, ".", ","),
                "topup_outside_fxd" => number_format($cost->message->topup_outside_fxd, 2, ".", ","),
                "topup_outside_pct" => number_format($cost->message->topup_outside_pct * 100, 2, ".", ","),
                "wallet_sender_fxd" => number_format($cost->message->wallet_sender_fxd, 2, ".", ","),
                "wallet_sender_pct" => number_format($cost->message->wallet_sender_pct * 100, 2, ".", ","),
                "wallet_receiver_fxd" => number_format($cost->message->wallet_receiver_fxd, 2, ".", ","),
                "wallet_receiver_pct" => number_format($cost->message->wallet_receiver_pct * 100, 2, ".", ","),
                "walletbank_circuit_fxd" => number_format($cost->message->walletbank_circuit_fxd, 2, ".", ","),
                "walletbank_circuit_pct" => number_format($cost->message->walletbank_circuit_pct * 100, 2, ".", ","),
                "walletbank_outside_fxd" => number_format($cost->message->walletbank_outside_fxd, 2, ".", ","),
                "walletbank_outside_pct" => number_format($cost->message->walletbank_outside_pct * 100, 2, ".", ","),
            );
        }

        $mdatafee = array();
        if (@$fee->code == 5052) {
            $mdatafee = array(
                "topup_circuit_fxd" => number_format(0, 2, ".", ","),
                "topup_circuit_pct" => number_format(0, 2, ".", ","),
                "topup_outside_fxd" => number_format(0, 2, ".", ","),
                "topup_outside_pct" => number_format(0, 2, ".", ","),
                "wallet_sender_fxd" => number_format(0, 2, ".", ","),
                "wallet_sender_pct" => number_format(0, 2, ".", ","),
                "wallet_receiver_fxd" => number_format(0, 2, ".", ","),
                "wallet_receiver_pct" => number_format(0, 2, ".", ","),
                "walletbank_circuit_fxd" => number_format(0, 2, ".", ","),
                "walletbank_circuit_pct" => number_format(0, 2, ".", ","),
                "walletbank_outside_fxd" => number_format(0, 2, ".", ","),
                "walletbank_outside_pct" => number_format(0, 2, ".", ","),
                "referral_send_fxd" => number_format(0, 2, ".", ","),
                "referral_send_pct" => number_format(0, 2, ".", ","),
                "referral_receive_fxd" => number_format(0, 2, ".", ","),
                "referral_receive_pct" => number_format(0, 2, ".", ","),
                "referral_topup_fxd" => number_format(0, 2, ".", ","),
                "referral_topup_pct" => number_format(0, 2, ".", ","),
                // "referral_bank_fxd" => number_format(0, 2, ".", ","),
                // "referral_bank_pct" => number_format(0, 2, ".", ","),
            );
        } else {
            $mdatafee = array(
                "topup_circuit_fxd" => number_format($fee->message->topup_circuit_fxd, 2, ".", ","),
                "topup_circuit_pct" => number_format($fee->message->topup_circuit_pct * 100, 2, ".", ","),
                "topup_outside_fxd" => number_format($fee->message->topup_outside_fxd, 2, ".", ","),
                "topup_outside_pct" => number_format($fee->message->topup_outside_pct * 100, 2, ".", ","),
                "wallet_sender_fxd" => number_format($fee->message->wallet_sender_fxd, 2, ".", ","),
                "wallet_sender_pct" => number_format($fee->message->wallet_sender_pct * 100, 2, ".", ","),
                "wallet_receiver_fxd" => number_format($fee->message->wallet_receiver_fxd, 2, ".", ","),
                "wallet_receiver_pct" => number_format($fee->message->wallet_receiver_pct * 100, 2, ".", ","),
                "walletbank_circuit_fxd" => number_format($fee->message->walletbank_circuit_fxd, 2, ".", ","),
                "walletbank_circuit_pct" => number_format($fee->message->walletbank_circuit_pct * 100, 2, ".", ","),
                "walletbank_outside_fxd" => number_format($fee->message->walletbank_outside_fxd, 2, ".", ","),
                "walletbank_outside_pct" => number_format($fee->message->walletbank_outside_pct * 100, 2, ".", ","),
                "referral_send_fxd" => number_format($fee->message->referral_send_fxd, 2, ".", ","),
                "referral_send_pct" => number_format($fee->message->referral_send_pct * 100, 2, ".", ","),
                "referral_receive_fxd" => number_format($fee->message->referral_receive_fxd, 2, ".", ","),
                "referral_receive_pct" => number_format($fee->message->referral_receive_pct * 100, 2, ".", ","),
                "referral_topup_fxd" => number_format($fee->message->referral_topup_fxd, 2, ".", ","),
                "referral_topup_pct" => number_format($fee->message->referral_topup_pct * 100, 2, ".", ","),
                // "referral_bank_fxd" => number_format($fee->message->referral_bank_fxd, 2, ".", ","),
                // "referral_bank_pct" => number_format($fee->message->referral_bank_pct * 100, 2, ".", ","),
            );
        }

        $data = array(
            "title"     => "FreedyBank",
            "content"   => "auth/landingpage/currency-list-price",
            "getcurrency"   => $curr,
            "currency"   => $currency,
            "cost"   => $mdatacost,
            "fee"   => $mdatafee,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function send_message()
    {
        $data = array(
            "title"     => "FreedyBank - Send Message",
            "content"   => "auth/landingpage/message",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    public function aboutus()
    {
        $data = array(
            "title"     => "FreedyBank - About Us",
            "content"   => "auth/landingpage/aboutus",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    public function faq()
    {
        $data = array(
            "title"     => "FreedyBank - FAQ",
            "content"   => "auth/landingpage/faq",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
}