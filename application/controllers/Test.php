<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function topup()
    {
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit','2048M'); 
        for ($i=0;$i<500;$i++){
    	    $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/topup");
        }
	    echo "finish";
    }

    public function wallet2wallet()
    {
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit','2048M'); 
        for ($i=0;$i<500;$i++){
    	    $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/towallet");
        }
	    echo "finish";
    }

    public function wallet2bank()
    {
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit','2048M'); 
        for ($i=0;$i<500;$i++){
    	    $result = apitrackless("https://api.tracklessbank.com/v1/member/wallet/tobank");
        }
	    echo "finish";
    }

}