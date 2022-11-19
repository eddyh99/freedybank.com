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
            // "extra"     => "auth/landingpage/js/js_index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }
}