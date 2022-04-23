<?php
class API extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_api');
    }

    function getCoordinates()
    {
        echo json_encode($this->m_api->getCoordinatesMasyarakatRentan());
    }
}
?>
