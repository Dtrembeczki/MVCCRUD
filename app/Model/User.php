<?php

    namespace App\Models;

    class User{
        protected $id;
        protected $title;
        protected $lname;
        protected $fname;
        protected $email;
        protected $pwd;
        protected $birthdate;
        protected $newsletter;
        protected $profile_img;
        protected $gdpr;

        //CRUD methods

        public function create(array $data)
        {

        }
        
        public function readById(int $id)
        {
            
        }

        public function readAll()
        {
            # code...
        }

        public function update(int $id, array $data)
        {
            # code...
        }

        public function delete(int $id)
        {
            # code...
        }

        //Getters & Setters

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of title
         */
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         */
        public function setTitle($title): self
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of lname
         */
        public function getLname()
        {
                return $this->lname;
        }

        /**
         * Set the value of lname
         */
        public function setLname($lname): self
        {
                $this->lname = $lname;

                return $this;
        }

        /**
         * Get the value of fname
         */
        public function getFname()
        {
                return $this->fname;
        }

        /**
         * Set the value of fname
         */
        public function setFname($fname): self
        {
                $this->fname = $fname;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of pwd
         */
        public function getPwd()
        {
                return $this->pwd;
        }

        /**
         * Set the value of pwd
         */
        public function setPwd($pwd): self
        {
                $this->pwd = $pwd;

                return $this;
        }

        /**
         * Get the value of birthdate
         */
        public function getBirthdate()
        {
                return $this->birthdate;
        }

        /**
         * Set the value of birthdate
         */
        public function setBirthdate($birthdate): self
        {
                $this->birthdate = $birthdate;

                return $this;
        }

        /**
         * Get the value of newsletter
         */
        public function getNewsletter()
        {
                return $this->newsletter;
        }

        /**
         * Set the value of newsletter
         */
        public function setNewsletter($newsletter): self
        {
                $this->newsletter = $newsletter;

                return $this;
        }

        /**
         * Get the value of profile_img
         */
        public function getProfileImg()
        {
                return $this->profile_img;
        }

        /**
         * Set the value of profile_img
         */
        public function setProfileImg($profile_img): self
        {
                $this->profile_img = $profile_img;

                return $this;
        }

        /**
         * Get the value of gdpr
         */
        public function getGdpr()
        {
                return $this->gdpr;
        }

        /**
         * Set the value of gdpr
         */
        public function setGdpr($gdpr): self
        {
                $this->gdpr = $gdpr;

                return $this;
        }
    }