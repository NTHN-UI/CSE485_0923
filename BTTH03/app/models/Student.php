<?php
    class Student
    {
        private $id;
        private $tenSinhVien;
        private $email;
        private $ngaySinh;
        private $idLop;
        
        /**
         * @param $id
         * @param $tenSinhVien
         * @param $email
         * @param $ngaySinh
         * @param $idLop
         */
        public function __construct($id, $tenSinhVien, $email, $ngaySinh, $idLop)
        {
            $this->id = $id;
            $this->tenSinhVien = $tenSinhVien;
            $this->email = $email;
            $this->ngaySinh = $ngaySinh;
            $this->idLop = $idLop;
        }
        
        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }
        
        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }
        
        /**
         * @return mixed
         */
        public function getTenSinhVien()
        {
            return $this->tenSinhVien;
        }
        
        /**
         * @param mixed $tenSinhVien
         */
        public function setTenSinhVien($tenSinhVien)
        {
            $this->tenSinhVien = $tenSinhVien;
        }
        
        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }
        
        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        /**
         * @return mixed
         */
        public function getNgaySinh()
        {
            return $this->ngaySinh;
        }
        
        /**
         * @param mixed $ngaySinh
         */
        public function setNgaySinh($ngaySinh)
        {
            $this->ngaySinh = $ngaySinh;
        }
        
        /**
         * @return mixed
         */
        public function getIdLop()
        {
            return $this->idLop;
        }
        
        /**
         * @param mixed $idLop
         */
        public function setIdLop($idLop)
        {
            $this->idLop = $idLop;
        }
        
        
        
    }
