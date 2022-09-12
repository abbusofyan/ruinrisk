<?php

use GuzzleHttp\Client;

class Cuaca extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $weather_url = 'http://api.weatherapi.com/v1/forecast.json?key=31f0603f879141e58f7233923211312&q=-6.831,%20106.162&days=7';
        $client = new Client([
            'base_uri' => $weather_url,
            'timeout'  => 2.0,
        ]);
        $response = $client->get($weather_url);
        $body = $response->getBody();
        $stringBody = (string) $body;
        $data['weather'] = json_decode($stringBody);
        $this->load->view('cuaca/index', $data);
    }
}
?>
