<?php
class Masyarakat_rentan extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = 'index | users';
        $data['content'] = 'daftar list users akses';
        $this->load->view('masyarakat_rentan/index.php', $data);
    }
}
?>
