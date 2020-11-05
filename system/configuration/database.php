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
    
    /*
     * SET YOUR DATABASE CONFIGURATION
     *
     * For now, Only MySQLi driver
     */

    return
        array (

            /*
            * SET YOUR DATABASE HOST
            * default   : DB_H
            */
            
            'host'         => 'localhost',


            /*
            * SET YOUR DATABASE HOST NAME
            * default   : DB_U
            */
            
            'user'         => 'root',


            /*
            * SET YOUR DATABASE HOST PASSWORD
            * default   : DB_P
            */
            
            'password'     => 'DB_P',


            /*
            * SET YOUR DATABASE NAME
            * default   : DB_N
            */

            'dbname'       => 'DB_N',


            /*
            * SET YOUR MYSQLI_FETCH_TYPE
            *
            * object    : for mysqli_fetch_object
            * array     : for mysqli_fetch_array
            * assoc     : for mysqli_fetch_assoc
            * default   : object
            */

            'fetch_type'   => 'object'
        );
?>