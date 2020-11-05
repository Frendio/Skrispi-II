<?php

    # Madeline Framework
    #
    # A custom built application development framework for PHP
    #
    # Permission is hereby granted to anyone who is
    # AN ACTIVE STUDENT AT UNIVERSITAS KLABAT
    # to use this application
    #
    # THE SOFTWARE IS PROVIDED "AS IS" TO HELP STUDENTS UNDERSTAND
    # AND BUILD A SIMPLE WEBSITE WITH THE CONCEPT OF MVC (MODEL, VIEW, CONTROLLER)
    #
    # @package	MadeLine (ML)
    # @author	Stevani Andolo
    # @version V1

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    class Configuration extends ML_Controller
    {        
        public function __construct() 
        {            
            parent::__construct();
            $this->ml_config_uri    = '';
            if(!defined('AJAX') && !empty($GLOBALS['configuration_API_Key']))
            {
                $this->ml_config_uri    = (last_ori_uri === $GLOBALS['configuration_API_Key']) ? '/'.$GLOBALS['configuration_API_Key'] : '';
            }
        }

        # CONFIGURATION
        # =============
        public function index() 
        {
            $data['page']   = uri1;
            $data['input']  = $this->input;
            $this->ml_config('system_configuration',$data);
        }  

        # DATABASE CONFIGURATION
        # ======================
        public function database() 
        {
            $data['page']   = uri1;
            $data['input']  = $this->input;
            $this->ml_config('database',$data);
        }


        # DEVELOPER PROFILE
        # =================        
        public function developer_profile()
        {
            $this->ml_config('developer_profile');
        }


        # ROUTE CONFIGURATION
        # ===================
        public function route() 
        {
            $data['page']   = uri2;
            $data['input']  = $this->input;
            $this->ml_config('route',$data);
        }  

        # DIRECTORY CONFIGURATION
        # =======================        
        public function directory() 
        {
            $data['page']   = uri2;
            $data['input']  = $this->input;
            $this->ml_config('directory',$data);
        }

        # GET SYSTEM STATUS
        # =================
        public function gs_ajax() 
        {
            DEFINED('AJAXPATH') OR exit(header('location:403'));
                    
            $lines      = file(CONFIGURATION_PATH.'routes.php');
            $str        = file_get_contents(CONFIGURATION_PATH.'routes.php');

            $existed    = '';
            $succeed    = '';
            $not_found  = '';

            foreach($lines as $line) 
            {
                if(strpos(strtolower($line), '=') !== false) 
                { 
                    $call  = explode('=', $line);
                                        
                    $name   = str_replace(',','',$call[0]);
                    $name   = str_replace("'",'',$name);
                    $name   = str_replace("\n",'',$name);
                    $name   = str_replace(" ",'',$name);
                    $name   = str_replace('$route','',$name);
                    $name   = str_replace('$GLOBALS','',$name);
                    $name   = str_replace('[','',$name);
                    $name   = str_replace(']','',$name);
                    
                    $value  = str_replace(";",'',$call[1]);
                    $value  = str_replace("\n",'',$value);
                    $value  = str_replace(" ",'',$value);
                    $value  = str_replace("'",'',$value);
                    $value  = str_replace(",",', ',$value);

                    if($name == 'status') 
                    {
                        echo $value;
                        exit();
                    }
                }
            }
        }

        # ADD DATABASE
        # ============        
        public function add_database() 
        {
            $data['page']   = uri2;
            $data['input']  = $this->input;
            $this->ml_config('add_database',$data);
        }

        # DROP DATABASE
        # =============
        public function drop_database() 
        {
            $data['page']       = uri2;
            $data['input']      = $this->input;
            $data['results']    = $this->model->get('show databases');
            $data['fetch_type'] = $this->model->fetch_type();
            $this->ml_config('drop_database',$data);
        }

        # IMPORT DATABASE
        # =============
        public function import_database() 
        {
            $data['page']       = uri2;
            $data['input']      = $this->input;
            $data['results']    = $this->model->get('show databases');
            $data['fetch_type'] = $this->model->fetch_type();
            $this->ml_config('import_db',$data);
        }
    }
?>
