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

    defined('BASE_URL') OR exit(header('location: 303'));

    if ( ! function_exists('set_value'))
    {
        function set_value($field)
        {
            $ML = ML_Controller::get_instance();
            return $ML->input->post($field);
        }
    }

    if ( ! function_exists('set_error'))
    {
        function set_error($input = '', $message = '', $echo = 0)
        {
            $ML = ML_Controller::get_instance();
            $all_required   = $ML->form->empty();
            if(strpos($all_required, ',') !== false) 
            {
                $all_required   = explode(',', $all_required);
                for($i = 0; $i < count($all_required); $i++)
                {
                    if(strpos($all_required[$i], '::') !== false) 
                    {
                        $all_required[$i]   = explode('::', $all_required[$i]);
                        if($input === $all_required[$i][0])
                        {
                            if($all_required[$i][1] === 0 || $all_required[$i][1] === 1)
                            {
                                if(isset($all_required[$i][2]) && $all_required[$i][2] !== '' && $all_required[$i][1] === 1)
                                {
                                    if($echo === 0)
                                        return $all_required[$i][2];
                                    else
                                        echo $all_required[$i][2];
                                }
                            }
                            else
                            {
                                if($all_required[$i][1] !== '')
                                {
                                    if($echo === 0)
                                        return $all_required[$i][1];
                                    else
                                        echo $all_required[$i][1];
                                }
                                else
                                {
                                    if($message == '')
                                        if($echo === 0)
                                            return 'This field is required';
                                        else
                                            echo 'This field is requred';
                                    else
                                        if($echo === 0)
                                            return $message; 
                                        else
                                            echo $message; 
                                    break;
                                }
                            }
                            break;
                        }
                    }
                    else
                    {
                        if($input === $all_required[$i])
                        {
                            if($message == '')
                                if($echo === 0)
                                    return 'This field is required';
                                else
                                    echo 'This field is requred';
                            else
                                if($echo === 0)
                                    return $message; 
                                else
                                    echo $message; 
                            break;
                        }
                    }
                }
            }
            else
            {
                if(strpos($all_required, '::') !== false) 
                {
                    $all_required   = explode('::', $all_required);
                    if($input === $all_required[0])
                    {
                        if($all_required[1] === 0 || $all_required[1] === 1)
                        {
                            if(isset($all_required[2]) && $all_required[2] !== '' && $all_required[1] === 1)
                            {
                                if($echo === 0)
                                    return $all_required[2];
                                else
                                    echo $all_required[2];
                            }
                        }
                        else
                        {
                            if($all_required[1] !== '')
                            {
                                if($echo === 0)
                                    return $all_required[1];
                                else
                                    echo $all_required[1];
                            }
                            else
                            {
                                if($message == '')
                                    if($echo === 0)
                                        return 'This field is required';
                                    else
                                        echo 'This field is requred';
                                else
                                    if($echo === 0)
                                        return $message; 
                                    else
                                        echo $message;
                            }
                        }
                    }
                }
                else
                {
                    if($input === $all_required)
                    {
                        if($message == '')
                            if($echo === 0)
                                return 'This field is required';
                            else
                                echo 'This field is requred';
                        else
                            if($echo === 0)
                                return $message; 
                            else
                                echo $message;
                    }
                }
            }
        }
    }

    if ( ! function_exists('validation_error'))
    {
        function validation_error()
        {
            $ML = ML_Controller::get_instance();
            if($ML->form->empty() != '')
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