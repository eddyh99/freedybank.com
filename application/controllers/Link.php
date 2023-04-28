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
            "title"     => NAMETITLE ,
            "content"   => "auth/landingpage/work-us",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    
    public function crypto()
    {
        $data = array(
            "title"     => NAMETITLE ,
            "content"   => "auth/landingpage/crypto",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    
    public function soon()
    {
        $data = array(
            "title"     => NAMETITLE ,
            "content"   => "auth/landingpage/soon",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    
    public function guide()
    {
        $data = array(
            "title"     => NAMETITLE ,
            "content"   => "auth/landingpage/guide",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    
    public function guides($item)
    {
        $guide = base64_decode($item);
        $data = array(
            "title"     => NAMETITLE ,
            "guide"     => $guide ,
            "content"   => "auth/landingpage/guides",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function translate()
    {
        $data = array(
            "title"     => NAMETITLE ,
            "content"   => "auth/landingpage/translate",
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function whychoosing()
    {
        $choose = $_GET['choose'];

        $data = array(
            "title"     => NAMETITLE ,
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
            "title"     => NAMETITLE ,
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
            "title"     => NAMETITLE ,
            "content"   => "auth/landingpage/features",
            "features"   => $features,
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function lern_transparency()
    {
        $url = URLAPI . "/v1/trackless/currency/getAllCurrency";
        $currency   = apitrackless($url)->message;

        $data = array(
            "title"     => NAMETITLE . "",
            "content"   => "auth/landingpage/lern-transparency",
            "currency"   => $currency,
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function price_currency()
    {
        $curr = $_GET['currency'];
        $url_cost = URLAPI . "/v1/admin/cost/getCost?currency=" . $curr;
        $url_fee = URLAPI . "/v1/admin/fee/getFee?currency=" . $curr;
        $url_curr = URLAPI . "/v1/trackless/currency/getAllCurrency";
        $cost   = apitrackless($url_cost);
        $fee   = apitrackless($url_fee);
        $currency   = apitrackless($url_curr)->message;

        $mdatacost = array();
        if (@$cost->code == 5052) {
            $mdatacost = array(
                "topup_circuit_fxd" => 0,
                "topup_circuit_pct" => 0,
                "topup_outside_fxd" => 0,
                "topup_outside_pct" => 0,
                "wallet_sender_fxd" => 0,
                "wallet_sender_pct" => 0,
                "wallet_receiver_fxd" => 0,
                "wallet_receiver_pct" => 0,
                "walletbank_circuit_fxd" => 0,
                "walletbank_circuit_pct" => 0,
                "walletbank_outside_fxd" => 0,
                "walletbank_outside_pct" => 0,
            );
        } else {
            $mdatacost = array(
                "topup_circuit_fxd" => $cost->message->topup_circuit_fxd,
                "topup_circuit_pct" => $cost->message->topup_circuit_pct * 100,
                "topup_outside_fxd" => $cost->message->topup_outside_fxd,
                "topup_outside_pct" => $cost->message->topup_outside_pct * 100,
                "wallet_sender_fxd" => $cost->message->wallet_sender_fxd,
                "wallet_sender_pct" => $cost->message->wallet_sender_pct * 100,
                "wallet_receiver_fxd" => $cost->message->wallet_receiver_fxd,
                "wallet_receiver_pct" => $cost->message->wallet_receiver_pct * 100,
                "walletbank_circuit_fxd" => $cost->message->walletbank_circuit_fxd,
                "walletbank_circuit_pct" => $cost->message->walletbank_circuit_pct * 100,
                "walletbank_outside_fxd" => $cost->message->walletbank_outside_fxd,
                "walletbank_outside_pct" => $cost->message->walletbank_outside_pct * 100,
            );
        }

        $mdatafee = array();
        if (@$fee->code == 5052) {
            $mdatafee = array(
                "topup_circuit_fxd" => 0,
                "topup_circuit_pct" => 0,
                "topup_outside_fxd" => 0,
                "topup_outside_pct" => 0,
                "wallet_sender_fxd" => 0,
                "wallet_sender_pct" => 0,
                "wallet_receiver_fxd" => 0,
                "wallet_receiver_pct" => 0,
                "walletbank_circuit_fxd" => 0,
                "walletbank_circuit_pct" => 0,
                "walletbank_outside_fxd" => 0,
                "walletbank_outside_pct" => 0,
                "referral_send_fxd" => 0,
                "referral_send_pct" => 0,
                "referral_receive_fxd" => 0,
                "referral_receive_pct" => 0,
                "referral_topup_fxd" => 0,
                "referral_topup_pct" => 0,
                "referral_bank_fxd" => 0,
                "referral_bank_pct" => 0,
            );
        } else {
            $mdatafee = array(
                "topup_circuit_fxd" => $fee->message->topup_circuit_fxd,
                "topup_circuit_pct" => $fee->message->topup_circuit_pct * 100,
                "topup_outside_fxd" => $fee->message->topup_outside_fxd,
                "topup_outside_pct" => $fee->message->topup_outside_pct * 100,
                "wallet_sender_fxd" => $fee->message->wallet_sender_fxd,
                "wallet_sender_pct" => $fee->message->wallet_sender_pct * 100,
                "wallet_receiver_fxd" => $fee->message->wallet_receiver_fxd,
                "wallet_receiver_pct" => $fee->message->wallet_receiver_pct * 100,
                "walletbank_circuit_fxd" => $fee->message->walletbank_circuit_fxd,
                "walletbank_circuit_pct" => $fee->message->walletbank_circuit_pct * 100,
                "walletbank_outside_fxd" => $fee->message->walletbank_outside_fxd,
                "walletbank_outside_pct" => $fee->message->walletbank_outside_pct * 100,
                "referral_send_fxd" => $fee->message->referral_send_fxd,
                "referral_send_pct" => $fee->message->referral_send_pct * 100,
                "referral_receive_fxd" => $fee->message->referral_receive_fxd,
                "referral_receive_pct" => $fee->message->referral_receive_pct * 100,
                "referral_topup_fxd" => $fee->message->referral_topup_fxd,
                "referral_topup_pct" => $fee->message->referral_topup_pct * 100,
                "referral_bank_fxd" => $fee->message->referral_bank_fxd,
                "referral_bank_pct" => $fee->message->referral_bank_pct * 100,
            );
        }

        $data = array(
            "title"     => NAMETITLE . "",
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
            "title"     => NAMETITLE . " - Send Message",
            "content"   => "auth/landingpage/message",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function check_email()
    {
        $email = $_GET['email'];
        $url = URLAPI . "/v1/auth/getmember_byemail?email=" . $email;
        $result   = apitrackless($url);

        $mdata = array();
        if (@$result->code == 200) {
            $mdata = array(
                "type" => 'show',
                "url" => $url,
            );
        } else {
            $mdata = array(
                "type" => 'hide',
                "url" => $url
            );
        }

        echo json_encode($mdata);
    }

    public function mailproses()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url("#contactus"));
            return;
        }

        $input      = $this->input;
        $email      = $this->security->xss_clean($input->post("email"));
        $message    = $this->security->xss_clean($input->post("message"));

        send_email($email, $message, $this->phpmailer_lib->load());
        $this->session->set_flashdata("success", "Message successfully sent!");
        redirect(base_url('#contactus'));
    }

    public function aboutus()
    {
        $data = array(
            "title"     => NAMETITLE . " - About Us",
            "content"   => "auth/landingpage/aboutus",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    public function faq()
    {
        $data = array(
            "title"     => NAMETITLE . " - FAQ",
            "content"   => "auth/landingpage/faq",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function privacy_policy()
    {
        $data = array(
            "title"     => NAMETITLE . " - Privacy Policy",
            "content"   => "auth/landingpage/privacy-policy",
            "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

     public function getref()
    {
        $this->form_validation->set_rules('ucode', 'Unique Code', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('link/service?service=8'));
            return;
        }

        $input  = $this->input;
        $ucode  = $this->security->xss_clean($input->post("ucode"));

        $url = URLAPI . "/v1/auth/getmember_byucode?ucode=" . $ucode;
        $result   = apitrackless($url);

        if (@$result->code != 200) {
            $this->session->set_flashdata('failed', $result->message);
            redirect(base_url('link/service?service=8'));
            return;
        }else{
            $_SESSION["findme_ucode"]=$ucode;
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }
    }

    public function findme()
    {   
        $findme = base64_decode($_GET['findme']);


        if (!isset($_SESSION["findme_ucode"])){
            $this->session->set_flashdata('failed', "Expired session, please try again");
            redirect(base_url('link/service?service=8'));
            return;
        }
        
        $url = URLAPI . "/v1/member/findme/get_countrylist";
        $country   = apitrackless($url)->message;
        
        $data = array(
            "title"     => NAMETITLE . " - Find Me",
            "content"   => "auth/landingpage/findme" ,
            "findme"    => $findme,
            "country"   => $country,
            "extra"     => "auth/landingpage/js/js_findme",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
    
    public function getstate(){
        $country    = $_GET["country"];
        $url    = URLAPI . "/v1/member/findme/get_statelist?country=".$country;
        $state  = apitrackless($url)->message;
        echo json_encode($state);
    }

    public function getcity(){
        $country    = $_GET["country"];
        $state      = $_GET["state"];
        $url    = URLAPI . "/v1/member/findme/get_citylist?country=".$country."&state=".$state;
        $city   = apitrackless($url)->message;
        echo json_encode($city);
    }
    
    public function findcategory(){
        $input      = $this->input;
        $findme     = base64_decode($this->security->xss_clean($input->post("findme")));
        
        if (!isset($_SESSION["findme_ucode"])){
            $this->session->set_flashdata('failed', "Expired session, please try again");
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }

        $this->form_validation->set_rules('city', 'City', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }

        $city    = $this->security->xss_clean($input->post("city"));
        $_SESSION["city"]=$city;

        $url      = URLAPI . "/v1/member/findme/get_category";
        $category = apitrackless($url)->message;
        

        $data = array(
            "title"     => NAMETITLE . " - Find Me",
            "content"   => "auth/landingpage/findme" ,
            "findme"    => $findme,
            "category"  => $category,
        );
        $this->load->view('tamplate/wrapper', $data);
    }

    public function findbusiness(){
        $input      = $this->input;
        $findme     = base64_decode($this->security->xss_clean($input->post("findme")));
        
        if (!isset($_SESSION["findme_ucode"]) || !isset($_SESSION["city"])){
            $this->session->set_flashdata('failed', "Expired session, please try again");
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }

        $kategori= array_filter(array_unique($this->security->xss_clean($input->post("kategori"))));
        if (!isset($kategori[0])){
            $this->session->set_flashdata('failed', "You should choose one category");
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }
        $_SESSION["kategori"]=$kategori;
        

        $data = array(
            "title"     => NAMETITLE . " - Find Me" ,
            "content"   => "auth/landingpage/findme" ,
            "findme"    => $findme,
        );
        $this->load->view('tamplate/wrapper', $data);
    }

    public function findconfirm(){
        $input      = $this->input;
        $findme     = base64_decode($this->security->xss_clean($input->post("findme")));
        
        if (!isset($_SESSION["findme_ucode"]) || !isset($_SESSION["city"])){
            $this->session->set_flashdata('failed', "Expired session, please try again");
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }

        $this->form_validation->set_rules('business', 'Business', 'trim|required');
        $this->form_validation->set_rules('map', 'Google Map Link', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }

        $business   = $this->security->xss_clean($input->post("business"));
        $map        = $this->security->xss_clean($input->post("map"));
        
        $config['upload_path']          = FCPATH.'/qr/logo/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1024000;
		$config['file_name']            = $_SESSION["findme_ucode"]."-".$business;
		$config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('logo')){
    	    $this->session->set_flashdata("error",$this->upload->display_errors());
            redirect(base_url('link/findme?findme=MQ=='));
            return;
        }
        else{
            $data   = $this->upload->data();
            
            $mdata=array(
                    "city_code"     => $_SESSION["city"],
                    "category"      => $_SESSION["kategori"],
                    "ucode"         => $_SESSION["findme_ucode"],
                    "business_name" => $business,
                    "googlemap"     => $map,
                    "logo"          => $data['file_name']
                );
            $url = URLAPI . "/v1/member/findme/set_business";
            $result   = apitrackless($url, json_encode($mdata));
            if (@$result->code != 200) {
                $this->session->set_flashdata('failed', "Failed to submit data, please contact administrator");
                redirect(base_url('link/findme?findme=MQ=='));
                return;
            }
            
            $data = array(
                "title"     => NAMETITLE . " - Find Me",
                "content"   => "auth/landingpage/findme" ,
                "findme"    => $findme,
            );
            $this->load->view('tamplate/wrapper', $data);
        }
    }
}