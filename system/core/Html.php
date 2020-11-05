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

    # doctype generator
    function doctype()
    {
        echo '<!DOCTYPE html>';
    }

    # css tag generator
    function css($css_fn, $media = null) 
    {
        if($media == null) 
        {
            $media = '';
        } 
        else 
        {
            $media = 'media ='.$media;
        }

        if(strpos(str_replace(' ','',rtrim($css_fn,',')), ',') !== false)
        {
            $css_fn = trim(preg_replace('/\s\s+/', ' ', $css_fn));
            $css_fn = str_replace(', ', ',', $css_fn);
            $css_fn = explode(',', $css_fn);
            for($i = 0; $i < count($css_fn); $i++)
            {
                echo '<link rel="stylesheet" href="'.STYLE_PATH.$css_fn[$i].'.css" '.$media.'>';
            }
        }
        else
        {
            echo '<link rel="stylesheet" href="'.STYLE_PATH.$css_fn.'.css" '.$media.'>';
        }
    }

    # js tag generator
    function web_css($css_fn, $media = null) 
    {
        if($media == null) 
        {
            $media = '';
        } 
        else 
        {
            $media = 'media ='.$media;
        }
        
        if(strpos(str_replace(' ','',rtrim($css_fn,',')), ',') !== false)
        {
            $css_fn = trim(preg_replace('/\s\s+/', ' ', $css_fn));
            $css_fn = str_replace(', ', ',', $css_fn);
            $css_fn = explode(',', $css_fn);
            for($i = 0; $i < count($css_fn); $i++)
            {
                echo '<link rel="stylesheet" href="'.$css_fn[$i].'.css" '.$media.'>';
            }
        }
        else
        {
            echo '<link rel="stylesheet" href="'.$css_fn.'.css" '.$media.'>';
        }
    }

    # js tag generator
    function js($js_fn) 
    {
        if(strpos(str_replace(' ','',rtrim($js_fn,',')), ',') !== false)
        {
            $js_fn = trim(preg_replace('/\s\s+/', ' ', $js_fn));
            $js_fn = str_replace(', ', ',', $js_fn);
            $js_fn = explode(',', $js_fn);
            for($i = 0; $i < count($js_fn); $i++)
            {
                echo '<script src="'.JS_PATH.$js_fn[$i].'.js"></script>';
            }
        }
        else
        {
            echo '<script src="'.JS_PATH.$js_fn.'.js"></script>';
        }
    }

    # js tag generator
    function web_js($js_fn) 
    {
        if(strpos(str_replace(' ','',rtrim($js_fn,',')), ',') !== false)
        {
            $js_fn = trim(preg_replace('/\s\s+/', ' ', $js_fn));
            $js_fn = str_replace(', ', ',', $js_fn);
            $js_fn = explode(',', $js_fn);
            for($i = 0; $i < count($js_fn); $i++)
            {
                echo '<script src="'.$js_fn[$i].'.js"></script>';
            }
        }
        else
        {
            echo '<script src="'.$js_fn.'.js"></script>';
        }
    }

    # js tag generator
    function system_js($js_fn) 
    {
        # load directory configuration
        REQUIRE SYSTEM_CONFIG_PATH.'directory_configuration.php';
        
        if($directory['system'] == 'S_D')
        {
            echo '<script src="'.BASE_URL.'system/service/javascript/'.$js_fn.'.js"></script>';
        }
        else
        {
            echo '<script src="'.BASE_URL.$directory['system'].'/service/javascript/'.$js_fn.'.js"></script>';
        }
    }

    function system_css($css_fn, $media = '')
    {
        $media = ($media === null) ? '' : 'media ='.$media;
        
        if(strpos(str_replace(' ','',rtrim($css_fn,',')), ',') !== false)
        {
            $css_fn = trim(preg_replace('/\s\s+/', ' ', $css_fn));
            $css_fn = str_replace(', ', ',', $css_fn);
            $css_fn = explode(',', $css_fn);
            for($i = 0; $i < count($css_fn); $i++)
            {
                echo '<link rel="stylesheet" href="'.BASE_URL.'system_config/ML_Assets/css/'.$css_fn[$i].'.css">';
            }
        }
        else
        {
            echo '<link rel="stylesheet" href="'.BASE_URL.'system_config/ML_Assets/css/'.$css_fn.'.css">';
        }
    }

    function bootstrap_icon()
    {
        echo '<link rel="stylesheet" href="'.BASE_URL.'system_config/bs/bs-font.css">';
    }

    # responsive meta tag generator
    function responsive_meta() 
    {
        echo '<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">';
    }

    # title tag generator
    function title($title) 
    {
        echo '<title>'.$title.'</title>';
    }

    # title tag generator
    function base_url() 
    {
        echo '<base href="'.BASE_URL.'">';
    }

    # bar icon tag generator
    function bar_icon($bi_fn = null) 
    {
        if($bi_fn == '' || $bi_fn == null) 
        {        
            # load route configuration
            REQUIRE CONFIGURATION_PATH.'routes.php';

            if($route['404_image'] == 'N_F') 
            {
                echo '<link rel="icon" href="'.BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png" type="image/png">';
            } 
            else 
            {
                echo '<link rel="icon" href="'.IMAGES_PATH.$route['404_image'].'" type="image/png">';
            }            
        } 
        else 
        {
            echo '<link rel="icon" href="'.$bi_fn.'" type="image/png">';
        }
    }

    function ajax()
    {
        tag('input', 'type::hidden id::path_getter value::'.BASE_URL.'');
        tag('input', 'type::hidden id::ip_getter value::'.IMAGES_PATH.'');
        
        system_js('jquery.min');
        system_js('javascript');
        system_js('ajax_request');
        system_js('ajax_caller');
        system_js('ajax_object');
        
        load_js();
    }

    function ml_js()
    {
        tag('input', 'type::hidden id::path_getter value::'.BASE_URL.'');
        tag('input', 'type::hidden id::ip_getter value::'.IMAGES_PATH.'');
        
        system_js('jquery.min');
        system_js('javascript');
        system_js('ajax_request');
        system_js('ajax_caller');
        system_js('ajax_object');
    }

    function ml_alert()
    {
        REQUIRE SYSTEM_CONFIG_PATH.'ml_config/ml_alert.php';
    }

    function load_js()
    {
        if($GLOBALS['autoLoad_js_files'] != 'AL_JSF') 
        {
            $js         = str_replace(' ', '', $GLOBALS['autoLoad_js_files']);
            $js         = str_replace("\n", '', $js);
            $js         = explode(',', $js);
            $count_js   = count($js);
            for($i = 0; $i < $count_js; $i++) 
            {
                if (file_exists(MADELINE  .'public/js/'.$js[$i].'.js')) 
                {
                    js($js[$i]);
                }
            }
        }
    }

    function load_css()
    {
        if($GLOBALS['autoLoad_css_files'] != 'AL_CSSF') 
        {
            $css         = str_replace(' ', '', $GLOBALS['autoLoad_css_files']);
            $css         = str_replace("\n", '', $css);
            $css         = explode(',', $css);
            $count_css   = count($css);
            for($i = 0; $i < $count_css; $i++) 
            {
                if (file_exists(MADELINE  .'public/style/'.$css[$i].'.css')) 
                {
                    css($css[$i]);
                }
            }
        }
    }

    # break tag generator
    function bl($number = null, $echo = 1) 
    {
        if($echo === 1)
        {
            echo validate_bl($number);
        }
        else
        {
            return validate_bl($number);
        }
    }

    # break tag generator
    function ul() 
    {
        echo '<hr>';
    }

    # open tag generator
    function to($tag=null, $attribute=null, $data = '', $show = 1) 
    {
        if($show === 1)
        {
            echo '<'.validate_tag($tag).validate_attributes($attribute).validate_ft($tag).'>'.$data;
        }
        else if($show === 0)
        {
            return '<'.validate_tag($tag).validate_attributes($attribute).validate_ft($tag).'>'.$data;
        }
    }

    # close tag generator
    function tc($tag=null, $show = 1) 
    {
        if($show === 1)
        {
            echo '</'.validate_tag($tag).'>';
        }
        else if($show === 0)
        {
            return '</'.validate_tag($tag).'>';
        }
    }

    # single tag generator
    function tag($tag=null,$attribute=null) 
    {
        echo '<'.validate_tag($tag).validate_attributes($attribute).'>';
    }

    # multiple tag generator
    function make($tag = null, $data = null, $attribute = null, $echo = 1) 
    {
        if(strpos(validate_tag($tag), ',') !== false) 
        {
            $tag        = explode(',', str_replace('-','_',rtrim(validate_tag($tag), ',')));
            $total_tags = count(validate_tag($tag));
            $open_tag   = '';
            $close_tag  = '';
            for($i = 0; $i < $total_tags; $i++) 
            {
                $open_tag   .= '<'.$tag[$i].'>';
            }

            for($i = $total_tags-1; $i > -1; $i--) 
            {
                $close_tag  .= '</'.$tag[$i].'>';
            }
            
            if($echo == 0)
            {
                return $open_tag.$data.$close_tag;
            }
            else if($echo == 1)
            {
                echo $open_tag.$data.$close_tag;
            }
        } 
        else 
        {
            if($echo == 0)
            {
                return '<'.validate_tag($tag).validate_attributes($attribute).'>'.$data.'</'.validate_tag($tag).'>';
            }
            else if($echo == 1)
            {
                echo '<'.validate_tag($tag).validate_attributes($attribute).'>'.$data.'</'.validate_tag($tag).'>';
            }
        }
    }

    # echo generator
    function show($value=null) 
    {
        echo $value;
    }


    # =================#
    # OTHER ATTRIBUTES #
    # =================#

    # space code generator
    function space($number = null, $show = 1) 
    {
        if($number == '' || $number == null) 
        {
            if($show === 1)
            {
                echo '&nbsp;';
            }
            else
            {
                return '&nbsp;';
            }
        } 
        else 
        {
            $spaces = '';
            for($i = 0; $i < $number; $i++) 
            {
                $spaces .= '&nbsp;';
            }
            
            if($show === 1)
            {
                echo $spaces;
            }
            else
            {
                return $spaces;
            }
        }
    }

    # tab code generator
    function tab($number=null) 
    {
        if($number == '' || $number == null) 
        {
            echo '&emsp;';
        } 
        else 
        {
            $tab = '';
            for($i = 0; $i < $number; $i++) 
            {
                $tab .= '&emsp;';
            }
            echo $tab;
        }
    }

    # bullet code generator
    function bullet($echo = 1) 
    {
        if($echo === 1)
        {
            echo '&bull;';
        }
        else
        {
            return '&bull;';
        }
    }

    # bullet code generator
    function arrow() 
    {
        echo '&raquo;';
    }


    # ====================#
    # ATTRIBUTE VALIDATOR #
    # ====================#

    # validate attributes
    function validate_attributes($attribute) 
    {
        $attribute = trim($attribute,' ');
        if($attribute == null || $attribute == '') 
        {
            return '';
        } 
        else 
        {
            $ori_att    = $attribute;
            $attribute  = explode(' ', $attribute);
            $total_att  = count($attribute);

            $all_attributes = '';

            for($i = 0; $i < $total_att; $i++) 
            {
                if(strpos($attribute[$i], '::') !== false)
                {
                    $att_array    = explode('::', $attribute[$i]);
                    
                    if($att_array[0] == 'submit') 
                    {
                        $all_attributes   .= ':::onsubmit='."\"return $att_array[1]\"";
                    } 
                    else if($att_array[0] == 'class-id') 
                    {
                        $all_attributes   .= ':::class='."\"$att_array[1]\"".' id='."\"$att_array[1]\"";
                    } 
                    else if($att_array[0] == 'click') 
                    {
                        $all_attributes   .= ':::onclick='."\"return $att_array[1]\"";
                    } 
                    else if($att_array[0] == 'ajax' && $att_array[1] == 'true' || $att_array[0] == 'ajax' && $att_array[1] == 'yes' || $att_array[0] == 'ajax' && $att_array[1] == '1') 
                    {
                        $all_attributes   .= ':::onsubmit="return false"';
                    } 
                    else if($att_array[0] == 'ajax' && $att_array[1] == 'false' || $att_array[0] == 'ajax' && $att_array[1] == 'no' || $att_array[0] == 'ajax' && $att_array[1] == '0') 
                    {
                        $all_attributes   .= ':::onsubmit="return true"';
                    } 
                    else if($att_array[0] == 'ac' && $att_array[1] == 'on' || $att_array[0] == 'ac' && $att_array[1] == 'yes' || $att_array[0] == 'ac' && $att_array[1] == '1') 
                    {
                        $all_attributes   .= ':::autocomplete="on"';
                    } 
                    else if($att_array[0] == 'ac' && $att_array[1] == 'off' || $att_array[0] == 'ac' && $att_array[1] == 'no' || $att_array[0] == 'ac' && $att_array[1] == '0') 
                    {
                        $all_attributes   .= ':::autocomplete="off"';
                    }  else 
                    {
                        $all_attributes   .= ':::'.$att_array[0].'='."\"$att_array[1]\"";
                    }
                }
                else
                {
                    $all_attributes   .= ":::$attribute[$i]";
                }
            }
            return str_replace(':::', " ", str_replace('*', " ", $all_attributes));
        }
    }

    # validates tag
    function validate_tag($tag) 
    {
        if($tag == '' || $tag == null) 
        {
            return '';
        } 
        else 
        {
            if($tag == 'fmp') 
            {
                return 'form';
            } 
            else 
            {
                return $tag;
            }
        }
    }

    # validate form type
    function validate_ft($tag) 
    {
        if($tag == '' || $tag == null) 
        {
            return '';
        } 
        else 
        {
            if($tag == 'fmp') {
                return 'enctype="multipart/form-data"';
            } else {
                return '';
            }
        }
    }

    # validates break line
    function validate_bl($number) 
    {
        if($number == '' || $number == null) 
        {
            return '<br>';
        } 
        else 
        {
            $bl = '';
            for($i = 0; $i < $number; $i++) 
            {
                $bl .= '<br>';
            }
            return $bl;
        }
    }
?>