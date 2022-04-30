<?php

class Connection

{

    public $server = "sql113.epizy.com", $user = "epiz_30723796", $password = "FhXAkykjVZ", $db = "epiz_30723796_bakery";

    public $conn = NULL;



    function get_connection()

    {

        if ($this->conn == NULL) {

            $this->conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);

        }

        if (!$this->conn) {

            die("Connection failed: " . mysqli_connect_error());

        }

        return $this->conn;

    }

}

