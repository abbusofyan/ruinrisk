<?php
class Potensi extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_potensi');
        $this->load->helper('file');
    }

    function index()
    {
        $this->load->view('index.php');
    }

    function add() {
        $this->m_potensi->add($this->input->post());
        redirect('/');
    }

    function uploadImage2() {
        $path = 'assets/img/potensi/';
        $file_name = upload($_FILES,$path);
    }

    function uploadImage() {
        $allowed = array('jpg', 'jpeg', 'pdf', 'png');
        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"not_allowed"}';
                exit;
            }
            $path = 'assets/img/potensi/';
            $file_name = upload($_FILES,$path);
            echo $file_name;
        }
    }
    
}
?>
