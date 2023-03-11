<?php

    class User{
        private $id;
        private $firstname;
        private $lastname;
        private $email;
        private $pwd;
        private $gender;
        private $desc;
        private $table = 'users';
        private mysqli $conn;

        private $hashed_pwd;

        public function __construct($firstname, $lastname, $email, $pwd, $gender, $desc,$conn){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->gender = $gender;
            $this->desc = $desc;
            $this->conn = $conn;
        }

        public function checkingHashedPwd($pwd){
            return password_verify($pwd, $this->hashed_pwd);
        }

        //      sql
        public function insertUser($conn){

            $this->hashed_pwd = password_hash($this->pwd, PASSWORD_DEFAULT);

            $sql = 'INSERT INTO users(firtname,lastname,email,pwd,gender,leiras) 
                VALUES(?,?,?,?,?)';

            $stmt = $conn->prepare($sql);

            $stmt->bind_param('ssssss',$this->firstname, $this->lastname, $this->email,$this->pwd,$this->desc);

            $stmt->execute();

            return $stmt;
        }

        //      Getters & Setters
        public function __getId(){
            return $this->id;
        }

        public function __setId($value){
            $this->id = $value;
        }


    }