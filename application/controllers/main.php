<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class main extends CI_Controller{

        public function index(){
            $this->load->view('index');
        }

        public function masuk(){
            $this->load->view('out_masuk');
        }

        public function keluar(){
            $this->load->view('out_keluar');
        }

        public function register(){
            $this->load->view('register');
        }

        
    }
?>