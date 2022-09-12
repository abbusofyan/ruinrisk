<?php
class About extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_api');
    }

    function index()
    {
        $this->load->view('index.php');
    }
}
?>
