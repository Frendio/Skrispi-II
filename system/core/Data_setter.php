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
    # @author	Stevani Andolo
    # @version  V1

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    function set_data($value = '')
    {
        if($value == '' || $value == null)
        {
            return '-';
        }
        else
        {
            return $value;
        }
    }

    function set_mod_name($name = null)
    {
        if($name == 'allowed_pages') {
            return 'Allowed and Redirect Pages';
        } else if($name == '404_image') {
            return '404, 403 and menu bar logo (default : MadeLine logo)';
        } else if($name == '404_custom_page') {
            return 'Error 404 custom page (default : MadeLine error 404)';
        } else if($name == '403_custom_page') {
            return 'Error 403 custom page (default : MadeLine error 403)';
        } else {
            return str_replace('_',' ',ucfirst($name));
        }
    }

    function set_mod_ph($name = null)
    {
        if($name == 'allowed_pages') {
            return 'Allowed and Redirect Pages';
        } else if($name == '404_image') {
            return '404, 403 and menu bar logo';
        } else if($name == '404_custom_page') {
            return 'Error 404 custom page';
        } else if($name == '403_custom_page') {
            return 'Error 403 custom page';
        } else {
            return str_replace('_',' ',ucfirst($name));
        }
    }
    
    function selected($value, $option, $echo = true)
    {            
        if($value == $option) 
        {
            if($echo === true)
            {
                echo 'selected';
            }
            else
            {
                return 'selected';
            }
        } 
        else 
        {
            echo '';
        }
    }

    function v_p($value,$placeholder)
    {            
        if($value == '') 
        {
            echo "placeholder=\"$placeholder\"";
        } 
        else 
        {
            echo "value=\"$value\"";
        }    
    }

    function uc_all($data)
    {
        $new_data   = '';
        $data       = explode(' ', $data);
        for($i = 0; $i < count($data); $i++)
        {
            $new_data .= ucfirst($data[$i]).' ';
        }
        return rtrim($new_data, ' ');
    }

    function redirect($url = '')
    {
        if($url === '404' || $url === '403')
        {
            exit(header("location: ".$url));
        }
        else
        {
            exit(header("location: ".BASE_URL.$url));
        }
    }

    function string_replace($delimeter = '', $replace = '', $string = '')
    {
        $delimeter  = str_replace(' ', '', $delimeter);
        if(strpos($delimeter, '|') !== false)
        {
            $new_string = $string;
            $delimeter  = explode('|', $delimeter);
            for($i = 0; $i < count($delimeter); $i++)
            {
                $new_string = str_replace($delimeter[$i], $replace, $new_string);
            }

            return $new_string;
        }
        else
        {
            return str_replace($delimeter, $replace, $string);
        }
    }

    function set_color($id)
    {
        $color  = array(
                        'brand',
                        'info',
                        'danger',
                        'success',
                        'warning',
                        'focus',
                        'accent',
                        'primary',
                        'focus',
                        'secondary',
                        
                        'brand',
                        'info',
                        'danger',
                        'success',
                        'warning',
                        'focus',
                        'accent',
                        'primary',
                        'focus',
                        'secondary',
                    );
        $random = array_rand($color, 20);
        return $color[$random[$id]];
    }

    function kbp_color($id)
    {
        $color  = array(
                        'accent',
                        'danger',
                        'info',
                        'warning',
                    );
        $random = array_rand($color, 4);
        return $color[$random[$id]];
    }
?>