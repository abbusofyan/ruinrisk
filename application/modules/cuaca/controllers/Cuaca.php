<?php
class Cuaca extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $weather_url = 'https://api.weatherapi.com/v1/forecast.json?key=31f0603f879141e58f7233923211312&q=-6.92,%20106.2159&days=7';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $weather_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $data['weather'] = json_decode($output);
        $this->load->view('cuaca/index.php', $data);
    }
}
?>
