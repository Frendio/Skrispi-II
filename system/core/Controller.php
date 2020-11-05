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
    
    class ML_Controller
    {
        private static  $instance; 
    
        public function __construct()
        {
            # assign $instance with this
            self::$instance = $this;

            # create instance of ML_Input
            $this->input    = new ML_Input();

            # create instance of ML_Model
            $this->model    = new ML_Model();

            # create instance of ML_Encryption
            $this->encrypt  = new ML_Encryption();

            # create instance of ML_Getter
            $this->get      = new ML_Getter();
        }
    
        # return $instance
        public static function get_instance()
        {
            return self::$instance;
        }

        # create class instance
        protected function _init_class($class, $config = null)
        {
            if(strpos($class, 'ML_') !== false) 
            {
                $name = strtolower(str_replace('ML_', "", $class));
            } 
            else 
            {
                $name = strtolower($class);
            }
            
            if(!is_null(self::get_instance()) && class_exists($class)) 
            {
                self::get_instance()->$name = new $class($config);
            }
            else
            {
                if(defined('uri1') && uri1 === $GLOBALS['ApiLine_API_Key'])
                {
                    exit(json_encode('MadeLine Api: '. "\n" .'"Class Name" should be the same as controller name "'.$class.'."'));
                }
                else
                {
                    self::error();
                }
            }
        }

        # check for slashes
        protected function slash_check($data) 
        {
            if(strpos($data, '/') !== false) 
            {
                $data    = explode('/', rtrim($data, '/'));
                return end($data);
            } 
            else 
            {
                return $data;
            }
        }

        # return current application directory name
        protected function app_fn() 
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

        # return current system directory name
        protected function sys_fn() 
        {
            REQUIRE SYSTEM_CONFIG_PATH . "directory_configuration.php";

            if($directory['system'] == 'S_D') 
            {
                return 'system';
            } 
            else 
            {
                return $directory['system'];
            }
        }

        # load my_libraries file
        public function my_library($lib,$type = '')
        {
            if($type === 'manual')
            {
                self::check_loaded_folder_file($lib,USER_GUIDE_PATH.'ug_libraries/',self::app_fn()."/ug_libraries/*",'ug_libraries');
                $lib = self::slash_check($lib);
                self::_init_class($lib);
            }
            else
            {
                if(strpos($lib, ',') !== false) 
                {
                    $lib    = trim(preg_replace('/\s\s+/', ' ', $lib));
                    $lib    = str_replace(' ','',$lib);
                    $lib    = explode(',',$lib);
                
                    for($i = 0; $i < count($lib); $i ++) 
                    {
                        self::check_loaded_folder_file($lib[$i],MY_LIBRARIES_PATH,self::app_fn()."/my_libraries/*",'_my_libraries');
                        $lib[$i]  = self::slash_check($lib[$i]);
                        self::_init_class($lib[$i]);
                    }
                } 
                else 
                {
                    self::check_loaded_folder_file($lib,MY_LIBRARIES_PATH,self::app_fn()."/my_libraries/*",'_my_libraries');
                    $lib = self::slash_check($lib);
                    self::_init_class($lib);
                }
            }
        }

        # load library file
        public function library($lib, $config=null)
        {
            if(strpos($lib, ',') !== false) 
            {
                $lib    = trim(preg_replace('/\s\s+/', ' ', $lib));
                $lib    = str_replace(' ','',$lib);
                $lib    = explode(',',$lib);
             
                for($i = 0; $i < count($lib); $i ++) 
                {
                    self::check_loaded_folder_file(ucfirst($lib[$i]),LIBRARY_PATH,'system/library/*','library');
                    self::_init_class('ML_'.ucfirst($lib[$i]), $config);
                }
            } 
            else 
            {
                self::check_loaded_folder_file(ucfirst($lib),LIBRARY_PATH,'system/library/*','library');
                self::_init_class('ML_'.ucfirst($lib), $config);
            }
        }

        # load register file
        public function register($register)
        {
            INCLUDE_ONCE REGISTER_PATH . "$register.php";
            self::_init_class($register);
        }

        # load view file
        public function view($view, $data = null)
        {
            if(defined('uri1') && uri1 === 'manual' || $view === 'manual_search')
            {
                self::check_loaded_folder_file($view,USER_GUIDE_PATH.'ug_views/',self::app_fn().'/ug_views/*','ug_views',$data);
            }
            else
            {
                self::check_loaded_folder_file($view,VIEWS_PATH,self::app_fn().'/views/*','_views',$data);
            }
        }

        # load ml_config file
        public function ml_config($view, $data = null)
        {
            self::check_loaded_folder_file($view,ML_CONFIG_PATH,self::sys_fn().'/ml_config/*','_ml_config',$data);
        }

        # load error file
        public function error($data=null,$file_name=null,$type=null,$method=null,$path=null,$undefined=null)
        {
            REQUIRE CONFIGURATION_PATH  . "routes.php";
            REQUIRE SYSTEM_CONFIG_PATH  . "directory_configuration.php";

            if($data == null) 
            {
                INCLUDE_ONCE ERROR_PATH . "error_error.php";
            } 
            else 
            {
                if(strpos($data, ' ') !== false)
                {
                    $controller = isset(explode(' ', $data)[0]) ? explode(' ', $data)[0] : '';
                    $method     = isset(explode(' ', $data)[1]) ? explode(' ', $data)[1] : '';
                    INCLUDE_ONCE ERROR_PATH . "error_error.php";
                }
                else
                {
                    if($data == 'system')
                    {
                        INCLUDE_ONCE ERROR_PATH . "error_error.php";
                    } 
                    else
                    {
                        INCLUDE_ONCE ERROR_PATH . "{$data}_error.php";
                    }
                }
            }
        }

        # load user_error file
        public function user_error($data=null)
        {
            if(defined('uri1') && uri1 === $GLOBALS['ApiLine_API_Key'])
            {
                if(strpos(BROWSER, 'okhttp') !== false)
                {
                    exit(json_encode($data));
                }
                else
                {
                    if(STATUS === 'development')
                    {
                        INCLUDE_ONCE ERROR_PATH . "user_error.php";
                    }
                    else
                    {
                        self::error('404');
                    }
                }
            }
            else
            {
                if(strpos(BROWSER, 'okhttp') !== false)
                {
                    exit(json_encode($data));
                }
                else
                {
                    INCLUDE_ONCE ERROR_PATH . "user_error.php";
                }
            }
        }

        # load ajax_view file
        public function model($model = '')
        {
            if(strpos($model, ',') !== false) 
            {
                $model  = trim(preg_replace('/\s\s+/', ' ', $model));
                $model  = str_replace(' ','',$model);
                $model  = explode(',',$model);
             
                for($i = 0; $i < count($model); $i ++) 
                {
                    self::check_loaded_folder_file($model[$i],MODELS_PATH,self::app_fn().'/models/*','_models');
                    $model[$i]  = self::slash_check($model[$i]);
                    self::_init_class("{$model[$i]}_model");
                }
            } 
            else 
            {
                self::check_loaded_folder_file($model,MODELS_PATH,self::app_fn().'/models/*','_models');
                $model  = self::slash_check($model);
                self::_init_class("{$model}_model");
            }
        }

        # load controller file
        public function controller($controller = '', $file = '')
        {
            if($file === '')
            {
                self::check_loaded_folder_file($controller,CONTROLLERS_PATH,self::app_fn()."/controllers/*",'_controllers');
            }
            else
            {
                if($file === 'manual')
                {
                    self::check_loaded_folder_file($controller,USER_GUIDE_PATH.'ug_controllers/',self::app_fn()."/ug_controllers/*",'ug_controllers');
                }
                else
                {
                    INCLUDE_ONCE $file;
                }
            }
            $controller  = self::slash_check($controller);
            self::_init_class($controller);
        }

        # load controller file
        public function files($files = '')
        {
            self::check_loaded_folder_file($files,CONTROLLERS_PATH,self::app_fn()."/controllers/*",'_controllers');
        }

        # load migration file
        public function migration($migration = '')
        {
            self::check_loaded_folder_file("migration_$migration".'_database',DATABASE_PATH,self::app_fn()."/database/*",'_database');
            self::_init_class("migration_$migration".'_database');
        }

        # load controller file
        public function configuration($controller = '')
        {
            self::check_loaded_folder_file($controller,SYSTEM_CONFIG_PATH);
            self::_init_class($controller);
        }

        # requested file loader
        protected function check_loaded_folder_file($file,$constant,$path=null,$type=null,$data=null) 
        {            
            if(isset($data)) 
            {
                if(is_array($data)) 
                {
                    $b = array_keys($data);

                    $a = 0;
                    $d = '';
                    while($a < count($data)) 
                    {
                        ${$b[$a]}       = $data[$b[$a]];
                        $this->{$b[$a]} = $data[$b[$a]];
                        $a++;
                    }
                }
            }
            
            $found  = false;
            if (file_exists($constant  . "$file.php")) 
            {  
                INCLUDE_ONCE $constant . "$file.php";
                $found = true;  
            }
            else 
            {  
                $data   = array_filter(glob($path), 'is_dir');
                $ak     = array_keys($data);
    
                for($iz = 0; $iz < count($data); $iz++) 
                {    
                    $folder_name = $data[$ak[$iz]];
                    $fn_constant = str_replace('-','_',$folder_name).$type.'_path';
                    $fn_constant = explode('/', str_replace('-','_',rtrim($fn_constant, '/')));
                    $fn_constant = strtoupper(end($fn_constant));
      
                    if (file_exists(MADELINE . $folder_name . DS  . "$file.php")) 
                    {
                        INCLUDE_ONCE MADELINE . $folder_name . DS . "$file.php";
                        $found = true;
                        break;
                    } 
                    else 
                    {
                        $found = false;
                    }    
                }  
            }
            
            if($found == false) 
            {
                if(DEFINED('AJAXPATH')) 
                {
                    self::error('ajax_notfound',$file,str_replace('_','',$type));
                    exit();
                } 
                else 
                {
                    self::error('notfound',$file,str_replace('_','',$type));
                    exit();
                }
            }
        }

        private function library_magic()
        {
            $library    = str_replace('.php','',scandir(LIBRARY_PATH));
            $lk         = array_keys($library);
        
            for($i = 0; $i < count($library); $i++) 
            {
                $libray_name = strtolower($library[$lk[$i]]);

                if(!isset($this->$libray_name))
                {
                    $this->$libray_name = '';
                }                
            }
        }    
    }    
?>