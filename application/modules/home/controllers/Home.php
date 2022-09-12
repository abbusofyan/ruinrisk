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
        // $this->router->fetch_class() == 'Home' && $this->router->fetch_method() == 'index'
        // dd($this->router->fetch_class());
        $data['title'] = 'index | users';
        $data['content'] = 'daftar list users akses';
        $limit = 2;
        $data['jml_potensi'] = $this->m_home->getJmlPotensi();
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
