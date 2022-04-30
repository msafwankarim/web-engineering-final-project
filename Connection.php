<?php

class Connection

{

    public $server = "SERVERNAME", $user = "USERNAME", $password = "PASSWORD", $db = "DB_NAME";

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

