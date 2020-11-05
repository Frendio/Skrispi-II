<?php
    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class Welcome extends ML_Controller
    {
        public function __construct()
        {
            parent::__construct();

            # load library
            $this->library('session, form');
        }

        public function index()
        {
            # load login view
            $this->view('welcome');
        }
    }
?>
