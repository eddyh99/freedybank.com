<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data=array(
                "title"     => "FreedyBank - Admin Dashboard",
                "content"   => "admin/dashboard",
                "currency"  => apitrackless("https://api.tracklessbank.com/v1/admin/currency/getAllCurrency")->message,
            );

        $this->load->view('admin_template/wrapper', $data);
    }
}