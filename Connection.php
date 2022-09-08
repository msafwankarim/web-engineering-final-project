<?php

class Connection

{

    public $server = "sql308.epizy.com", $user = "epiz_32551291", $password = "Wm9vN3TyFi", $db = "epiz_32551291_bakery";

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

