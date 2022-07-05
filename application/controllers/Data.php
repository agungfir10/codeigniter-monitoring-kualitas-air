<?php

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }

    public function index()
    {
        if ($_GET == NULL) {
            echo "FAIL";
        } else {
            $sensorph = $_GET["phval"];



            $data = [
                'sensorph' => $sensorph,
            ];

            $data_saved = $this->data_model->insert($data);

            var_dump($data_saved);

            if (!$data_saved) {
                echo "OK";
            } else {
                echo "FAIL";
            }
        }
    }
}
