<?php

class Province extends CI_Controller
{
    public function index()
    {
        
    }

    // Memanggil API Provinces
    public function get_provinces()
    {
            $provinces = $this->db->query('SELECT * FROM provinces')->result_array();

            echo json_encode($provinces);
    }

    // Memanggil API Regencies
    public function get_regencies()
    {
        $regencies = $this->db->query('SELECT * FROM regencies')->result_array();

        echo json_encode($regencies);
    }

    // Memanggil API Districts
    public function get_districts()
    {
        $districts = $this->db->query('SELECT * FROM districts')->result_array();

        echo json_encode($districts);
    }

    // Memanggil API Villages
    public function get_villages()
    {
        $villages = $this->db->query('SELECT * FROM villages')->result_array();

        echo json_encode($villages);
    }
}
