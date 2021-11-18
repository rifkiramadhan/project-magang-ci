<?php

namespace App\Controllers;

class Provinsi extends BaseController
{
    public function index()
    {
        
    }

    public function get_provinsi()
    {
            $db = \Config\Database::connect();
            $query   = $db->query('SELECT * FROM provinces');
            $results = $query->getResult();

            $provinces = [];

            foreach ($results as $row) {
                array_push($provinces, $row);
            }

            echo json_encode($provinces);
    }

    public function get_regencies()
    {
            $db = \Config\Database::connect();
            $query   = $db->query('SELECT * FROM regencies');
            $results = $query->getResult();

            $regencies = [];

            foreach ($results as $row) {
                array_push($regencies, $row);
            }

            echo json_encode($regencies);
    }

    public function get_districts()
    {
            $db = \Config\Database::connect();
            $query   = $db->query('SELECT * FROM districts');
            $results = $query->getResult();

            $districts = [];

            foreach ($results as $row) {
                array_push($districts, $row);
            }

            echo json_encode($districts);
    }

    public function get_villages()
    {
            $db = \Config\Database::connect();
            $query   = $db->query('SELECT * FROM villages');
            $results = $query->getResult();

            $villages = [];

            foreach ($results as $row) {
                array_push($villages, $row);
            }

            echo json_encode($villages);
    }
}
