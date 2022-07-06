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

    public function get_data_realtime()
    {
        $data['datas'] = $this->data_model->get_all_data();
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;
    }
}
