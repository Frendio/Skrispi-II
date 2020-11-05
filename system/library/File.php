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

    DEFINED('BASE_URL') OR exit(header('location: 403'));
    
    # File Uploading Class
    #
    # @package		Madeline
    # @subpackage	Library
    # @category	Upload
    # @author		Stevani Andolo
     
    class ML_File
    {        
        # Maximum Image Width   
        protected $max_width        = 1920;        
        
        # Maximum Image Height  
        protected $max_height       = 1080;        
        
        # 1MB = 1048576 Byte
        protected $mega_byte        = 1048576;        
        
        # Default Max Size
        protected $max_size         = 2097152;        
        
        # Default Image Size
        protected $new_filename     = '';        
        
        # Default Delete File
        protected $delete_file      = '';        
        
        # Default File Type
        protected $type             = '';        
        
        # Default Upload Path
        protected $path             = '';        
        
        # Default Upload Base Root
        protected $base_root        = '';        
        
        # Default Input File         
        protected $input_name       = '';        
        
        # Default resize image file         
        protected $resize           = '';   
        
        # Default resize image file         
        protected $index           = '';

        protected $dbconfig         = array();
        
        
        # Constructor
        #
        # @param	array	$config
        # Assign Parsed Values  
        # creates ML_DB_Connection object         
        public function __construct() 
        {    
            $this->dbconfig['host']       = $GLOBALS['configuration']['host'];    
            $this->dbconfig['user']       = $GLOBALS['configuration']['user'];    
            $this->dbconfig['password']   = $GLOBALS['configuration']['password'];    
            $this->dbconfig['dbname']     = $GLOBALS['configuration']['dbname'];    
            $this->dbconfig['fetch_type'] = $GLOBALS['configuration']['fetch_type'];
        }

        # Upload a file
        public function upload($config = array(), $new_fn = null) 
        {    
            $this->file_check = new ML_DB_Connection($this->dbconfig); 
            $this->load       = new ML_Controller();
            
            # ceck
            if(isset($config['new_file_name'])) 
            {
                # set
                $new_fn = $config['new_file_name'];
            }
            
            # ceck
            if(isset($config['input_name'])) 
            {
                # set
                $this->input_name   = $_FILES[$config['input_name']];
            }
            
            # ceck
            if(isset($config['index'])) 
            {
                # set
                $this->index         = $config['index'];
            }
            
            # ceck
            if(isset($config['path'])) 
            {
                # set
                $this->path         = ltrim(rtrim($config['path'], '/'), '/');
            }
            
            # ceck
            if(isset($config['delete_file']) && !empty($config['delete_file'])) 
            {
                # set
                $this->delete_file  = $config['delete_file'];
            }
            
            # ceck
            if(isset($config['resize'])) 
            {
                # set
                $this->resize       = $config['resize'];
            }
            
            # ceck
            if(isset($config['type'])) 
            {
                # set
                $this->type         = $config['type'];
            }
            
            # ceck
            if(isset($config['max_size'])) 
            {
                # set
                $this->max_size     = $config['max_size'];
            }
            
            # ceck
            if(isset($config['max_width'])) 
            {
                # set
                $this->max_width    = $config['max_width'];
            }
            
            # ceck
            if(isset($config['max_height'])) 
            {
                # set
                $this->max_height   = $config['max_height'];
            }

            # check if file exists
            if($this->file_exists()) 
            {
                $input = nl2br(!empty($this->index) ? $this->input_name["name"][$this->index] : $this->input_name["name"]);
                $input = str_replace("&amp;","&",$input);
                $input = stripslashes($input);
                $input = htmlentities($input);
                $input = $this->file_check->escape_string($input);
            
                $this->file_name        = $input;
                $this->file_temp_name   = !empty($this->index) ? $this->input_name["tmp_name"][$this->index]   : $this->input_name["tmp_name"];
                $this->file_type        = !empty($this->index) ? $this->input_name["type"][$this->index]       : $this->input_name["type"];
                $this->file_size        = !empty($this->index) ? $this->input_name["size"][$this->index]       : $this->input_name["size"];
                $this->file_error       = !empty($this->index) ? $this->input_name["error"][$this->index]      : $this->input_name["error"];
                
                # get file extenstion
                $this->file_extension   = explode(".", $this->file_name); 
                $this->file_extension   = end($this->file_extension);            
                
                # create new file name
                $new_fn = $this->create_file_name($new_fn);
                $this->new_filename = $new_fn;
                
                # check file type
                $this->file_type_check();
                
                # delete file if set
                $this->delete();
                
                # check if upload is successful
                if ($this->move_uploaded_file()) 
                {
                    # for image files
                    if ($this->type === 'image' && $this->resize != '' || $this->type === '' && preg_match("/\.(gif|jpg|jpeg|JPG|JPEG|png|PNG|svg|SVG)$/i", $this->file_name) && $this->resize != '') 
                    {
                        # get image H & W
                        list($width, $height)   = getimagesize(MADELINE.$this->path."/".$this->new_filename);
                        
                        # check image H & W
                        $this->check_image_wh($width,$height);
                        
                        # check file size
                        $this->check_file_size();
                        
                        # set image size
                        $this->set_image_size($width,$height);
                    } 
                    else 
                    {                    
                        # check file size
                        $this->check_file_size();
                    }
                    return true;
                } 
                else 
                {
                    # if false
                    exit('File upload failed, check your ("file name", "path", "base_folder", "apache max upload size")!');
                }
            } 
            else 
            {
                # if false
                return false;
            }    
        }
        
        # Create a file name
        public function create_file_name($new_fn) 
        {
            # check if new name is empty
            if($new_fn === null || $new_fn === '') 
            {
                return $this->create_duplicate(strtolower($this->file_name));
            } 
            else 
            {
                # check if rando name is chosen
                if($new_fn === 'random' || $new_fn === 'rand') 
                {
                    # return random file name
                    if(DIRECTORY_SEPARATOR === '/'){
                        return rand(123456789,999999999999999).'.'.strtolower($this->file_extension);
                    }
                    else
                    {
                        return rand(123456789,999999999).'.'.strtolower($this->file_extension);
                    }
                } 
                else 
                {
                    # return the inputed file name
                    return $this->create_duplicate(strtolower($new_fn.'.'.$this->file_extension));
                }
            }            
        }

        public function create_duplicate($file)
        {
            # set $ori_file and $file_name
            $file_name  = $file;
            $ori_file   = $file_name;

            # check if $file_name exists
            if(file_exists(MADELINE.$this->path.DS.$file_name)) 
            {
                # loo when found to get the last file's index
                while(file_exists(MADELINE.$this->path.DS.$file_name)) 
                {
                    # set $file_index
                    $file_index = explode(explode('.', $ori_file)[0], explode('.', $file_name)[0]);

                    # check if the inputed file is the same as $ori_file
                    if($ori_file === $file_name)
                    {
                        $file_name       = explode('.', $file_name)[0].'1'.'.'.$this->file_extension;
                    }
                    else
                    {
                        $file_name       = explode('.', $ori_file)[0].($file_index[1] + 1).'.'.$this->file_extension;
                    }
                    
                    # return $file_name if it doesn't exist yet
                    if(!file_exists(MADELINE.$this->path.DS.$file_name)) 
                    {
                        return strtolower($file_name);
                        break;
                    }
                }
            }
            else
            {
                # return the $file_name
                return strtolower($file_name);
            }
        }
        
        # Check user supplied file type
        public function file_type_check() 
        {
            # check if image file type
            if ($this->type === 'image') 
            {
                # execute image function
                $this->image();
            }
            else
            {
                if ($this->type !== '') 
                {
                    $this->validate_OF();
                }
            }
        }
        
        # Image file
        public function image() 
        {            
            # validate image file
            $this->validate_image();            
        }
        
        # Validate an other file
        public function validate_OF() 
        {
            # check image file
            if (!preg_match("/\.(".strtolower($this->type).")$/i", strtolower($this->file_name)))
            {
                # throw an error
                exit('Your file was not an/a '.strtoupper($this->type).' file!');
            }            
        } 
        
        # Validate an image file
        public function validate_image() 
        {
            # check image file
            if (!preg_match("/\.(gif|jpg|jpeg|JPG|JPEG|png|PNG|svg|SVG)$/i", $this->file_name)) 
            {
                # throw an error
                exit('Your file was not an IMAGE file!');
            }            
        }        
    
        # Check image width & height
        public function check_image_wh($width,$height) 
        {
            # check if width and or height is < 10
            if($width < 10 || $height < 10)
            {
                # throw an error
                exit('The image has no dimension');
            }
        }
        
        # Check image size
        public function check_file_size()
        {
            # check for file size
            if($this->file_size > $this->max_size) 
            {
                $file_size = $this->max_size / $this->mega_byte;
                # throw an error
                exit("Your file is larger than $file_size MB");	
            }            
        }        
    
        # Set image size
        public function set_image_size($width,$height) 
        {
            # validates width and or height
            if($width > $this->max_width || $height > $this->max_height) 
            {
                # validates path
                if($this->path === '' || $this->path === null) 
                {
                    # set target and resized file
                    $target_file    = MADELINE.$this->new_filename;
                    $resized_file   = MADELINE.$this->new_filename;
                } 
                else 
                {
                    # set target and resized file
                    $target_file    = MADELINE.$this->path."/".$this->new_filename;
                    $resized_file   = MADELINE.$this->path."/".$this->new_filename;
                }
                # resize image
                $this->resize_image($target_file, $resized_file, $this->max_width, $this->max_height, $this->file_extension);                
            }            
        }
        
        # Resize image
        public function resize_image($target, $newcopy, $width, $height, $extension) 
        {
            # put original width and height into list
            list($original_width, $original_height)  = getimagesize($target);

            # set scale ration
            $scale_ratio            = $original_width / $original_height;
            
            # check if width/height bigger than scale ration
            if(($width / $height) > $scale_ratio) 
            {
                # set with
                $width = $height * $scale_ratio;
            } 
            else 
            {
                # set height
                $height = $width / $scale_ratio;
            }
            
            # resized image file
            $image = "";
            # set extentsion to lower case
            $extension = strtolower($extension);
            
            # check for gif
            if ($extension === "gif")
            { 
              $image = imagecreatefromgif($target);
            }
            # check for png 
            else if($extension =="png")
            { 
              $image = imagecreatefrompng($target);
            }
            # check for jpg
            else 
            { 
              $image = imagecreatefromjpeg($target);
            }
            
            # recreate the image based color
            $image_color = imagecreatetruecolor($width, $height);

            # resample the image
            imagecopyresampled($image_color, $image, 0, 0, 0, 0, $width, $height, $original_width, $original_height);

            # recreate jpeg image
            imagejpeg($image_color, $newcopy, $this->resize);             
        }
        
        # Move uploaded file
        public function move_uploaded_file() 
        {
            # return upload status
            return move_uploaded_file($this->file_temp_name, MADELINE.$this->path."/".$this->new_filename);            
        }        
    
        # Get file name
        public function file_exists() 
        {
            # check if file exists
            if($this->input_name["name"] === '' || $this->input_name["name"] === null) 
            {
                return false;
            } 
            else 
            {
                return true;
            }            
        }
        
        # Get file name
        public function name() 
        {
            # check if new file name is set
            if(!isset($this->new_filename)) 
            {
                # return empty
                return '';
            } 
            else 
            {
                # return new file name
                return $this->new_filename;
            }            
        }
        
        # Delete file         
        public function delete($file = '') 
        {
            # check if delete file is set
            if($file === '')
            {
                if($this->delete_file !== '') 
                {
                    # get the file
                    $file = MADELINE.$this->path."/".$this->delete_file; 

                    # check if the file exists
                    if (file_exists($file)) 
                    {
                        # delete the file
                        unlink($file);
                    }
                }
            }
            else
            {
                # check if the file exists
                if (file_exists(MADELINE.$file)) 
                {
                    # delete the file
                    unlink(MADELINE.$file);
                }
            }              
        }

        # create directory
        public function create_dir($location = '')
        {
            if($location != '')
            {
                if (!file_exists($location)) {
                    mkdir($location);
                }
            }
        }

        # delete directory
        public function delete_dir($location = '')
        {
            if($location != '')
            {
                if (file_exists($location)) {
                    unlink($location);
                }
            }
        }        
    }    
?>