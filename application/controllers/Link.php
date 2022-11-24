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
        $url_price = "https://api.tracklessbank.com/v1/admin/cost/getCost?currency=" . $curr;
        $url_curr = "https://api.tracklessbank.com/v1/trackless/currency/getsymbol?currency=" . $curr;
        $price   = apitrackless($url_price)->message;
        $currency   = apitrackless($url_curr)->message;

        $data = array(
            "title"     => "FreedyBank",
            "content"   => "auth/landingpage/currency-list-price",
            "currency"   => $currency,
            "price"   => $price,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
}