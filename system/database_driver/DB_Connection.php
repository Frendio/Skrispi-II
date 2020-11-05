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
    
    class ML_DB_Connection
    {    
        protected $conn         = false;        
        protected $fields       = array();
        protected $fetch_type   = 'assoc';
        protected $environment; 
    
        public function __construct($config)
        {
            require CONFIGURATION_PATH . "routes.php";
            $this->environment  = $route['status'];

            $host               = $this->validate_DB($config['host']);    
            $user               = $this->validate_DB($config['user']);    
            $password           = $this->validate_DB($config['password']);    
            $dbname             = $this->validate_DB($config['dbname']);    
            $this->fetch_type   = $this->validate_DB($config['fetch_type']);

            if($host != '' && $user != '') 
            {
                $this->conn = new mysqli($host, $user, $password, $dbname) or   die(
                                                                                    to('center').
                                                                                        bl().make('b', '*** DATABASE CONNECTION ERROR ***', 'style::color:#ff2a2a;').ul().
                                                                                        show('Check your Host, User, Password or Database Name').
                                                                                        make('a', 'Database Configuration', 'class::link*docs href::configuration/database').bl(2).
                                                                                    tc('center')
                                                                                );
        
            }        
        }

        public function validate_DB($db_att = null) 
        {                
            if($db_att == 'DB_H')
            {
                return '';
            } 
            else if($db_att == 'DB_U') 
            {
                return '';
            } 
            else if($db_att == 'DB_P') 
            {
                return '';
            } 
            else if($db_att == 'DB_N') 
            {
                return '';
            } 
            else 
            {
                return $db_att;
            }
        }
    
        public function query($sql)
        {
            if($this->conn !== false)
            {
                $sql    = $sql;    
                $result = $this->conn->query($sql); 
                
                if (! $result) 
                {   
                    if($this->errno() == 1044) 
                    {
                        if(strpos(BROWSER, 'okhttp') !== false)
                        {
                            die(json_encode("*** DATABASE CONNECTION ERROR ***
                                    \nCheck your Host, User, Password or Database Name
                                "));
                        }
                        else
                        {
                            if($this->environment === 'development')
                            {
                                die(
                                    to('center').
                                        bl().make('b', '*** DATABASE CONNECTION ERROR ***', 'style::color:#ff2a2a;').ul().
                                        show('Check your Host, User, Password or Database Name').
                                        make('a', 'Database Configuration', 'class::link*docs href::configuration/database').bl(2).
                                    tc('center')
                                );
                            }
                            else
                            {
                                die('DATABASE CONNECTION ERROR!');
                            }
                        }
                    } 
                    else 
                    {
                        if(strpos(BROWSER, 'okhttp') !== false)
                        {
                            if($this->error() === 'No database selected')
                            {
                                die(json_encode("*** SQL ERROR ***
                                        \n".$this->error()."
                                    "));
                            }
                            else
                            {
                                die(json_encode("
                                    *** SQL ERROR ***
                                    \n".$this->error()."
                                    \nSQL ERROR : ".$sql."
                                "));
                            }
                        }
                        else
                        {
                            if($this->error() === 'No database selected')
                            {
                                if($this->environment === 'development')
                                {
                                    die(
                                        to('center').
                                            bl().make('b', '*** SQL ERROR ***', 'style::color:#ff2a2a;').ul().
                                            show($this->error().', please select a database in Database Configuration and try again!').
                                            bl(2).show('SQL ERROR : "'.$sql.'"').bl(2).
                                        tc('center')
                                    );
                                }
                                else
                                {
                                    die($this->error().', please select a database in Database Configuration and try again!');
                                }
                            }
                            else
                            {
                                if(strpos($this->error(), 'already exists'))
                                {
                                    if($this->environment === 'development')
                                    {
                                        die(
                                            to('center').
                                                bl().make('b', '*** SQL ERROR ***', 'style::color:#ff2a2a;').ul().
                                                show($this->error().', please insert another table!').bl(2).
                                            tc('center')
                                        );
                                    }
                                    else
                                    {
                                        die($this->error().', please insert another table!');
                                    }
                                }
                                else
                                {
                                    die(
                                        to('center').
                                            bl().make('b', '*** SQL ERROR ***', 'style::color:#ff2a2a;').ul().
                                            show($this->error()).
                                            bl(2).show('SQL ERROR : "'.$sql.'"').bl(2).
                                        tc('center')
                                    );
                                }
                            }
                        }
                    }  
                }        
                return $result;    
            }
            else
            {
                if(strpos(BROWSER, 'okhttp') !== false)
                {
                    die(json_encode("*** DATABASE CONNECTION ERROR ***
                            \nCheck your Host, User, Password or Database Name
                        "));
                }
                else
                {
                    if($this->environment === 'development')
                    {
                        die(
                            to('center').
                                bl().make('b', '*** DATABASE CONNECTION ERROR ***', 'style::color:#ff2a2a;').ul().
                                show('Check your Host, User, Password or Database Name').
                                make('a', 'Database Configuration', 'class::link*docs href::configuration/database').bl(2).
                            tc('center')
                        );
                    }
                    else
                    {
                        die('DATABASE CONNECTION ERROR!');
                    }
                }
            }
        }
    
        public function escape_string($data)
        {       
            if($this->conn != false)
            {
                return mysqli_real_escape_string($this->conn,$data);
            }
            else
            {
                return $data;
            }
        }
    
        public function get_insert_id()
        {    
            return mysqli_insert_id($this->conn);    
        }
    
        public function close() 
        {    
            return mysqli_close($this->conn);    
        }
    
        public function errno()
        {    
            return mysqli_errno($this->conn);    
        }
    
        public function error()
        {    
            return mysqli_error($this->conn);    
        }
    
        public function get($sql, $type = '')
        {            
            $result = $this->query($sql);
            
            if($type != '') 
            {
                if($type == '1') 
                {
                    return $this->mysqli_fetch_type($result);
                } 
                else if($type == 'c') 
                {
                    return mysqli_num_rows($result);
                } 
                else 
                {
                    if(strpos(BROWSER, 'okhttp') !== false)
                    {
                        exit('WORING OPERATOR, ONLY (1) OR ("c") IS ALLOWED!');
                    }
                    else
                    {
                        exit(json_encode('WORING OPERATOR, ONLY (1) OR ("c") IS ALLOWED!'));
                    }
                }
            } 
            else 
            {
                $list = array();
        
                while ($row = $this->mysqli_fetch_type($result))
                {    
                    $list[] = $row;    
                }
                
                return $list;
            }
        }
        
        
        /**
        * Insert records   
        * @access   public   
        * @param    $sql 
        * @return   bool or inserted_id
        */
   
        public function insert($sql)
        {    
            if ($this->query($sql)) 
            {    
                return $this->get_insert_id();    
            } 
            else 
            {    
                return false;    
            }            
        }

        /**    
         * Update records    
         * @access  public    
         * @param   $sql  
         * @return  bool 
         */
    
        public function update($sql)
        {    
            if ($this->query($sql))
            {    
                if ($rows = mysqli_affected_rows($this->conn))
                {
                    return true;  
                } 
                else 
                {
                    return false;    
                }        
            } 
            else 
            {
                return false;    
            }    
        }

        /**
    
         * Delete records    
         * @access  public    
         * @param   $sql 
         * @return  bool  
         */
    
        public function delete($sql)
        {    
            if ($this->query($sql)) 
            {     
                if ($rows = mysqli_affected_rows($this->conn)) 
                {
                    return true;    
                } 
                else 
                {
                    return false;    
                }        
            } 
            else 
            {
                return false;    
            }    
        }

        /**
    
         * Create Table    
         * @access  public    
         * @param   $sql
         * @return  bool
         */
    
        public function execute($sql)
        {    
            if ($this->query($sql)) 
            {     
                return true;       
            } 
            else 
            {
                return false;    
            }    
        }

        public function fetch_type()
        {
            return $this->fetch_type;
        }
        
        public function mysqli_fetch_type($result) 
        {
            if($this->fetch_type == 'object') 
            {
                return $result->fetch_object();
            } 
            else if($this->fetch_type == 'array') 
            {
                return $result->fetch_array();
            } 
            else if($this->fetch_type == 'assoc') 
            {
                return $result->fetch_assoc();
            }
        }    
    }    
?>