<?php
class Home extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    function index()
    {   
        $data['title'] = 'index | users';
        $data['content'] = 'daftar list users akses';
        $limit = 2;
        $data['potensi'] = $this->m_home->getLatestPotensiBencana($limit);
        $this->load->view('index.php', $data);
    }

    function menu_lainnya() {
        $data['title'] = 'index | users';
        $data['content'] = 'daftar list users akses';
        $this->load->view('menu_lainnya');
    }
}
?>
