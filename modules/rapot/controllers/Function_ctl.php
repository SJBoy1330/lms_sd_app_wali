<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Welcome
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
        is_logged_in();
    }
}
