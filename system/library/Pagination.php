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
    
    # Pagination Class
    #
    # @package		Madeline
    # @subpackage	Library
    # @category	Cookies
    # @author		Stevani Andolo
     
    class ML_Pagination
    {
        protected $base_url     = BASE_URL;

        # Default Total Rows
        protected $total_rows   = '';        
        
        # Default Per Page
        protected $per_page     = '';        
        
        # Default Total Links
        protected $total_links  = '';
    
        protected $current_page = 1;

        # Set Pagination Name and Value
        public function set($config = array()) 
        {
            # ceck
            if(isset($config['base_url'])) 
            {
                # set
                $this->base_url     = $config['base_url'];
            }
            
            # ceck
            if(isset($config['total_rows'])) 
            {
                # set
                $this->total_rows   = $config['total_rows'];
            }
            
            # ceck
            if(isset($config['per_page'])) 
            {
                # set
                $this->per_page     = $config['per_page'];
            }
            
            # set current page
            if(is_numeric(last_uri))
            {
                $this->current_page = last_uri;
            }
        }
        
        # Get Session Value
        public function links() 
        {
            if($this->total_rows > $this->per_page)
            {
                $number_of_pages = ceil($this->total_rows / $this->per_page);
                
                # set id
                $id = $this->current_page;
                if(isset($_POST['page']))
                {
                    $id = $_POST['page'];
                }

                bootstrap_icon();
                to('div','style::margin:auto;*text-align:center;*padding:10px');
                    # previouse button            
                    if($this->current_page > 1 && $this->current_page <= $number_of_pages)
                    {
                        to('div','style::display:inline;*margin-right:20px');
                            if($this->current_page > 2)
                            {
                                echo '<a style="text-decoration:none; margin-right:10px" aria-hidden="true" href="' . rtrim($this->base_url, '/').'/1">
                                        <span style="color:#fff; padding:7px 15px; border-radius:5px; background:#2674a5;" class="glyphicon glyphicon-backward"></span>
                                    </a> ';
                            }
                            echo '<a style="text-decoration:none" aria-hidden="true" href="' . rtrim($this->base_url, '/').'/'.($this->current_page - 1) . '">
                                    <span style="color:#fff; padding:7px 15px; border-radius:5px; background:#2674a5;" class="glyphicon glyphicon-chevron-left"></span>
                                </a> ';
                        tc('div');
                    }

                    echo '
                        <form style="display:inline" action="ml-pagination-url" method="POST">
                            <input style="width:100px; color:#353535; font-family:century; font-size:18px; font-weight:bold; padding: 7px 10px; border-radius: 5px" type="number" name="page" value="'.$id.'"/>
                            <input type="hidden" name="url" value="'.$this->base_url.'"/>
                        </form>
                    ';
                    
                    # next button
                    if($this->current_page < $number_of_pages)
                    {
                        to('div','style::display:inline;*margin-left:20px');
                            echo '<a style="text-decoration:none; margin-right:10px" aria-hidden="true" href="' . rtrim($this->base_url, '/').'/'.($this->current_page + 1) . '">
                                    <span style="color:#fff; padding:7px 15px; border-radius:5px; background:#35af72;" class="glyphicon glyphicon-chevron-right"></span>
                                </a> ';
                            if($number_of_pages - $this->current_page > 1)
                            {
                                echo '<a style="text-decoration:none" aria-hidden="true" href="' . rtrim($this->base_url, '/').'/'.($number_of_pages) . '">
                                        <span style="color:#fff; padding:7px 15px; border-radius:5px; background:#35af72;" class="glyphicon glyphicon-forward"></span>
                                    </a> ';
                            }
                        tc('div');
                    }
                tc('div');
            }
        }
    }    
?>