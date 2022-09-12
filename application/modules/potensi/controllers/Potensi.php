<?php
class Potensi extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_potensi');
        $this->load->helper('file');
        $this->load->helper('image_carousel');
    }

    function index()
    {   
        $data['potensi'] = $this->m_potensi->get();
        $this->load->view('index.php', $data);
    }

    function store() {
        $this->m_potensi->store($this->input->post());
        redirect('/');
    }

    function uploadImage2() {
        $path = 'assets/img/potensi/';
        $file_name = upload($_FILES,$path);
    }

    function uploadImage() {
        $allowed = array('jpg', 'jpeg', 'pdf', 'png', 'jpeg');
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

    function add()
    {
        $this->load->view('add.php');
    }

    function show($id) {
        $data['potensi'] = $this->m_potensi->find($id);
        $this->load->view('show', $data);
    }
    
}
?>
