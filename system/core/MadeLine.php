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
    # @version  V1

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    class Made
    {
        private static $default_controller;
        private static $default_method;
        private static $environment;
        private static $url_index   = 0;
        private static $found       = false;

        # execute the framework
        public static function Line() 
        {
            # load setting
            self::Routes();
            self::Urls();
            self::Database();

            # load core files
            self::Query_Liner();
            self::Model();
            self::Controller();
            self::DB_Connection();
            self::Input();
            self::Encryption();
            self::Getter();

            # auto load files
            self::Autoloader();
            self::Right_Menu();
        }

        # create uri segment
        private static function Urls() 
        {            
            $url        = isset($_GET['url']) ? $_GET['url'] : null;
            $ori_url    = explode('/', rtrim($url, '/'));
            $url        = explode('/', str_replace('-','_',rtrim($url, '/')));

            DEFINE('uri',           $url);
            DEFINE('uris',          count($url));
            DEFINE('last_uri',      self::clean_string($url[count($url) - 1]));

            DEFINE('ori_uri',       $ori_url);
            DEFINE('ori_uris',      count($ori_url));
            DEFINE('last_ori_uri',  self::clean_string($ori_url[count($ori_url) - 1]));

            for($i = 1; $i < uris+1; $i++)
            {
                if($i == uris+1)
                {
                    DEFINE("uri$i",     '');
                }
                else
                {
                    DEFINE("uri$i",     self::clean_string($url[$i-1]));
                }
            }

            if(!empty($url[0])) 
            {
                DEFINE('CONTROLLER',    self::clean_string($url[0]));
            } 
            else 
            {
                DEFINE('CONTROLLER',    '');
            }

            if(!empty($url[1])) 
            {
                DEFINE('METHOD',        self::clean_string($url[1]));
            } 
            else 
            {
                DEFINE('METHOD',        '');
            }
            

            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
                $link = "https"; 
            else
                $link = "http";

            DEFINE('CURRENT_URL',   $link."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
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

        # load routes file
        private static function Routes() 
        {
            require CONFIGURATION_PATH . "routes.php";
            
            self::$default_controller   = $route['default_controller'];
            self::$default_method       = $route['default_method'];
            self::$environment          = $route['status'];
            DEFINE('ML_API',            $GLOBALS['ApiLine_API_Key']);
            DEFINE('CONF_API',          $GLOBALS['configuration_API_Key']);
            DEFINE('STATUS',            $route['status']);
        }

        # load right menu file
        private static function Right_Menu()
        {
            require ML_CONFIG_PATH . "navigation/right-menu.php";
        }

        # load database file
        private static function Database()
        {
            $GLOBALS['configuration'] = include CONFIGURATION_PATH . "database.php";
        }

        # load controller file
        private static function Controller()
        {
            require CORE_PATH . "Controller.php";
        }

        # load db connection file
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

        # load ecryption file
        private static function Encryption() 
        {
            require CORE_PATH . "Encryption.php";
        }

        # load getter file
        private static function Getter() 
        {
            require CORE_PATH . "Getter.php";
        }

        # return current application directory name
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

        # create loader for requested controller
        private static function create_loader($Loader, $type=null) 
        {
            if($type == 'system') 
            {
                $Loader->configuration(uri[self::$url_index]);
            }
            else if($type == 'manual') 
            {
                $Loader->controller(uri[self::$url_index],'manual');
            }
            else 
            {
                $Loader->controller(uri[self::$url_index]);
            }

            $class_name = uri[self::$url_index].'';
            if(class_exists($class_name))
            {
                $class      = new $class_name();
  
                if(!empty(METHOD)) 
                {
                    if(method_exists($class, METHOD)) 
                    {
                        $class->{uri[self::$url_index+1]}();
                    } 
                    else 
                    {
                        if(is_numeric(METHOD))
                        {
                            if(method_exists($class, self::$default_method)) 
                            {
                                $class->{self::$default_method}();
                            }
                            else
                            {
                                $Loader->error();
                            }
                        }
                        else
                        {
                            if(method_exists($class, self::$default_method)) 
                            {
                                $class->{self::$default_method}();
                            }
                            else
                            {
                                $Loader->error();
                            }
                        }
                    }
                } 
                else 
                {
                    if(method_exists($class, self::$default_method)) 
                    {
                        $class->{self::$default_method}();
                    } 
                    else 
                    {
                        $Loader->error($type);
                    }
                }
            } 
            else 
            {
                $Loader->error();
            }

            self::$found = true;
        }

        # load requested controller from child directory in application/controlles/
        private static function load_from_other_folders($Loader)
        {
            $data   = array_filter(glob(self::app_fn()."/controllers/*"), 'is_dir');
            $ak     = array_keys($data);
            $iz     = 0;
            $found  = false;
  
            while($iz < count($data))
            {  
                $folder_name = $data[$ak[$iz]];

                if(file_exists(MADELINE . $folder_name  . DS . uri[self::$url_index].'.php')) 
                {
                    self::create_loader($Loader);
                    $found = true;
                    break;
                }
    
                $iz++;  
            }

            if($found === false)
            {
                self::get_nested_loader($Loader);
            }
        }

        # load default controller from application/controllers/ directory
        private static function load_DC_FOF($Loader) 
        {
            $data       = array_filter(glob(self::app_fn()."/controllers/*"), 'is_dir');
            $ak         = array_keys($data);
            $iz         = 0;
            $is_found   = 0;
  
            while($iz < count($data)) 
            {  
                $folder_name = $data[$ak[$iz]];

                if(file_exists(MADELINE . $folder_name  . DS . self::$default_controller.'.php')) 
                {
                    $Loader->controller(self::$default_controller);

                    $class_name = self::$default_controller.'';
                    $class      = new $class_name();

                    if(method_exists($class, self::$default_method)) 
                    {
                        $class->{self::$default_method}();
                    } 
                    else 
                    {
                        $Loader->error();
                    }
                    
                    $is_found = 1;
                    break;
                }
    
                $iz++;  
            }
            
            if($is_found == 0) 
            {
                $Loader->error();
            }
        }

        # load default controller from application/controllers/ directory
        private static function check_load_default($Loader)
        {            
            if(self::$found == false)
            {
                if(CONTROLLER == null)
                {
                    if(file_exists(CONTROLLERS_PATH  . self::$default_controller.'.php'))
                    {
                        $Loader->controller(self::$default_controller);
  
                        $class_name = self::$default_controller.'';
                        $class      = new $class_name();

                        if(method_exists($class, self::$default_method))
                        {
                            $class->{self::$default_method}();
                        } 
                        else 
                        {
                            $Loader->error();
                        }
                    } 
                    else 
                    {
                        self::load_DC_FOF($Loader);
                    }
                } 
                else 
                {
                    $Loader->error();
                }
            }
        }

        # autoload requested controller
        private static function Autoloader() 
        {            
            $Loader = new ML_Controller();
            $Getter = new ML_Getter();

            if(self::$environment == 'development') 
            {
                if(uri1 === 'configuration')
                {
                    if(last_ori_uri === $GLOBALS['configuration_API_Key'] || $GLOBALS['configuration_API_Key'] === 'ML_CONFIG_API_ID')
                    {
                        self::get_loader($Loader);
                    }
                    else
                    {
                        $Loader->error('system', '404');
                    }
                }
                else 
                {
                    if($Getter->user_ip() == $Getter->local_ip()) 
                    {
                        self::get_loader($Loader);
                    }
                    else
                    {
                        self::get_loader($Loader);
                    }
                }
            } 
            else 
            {
                if(uri1 === 'configuration')
                {
                    if(last_ori_uri === $GLOBALS['configuration_API_Key'] || $GLOBALS['configuration_API_Key'] === 'ML_CONFIG_API_ID') 
                    {
                        self::get_loader($Loader);
                    }
                    else
                    {
                        $Loader->error('system', '404');
                    }
                }
                else 
                {
                    self::get_loader($Loader);
                }
            }            
        }

        private static function get_loader($Loader)
        {
            while(self::$url_index < uris) 
            {
                if(file_exists(CONTROLLERS_PATH  . uri[self::$url_index].'.php')) 
                {
                    self::create_loader($Loader);
                    break;
                } 
                else if(file_exists(SYSTEM_CONFIG_PATH  . uri[self::$url_index].'.php'))
                {
                    self::create_loader($Loader, 'system');
                    break;
                }
                else if(file_exists(MADELINE . 'user_guide/ug_controllers'  . DS . uri[self::$url_index].'.php')) 
                {
                    self::create_loader($Loader,'manual');
                    $found = true;
                    break;
                }
                else
                {
                    self::load_from_other_folders($Loader);
                    break;
                }
                self::$url_index++;
            }
            self::check_load_default($Loader);
        }

        # check if requested controller exists
        private static function get_nested_loader($Loader)
        {
            $checked_uris   = 0;
            $checked_uri    = '';
            for($i = 0; $i <= uris; $i++)
            {
                $new_uri    = ($i === 0) ? uri[$i] : $checked_uri;
                $new_uri    = (count(explode('/', $new_uri)) > 1) ? rtrim($new_uri, '/') : $new_uri;
                if(file_exists(CONTROLLERS_PATH  . $new_uri.'.php')) 
                {
                    self::$found     = true;
                    self::$url_index = $i;
                    self::create_nested_loader($Loader, CONTROLLERS_PATH  . $new_uri.'.php');
                    break;
                } 
                else if(file_exists(SYSTEM_CONFIG_PATH  . $new_uri.'.php'))
                {
                    self::$found     = true;
                    self::$url_index = $i;
                    self::create_nested_loader($Loader, SYSTEM_CONFIG_PATH  . $new_uri.'.php', 'system');
                    break;
                }
                else
                {
                    if(isset(uri[$i]))
                    {
                        $checked_uris   += 1;
                        $checked_uri    .= uri[$i].'/';
                    }
                }
            }
        }

        # create loader for requested controller
        private static function create_nested_loader($Loader, $path = '', $type = '') 
        {
            if($type == 'system') 
            {
                $Loader->configuration(uri[self::$url_index - 1]);
            } 
            else 
            {
                $Loader->controller(uri[self::$url_index - 1], $path);
            }

            $class_name = uri[self::$url_index - 1].'';
            if(class_exists($class_name)) 
            {
                $class      = new $class_name();
                if(self::$url_index === uris)
                {
                    if(method_exists($class, self::$default_method)) 
                    {
                        $class->{self::$default_method}();
                    } 
                    else 
                    {
                        $Loader->error();
                    }
                }
                else if(self::$url_index < uris)
                {
                    if(method_exists($class, uri[self::$url_index])) 
                    {
                        $class->{uri[self::$url_index]}();
                    } 
                    else 
                    {
                        if(is_numeric(uri[self::$url_index]))
                        {
                            if(method_exists($class, self::$default_method)) 
                            {
                                $class->{self::$default_method}();
                            }
                            else
                            {
                                $Loader->error();
                            }
                        }
                        else
                        {
                            if(method_exists($class, self::$default_method)) 
                            {
                                $class->{self::$default_method}();
                            }
                            else
                            {
                                $Loader->error($path.' '.uri[self::$url_index]);
                            }
                        }
                    }
                }
            } 
            else 
            {
                $Loader->error();
            }
        }
    }
?>
