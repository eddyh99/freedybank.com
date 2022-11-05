<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
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
        if (!empty($_GET["cur"])){
            
            $url="https://api.tracklessbank.com/v1/member/currency/getByCurrency?currency=".$_GET["cur"];
            $result=apitrackless($url);
            if ($result->code==200){
                $_SESSION["currency"]=@$_GET["cur"];    
                $_SESSION["symbol"]=$result->message->symbol;
            }else{
                $_SESSION["currency"]="USD";    
                $_SESSION["symbol"]="&dollar;";
            }
        }
        
        $mdata=array(
                "userid"=>$_SESSION["user_id"]
            );
        $url="https://api.tracklessbank.com/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url,json_encode($mdata))->message;
        $data['title'] = "Freedy - Homepage";
        $footer["extra"]    = "member/js/js_index";


        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/navbar-bottom', $data);
        $this->load->view('member/index',$body);
        $this->load->view('tamplate/footer',$footer);
    }

    public function setting_currency()
    {
        $mdata=array(
                "userid"=>$_SESSION["user_id"]
            );
            
        $url="https://api.tracklessbank.com/v1/member/currency/getActiveCurrency";
        $body["currency"]   = apitrackless($url,json_encode($mdata))->message;

        $footer["extra"]    = "member/js/js_currency";
        $data['title']      = "Freedy - Currency Setting";

        $this->load->view('tamplate/header', $data);
        $this->load->view('member/setting-currency',$body);
        $this->load->view('tamplate/footer',$footer);
    }
    
    public function setCurrency()
    {
        $currency=$_GET["currency"];
        $status=$_GET["status"];
        $url="https://api.tracklessbank.com/v1/member/currency/setCurrency?status=".$status."&userid=".$_SESSION["user_id"]."&currency=".$currency;
        $result=apitrackless($url);
        print_r($result);
    }
}