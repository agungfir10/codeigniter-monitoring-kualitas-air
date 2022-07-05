<?php

class Data_model extends CI_Model
{
    private $_table = "iot_sensorph";

    public function get_all_data()
    {
        $query = $this->db->query("SELECT * FROM iot_sensorph ORDER BY tanggal DESC");
        return $query->result();
    }
    public function insert($data)
    {
        $this->db->insert($this->_table, $data);
    }
}
