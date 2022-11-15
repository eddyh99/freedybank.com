<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mwallet extends CI_Controller
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
            
            $url="https://api.tracklessbank.com/v1/admin/wallet/balance_ByCurrency?currency=".$_GET["cur"];
            $result=apitrackless($url);
            if ($result->code==200){
                $_SESSION["currency"]=@$_GET["cur"];    
                $_SESSION["symbol"]=$result->message->detail->symbol;
                $_SESSION["balance"]=$result->message->balance;
            }else{
                $result=apitrackless($url);
                $_SESSION["currency"]="USD";    
                $_SESSION["symbol"]="&dollar;";
                $_SESSION["balance"]=apitrackless("https://api.tracklessbank.com/v1/admin/wallet/balance_ByCurrency?currency=USD")->message->balance;
            }
        }
        
        $data=array(
                "title"     => "FreedyBank - Master Wallet",
                "content"   => "admin/mwallet/master-wallet",
                "mn_mwallet"=> "active"
            );

        $this->load->view('admin_template/wrapper2', $data);
    }
    
    public function withdraw(){
        $data=array(
                "title"     => "FreedyBank - Withdraw Master Wallet",
                "content"   => "admin/mwallet/withdraw-mwallet",
            );

        $this->load->view('admin_template/wrapper2', $data);
    }

}