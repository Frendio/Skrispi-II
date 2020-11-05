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
    
    
    # Session Class
    #
    # @package		Madeline
    # @subpackage	Library
    # @category	    Session
    # @author		Stevani Andolo
     
    class ML_Session
    {
        # client ip
        protected $client = '';
        
        # Constructor
        #
        # @param	array	$config
        # Assign Parsed Values      
        public function __construct() 
        { 
            # new ML_Input object
            $this->input    = new ML_Input();
            
            # new ML_Getter object
            $this->get      = new ML_Getter();
            
            # get cliet ip
            $this->client   = str_replace('.', '', $this->get->user_ip());
            
            # loop all sessions
            foreach ($_SESSION as $session => $data)
            {
                # declate new session variable
                $this->$session = $data;
            }
        }

        public function login_check($session = '', $page = '', $ajax = false)
        {
            if($this->exists($session))
            {
                # redirect to redirect page
                if($ajax == false)
                {
                    exit(header("location: ".BASE_URL.$page));
                }
                else
                {
                    exit('reload');
                }
            }
        }

        public function access_check($session = '', $page = '', $ajax = false)
        {
            if(!$this->exists($session))
            {
                # redirect to redirect page
                if($ajax == false)
                {
                    exit(header("location: ".BASE_URL.$page));
                }
                else
                {
                    exit('reload');
                }
            }
        }
        
        # check user level
        public function user_level($auth_user = '', $check_user = '', $redirect = '', $ajax = false)
        {
            # checked from login_page
            if($check_user != $auth_user)
            {
                if(strpos($auth_user, ',') !== false)
                {
                    $status	= 0;
                    $user		= explode(',', str_replace(', ', ',', ltrim(rtrim($auth_user, ','), ',')));
                    for($i = 0; $i < count($user); $i++)
                    {
                        if($check_user != $user[$i])
                        {
                            $status++;
                        }
                        else
                        {
                            $status--;
                        }
                    }
                    if($status == count($user))
                    {
                        if($redirect != '')
                        {
                            if($ajax == false)
                            {
                                # redirect to redirect page
                                exit(header('location: '.BASE_URL.$redirect));
                            }
                            else
                            {
                                exit('Access Denied!');
                            }
                        }
                        else
                        {
                            if($ajax == false)
                            {
                                # redirect to home page
                                exit(header('location: '.BASE_URL));
                            }
                            else
                            {
                                exit('Access Denied!');
                            }
                        }
                    }				
                }
                else
                {
                    if($redirect != '')
                    {
                        if($ajax == false)
                        {
                            exit(header('location: '.BASE_URL.$redirect));
                        }
                        else
                        {
                            exit('Access Denied!');
                        }
                    }
                    else
                    {
                        if($ajax == false)
                        {
                            exit(header('location: '.BASE_URL.$redirect));
                        }
                        else
                        {
                            exit('Access Denied!');
                        }
                    }
                }
            }
        }
        
        # Set Session Name and Value
        public function set($session, $data=null) 
        {            
            $_SESSION[$session] = $data;
        }        
        
        # clear sessino and logout
        public function logout($session, $page = null)
        {
            # clear session
            $this->unset_session($session);
            exit(header('location: '.BASE_URL.$page));
        }
        
        # Clear session      
        public function clear($session)
        {
            if(strpos($session, ',') !== false) 
            {
                $session         = str_replace(' ', '', $session);
                $session         = str_replace("\n", '', $session);
                $session         = explode(',', $session);
                $count_session   = count($session);
                for($i = 0; $i < $count_session; $i++) 
                {
                    unset($_SESSION[$session[$i]]);
                }
            } 
            else 
            {
                unset($_SESSION[$session]);
            }
        }   
        
        # Clear session      
        public function unset_session($session)
        {
            if(strpos($session, ',') !== false) 
            {
                $session         = str_replace(' ', '', $session);
                $session         = str_replace("\n", '', $session);
                $session         = explode(',', $session);
                $count_session   = count($session);
                for($i = 0; $i < $count_session; $i++) 
                {
                    unset($_SESSION[$session[$i]]);
                }
            } 
            else 
            {
                unset($_SESSION[$session]);
            }
        }
        
        # Xsrf Input
        public function xsrf_input($type = '', $length = 1) 
        {
            $expires_in = $this->verify_xsrf($type,$length);

            # set a session if not set yet
            if(!$this->exists($this->client.'-ml-xsrf-token-'.$expires_in))
            {
                $this->set($this->client.'-ml-xsrf-token-'.$expires_in, password_hash(sha1(uniqid(mt_rand()).$this->client), PASSWORD_DEFAULT));
            }
            
            # return the element
            return '<input type="hidden" name="'.$this->client.'-ml-xsrf-token-'.$expires_in.'" value="'.$this->get($this->client."-ml-xsrf-token-".$expires_in).'">';
        }        
        
        # Xsrf Meta
        public function xsrf_meta($type = '', $length = 0) 
        {
            $expires_in = $this->verify_xsrf($type,$length);

            # set a session if not set yet
            if(!$this->exists($this->client.'-ml-xsrf-token-'.$expires_in))
            {
                $this->set($this->client.'-ml-xsrf-token-'.$expires_in, password_hash(sha1(uniqid(mt_rand()).$this->client), PASSWORD_DEFAULT));
            }
            
            # return the element
            echo '<meta name="'.$this->client.'-ml-xsrf-token-'.$expires_in.'" content="'.$this->get($this->client."-ml-xsrf-token-".$expires_in).'">';
        }
        
        # Xsrf data
        public function xsrf_data($type = '', $length = 0) 
        {
            $expires_in = $this->verify_xsrf($type,$length);

            # set a session if not set yet
            if(!$this->exists($this->client.'-ml-xsrf-data-token-'.$expires_in))
            {
                $this->set($this->client.'-ml-xsrf-data-token-'.$expires_in, password_hash(sha1(uniqid(mt_rand()).$this->client), PASSWORD_DEFAULT));
            }
            return str_replace('/','*', $this->get($this->client.'-ml-xsrf-data-token-'.$expires_in));
        }
        
        # Xsrf email verification
        public function xsrf_email_verification($identifier, $type = '', $length = 0) 
        {
            $expires_in = $this->verify_xsrf($type,$length);

            # set a session if not set yet
            if(!$this->exists($identifier.'-ml-xsrf-data-token-'.$expires_in))
            {
                $this->set($identifier.'-ml-xsrf-data-token-'.$expires_in, sha1(md5($identifier.$expires_in)));
            }
            return str_replace('/','*', $this->get($identifier.'-ml-xsrf-data-token-'.$expires_in));
        }

        protected function verify_xsrf($type, $length)
        {
            # loop all session
            foreach($_SESSION as $key => $value)
            {
                # check if ml-xsrf-token session is found
                if (strpos($key, '-ml-xsrf-token-') !== false)
                {
                    # clear all expired ml-xsrf-token session
                    $this->unset_session($key);
                }
            }

            # check if minute or hour
            if($type == 'm')
            {
                return date("hi") + $length;
            }
            else if($type == 'h')
            {
                return date('h') + $length;
            }
            else
            {
                return date("hi") + $length;
            }
        }
        
        # Validates Xsrf        
        public function validate_xsrf($type = '') 
        {
            # check if minute or hour
            if($type == 'm')
            {
                $expires_in = date('hi') + 0;
            }
            else if($type == 'h')
            {
                $expires_in = date('h') + 0;
            }
            else
            {
                $expires_in = date('hi') + 0;
            }

            # loop all session
            foreach($_SESSION as $key => $value)
            {
                # check if ml-xsrf-token session is found
                if (strpos($key, $this->client.'-ml-xsrf-token-') !== false)
                {
                    $current = $this->client.'-ml-xsrf-token-'.$expires_in;
                    if(isset($_POST[$key]) && $key > $current)
                    {
                        if($this->get($key) == $this->input->post($key)) 
                        {
                            return true;
                            break;
                        } 
                        else 
                        {
                            return false;
                            break;
                        }
                    }
                    else
                    {
                        return false;
                        break;
                    }
                }
            }
        }        
        
        # Get Session Value
        public function get($session) 
        {            
            if(isset($_SESSION[$session])) 
            {
                return $_SESSION[$session];
            } 
            else 
            {
                return false;
            }    
        }        
        
        # Check Session Exists
        public function exists($session) 
        {                    
            if(isset($_SESSION[$session])) 
            {
                return true;
            } 
            else 
            {
                return false;
            } 
        }        
    }    
?>