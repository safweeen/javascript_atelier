<?php

class Employe {
        private $lastname;
        private $firstname;
        private $password;
        private $phone ;
        private $dOB;
        private $email;

        public function __construct( $firstname, $lastname, $password,$dOB,$email,$phone) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->password = $password;
            $this->dOB = $dOB;
            $this->email = $email;
            $this->phone = $phone;
        }
        public function getLastName() {
            return $this->lastname;
        }
        public function setLastName($lastname) {
            $this->lastname = $lastname;
        }
        public function getFirstName() {
            return $this->firstname;
        }
        public function setFirstName($firstname) {
            $this->firstname = $firstname;
        }
        public function getPassword() {
            return $this->password;
        }
        public function setPassword($p) {
            $this->password = $p;
        }
        public function getEmail() {
            return $this->email;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function getPhone() {
            return $this->phone;
        }
        public function setPhone($phone) {
            $this->phone = $phone;
        }
        public function getdob() {
            return $this->dOB;
        }
        public function setdob($dOB) {
            $this->dOB = $dOB;
        }

}


?>