<?php
class Account extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('account/index.php');
    }
}
?>
