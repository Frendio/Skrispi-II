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
    
    class MadeLine
    {        
        private static $controller;
        private static $method;
        private static $parsed_data;
        
        # execute ajax request
        public static function Ajax()
        {
            # set sent data
            self::Data();
            
            # set requested controller
            self::$controller   = str_replace('-','_',ltrim(rtrim($_GET['controller'], '/'), '/'));

            # check and set requested method
            self::Method();
            
            # load database connection
            self::Database();
            
            # load core files
            self::Query_Liner();
            self::Model();
            self::Controller();
            self::Input();
            self::Encryption();
            self::Getter();
            self::DB_Connection();
            self::HTML();
            
            # autoload requested controller
            self::Ajax_Autoloader();
        }
        
        # get sent data from ajax_request.js
        private static function Data()
        {
            if(isset($_GET['data'])) 
            {
                self::$parsed_data  = str_replace('|', '::', $_GET['data']);
                self::$parsed_data  = str_replace('::', '::', self::$parsed_data);
                
                if(strpos(self::$parsed_data, '::') !== false)
                {
                    self::$parsed_data  = explode('::', self::$parsed_data);
                }
                else
                {
                    self::$parsed_data  = $_GET['data'];
                }
            }
            else 
            {
                self::$parsed_data      = '';
            }
            
            if(is_array(self::$parsed_data))
            {
                DEFINE('t_data',    count(self::$parsed_data));
                for($i = 1; $i < t_data+1; $i++)
                {
                    DEFINE('data'.$i,       self::clean_string(self::$parsed_data[$i-1]));
                }
            }
            else
            {
                DEFINE('data',      self::clean_string(self::$parsed_data));
            }
        }

        protected static function clean_string($post)
        {
			$post = nl2br($post);
			$post = str_replace("&amp;","&",$post);
            $post = stripslashes($post);
            $post = htmlentities($post);
            $post = trim($post);

            return $post;
        }
        
        # get requested method
        private static function Method()
        {
            include CONFIGURATION_PATH . "routes.php";
            
            if(!isset($_GET['method']))
            {
                self::$method           = str_replace('-','_',$route['ajax_default_method']);
            }
            else
            {
                self::$method           = str_replace('-','_',$_GET['method']);
            }
        }
        
        # set global variable for database configuration
        private static function Database()
        {
            $GLOBALS['configuration'] = include CONFIGURATION_PATH . "database.php";
        }
        
        # load controller file
        private static function Controller() 
        {        
            require CORE_PATH . "Controller.php";        
        }
        
        # load database connection file
        private static function DB_Connection() 
        {        
            require DATABASE_DRIVER_PATH . "DB_Connection.php";        
        }

        # load ml query liner file
        private static function Query_Liner() 
        {
            require DATABASE_DRIVER_PATH . "Query_Liner.php";
        }
        
        # load model file
        private static function Model() 
        {        
            require CORE_PATH . "Model.php";        
        }
        
        # load input file
        private static function Input() 
        {
            require CORE_PATH . "Input.php";
        }

        # load encryption file
        private static function Encryption() 
        {
            require CORE_PATH . "Encryption.php";
        }
        
        # load getter file
        private static function Getter() 
        {        
            require CORE_PATH . "Getter.php";        
        }

        # load html file
        private static function HTML() 
        {
            REQUIRE CORE_PATH . "Html.php";
        }

        # get current application directory name
        private static function app_fn() 
        {
            REQUIRE SYSTEM_CONFIG_PATH . "directory_configuration.php";

            if($directory['application'] == 'A_D') 
            {
                return 'application';
            } 
            else 
            {
                return $directory['application'];
            }
        }

        # create requested ajax controller instance
        private static function create_loader($Loader, $path) 
        {
            if(self::$parsed_data === 'ugm')
            {
                $Loader->controller(self::$controller,'manual');
            }
            else
            {
                $Loader->controller(self::$controller);
            }
            $controller = self::slash_check(self::$controller);
            $class      = new $controller();
            
            if (method_exists($class, self::$method)) 
            {
                $class->{self::$method}();                    
            } 
            else 
            {
                $Loader->error('ajax_notfound',self::$controller,'controllers',self::$method,$path,'method');
            }
        }
        
        # load requested ajax controller from child directories in application/controllers/ directory
        private static function load_from_other_folders($Loader) 
        {
            if(self::$controller === 'user_guide_search')
            {
                $data   = array_filter(glob(self::app_fn().'/user_guide/ug_controllers/*'), 'is_dir');
            }
            else
            {
                $data   = array_filter(glob(self::app_fn().'/controllers/*'), 'is_dir');
            }
            $ak     = array_keys($data);
            $iz     = 0;
            $found  = false;

            if(strpos(self::$controller, '/') !== false) 
            {
                $controller = ltrim(rtrim(self::$controller, '/'), '/');
            } 
            else 
            {
                $controller =  self::$controller;
            }
  
            if(self::$controller === 'user_guide_search')
            {
                if (file_exists(USER_GUIDE_PATH . 'ug_controllers' . DS . $controller.'.php')) 
                {
                    self::create_loader($Loader, USER_GUIDE_PATH . 'ug_controllers/');
                    $found  = true;
                } 
                else 
                {
                    $found  = false;
                }
            }
            else
            {
                while($iz < count($data)) 
                {
                    $folder_name = $data[$ak[$iz]];
        
                    if (file_exists(MADELINE . $folder_name . DS . $controller.'.php')) 
                    {
                        self::create_loader($Loader, $folder_name);
                        $found  = true;
                        break;
                    } 
                    else 
                    {
                        $found  = false;
                    }
                    $iz++;  
                }
            }
            
            if($found == false) 
            {
                $Loader->error('ajax_notfound',$controller,'controllers');
            }
        }
        
        protected static function slash_check($data) 
        {
            if(strpos($data, '/') !== false) 
            {
                $data    = explode('/', ltrim(rtrim($data, '/'), '/'));
                return end($data);
            } 
            else 
            {
                return $data;
            }
        }

        # autoload requested ajax controller file
        private static function Ajax_Autoloader()
        {
            $Loader = new ML_Controller();
            
            if (file_exists(CONTROLLERS_PATH  . self::$controller.'.php')) 
            {
                if(self::$parsed_data === 'ugm')
                {
                    $Loader->controller(self::$controller,'manual');
                }
                else
                {
                    $Loader->controller(self::$controller);
                }
                $controller = self::slash_check(self::$controller);
                $class      = new $controller();

                if (method_exists($class, self::$method))
                {
                    $class->{self::$method}();
                }
                else
                {
                    $Loader->error('ajax_notfound',self::$controller,'controllers',self::$method,CONTROLLERS_PATH,'method');
                }                
            }
            else if (file_exists(SYSTEM_CONFIG_PATH  . self::$controller.'.php')) 
            {
                $Loader->configuration(self::$controller);
                $controller = self::slash_check(self::$controller);
                $class      = new $controller();
                
                if (method_exists($class, self::$method)) 
                {
                    $class->{self::$method}();                    
                } 
                else 
                {
                    $Loader->error('ajax_notfound',self::$controller,'configuration',self::$method,MADELINE,'method');
                }                
            } 
            else 
            {
                self::load_from_other_folders($Loader);
            }                
        }
    }
?>