<?php

    DEFINED('AJAXPATH') OR exit(header('location: 403'));

    class user_guide_search extends ML_Controller {
        
        public function __construct() {
            
            parent::__construct();
            $this->my_library('user_guide','manual');                 
            
        }
        
        public function manual_search() {

          $this->library('form');

          $this->form->input('ms-input');

          if($this->form->validate()) {

            $search = $this->input->post('ms-input');  
            $lang   = $this->input->post('ms-input-lang');            
            
            $data['result'] = $this->user_guide->manual_search($search,$lang);
            
            $this->view('manual_search', $data);

          } else {
            
            echo 'empty!';

          }
        }

    }

?>
