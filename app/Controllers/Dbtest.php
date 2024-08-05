<?php
namespace App\Controllers;

class Dbtest extends BaseController{

    public function index() {
        // Load the database library
        $this->load->database();

        // Check if the connection is successful
        if ($this->db->conn_id) {
            echo "Database is connected!";
        } else {
            echo "Database connection failed!";
        }
    }
}
