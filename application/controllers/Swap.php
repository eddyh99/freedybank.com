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
        $mdata=array(
                "userid"=>$_SESSION["user_id"]
            );
        $url="https://api.tracklessbank.com/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url,json_encode($mdata))->message;

        $data['title'] = "Freedy - Swap";
        $footer['extra'] = "member/swap/js/js_swap";
        
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/swap/swap',$body);
        $this->load->view('tamplate/footer',$footer);
    }

    public function confirm()
    {
        $data['title'] = "Freedy - Swap";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/swap/swap-confirm');
        $this->load->view('tamplate/footer');
    }

    public function notif()
    {
        $data['title'] = "Freedy - Swap";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/swap/swap-notif');
        $this->load->view('tamplate/footer');
    }
}