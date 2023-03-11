<?php

    class Database{
        private $host = "localhost";
        private $username = "root";
        private $pwd = "";
        private $db;
        private $conn;

        public function __construct($db){
            $this->db = $db;
        }

        public function sqlConnection(){
            $conn = new mysqli($this->host, $this->username, $this->pwd, $this->db);
            return $conn;
        }

    }