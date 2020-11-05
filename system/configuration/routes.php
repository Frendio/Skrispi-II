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
     * SET YOUR DEFAULT CONTROLLER
     * default      : welcome (MadeLine controller)
     */

    $route['default_controller']    = 'welcome';


    /*
     * SET YOUR DEFAULT METHOD
     * default      : index
     */

    $route['default_method']        = 'index';


    /*
     * SET YOUR AJAX DEFAULT METHOD
     * default      : index
     */

    $route['ajax_default_method']   = 'index';


    /*
     * SET YOUR SYSTEM STATUS
     *
     * development  : for development
     * live         : for live
     * default      : development
     */

    $route['status']                = 'live';


    /*
     * SET YOUR RIGHT CONFIGURATION MENU STATUS
     *
     * hide         : hide right configuration menu
     * show         : show right configuration menu
     * default      : show
     */

    $route['right_configuration']   = 'hide';


    /*
     * SET YOUR ERROR 404 & 403 BAR & HEADING LOGO
     *
     * default      : N_F (MadeLine logo)
     */

    $route['404_image']             = 'logo/logo.png';


    /*
     * SET YOUR ERROR 404 CUSTOM PAGE
     *
     * default      : NF_CP (MadeLine 404)
     */

    $route['404_custom_page']       = 'NF_CP';


    /*
     * SET YOUR ERROR 403 CUSTOM PAGE
     *
     * default      : FA_CP (MadeLine 403)
     */

    $route['403_custom_page']       = 'FA_CP';


    /*
     * SET YOUR JS FILES TO BE AUTO LOADED
     *
     * Separate them with coma (,)
     * default      : AL_JSF
     */    
     
    $GLOBALS['autoLoad_js_files']   = 'caller, request, return';


    /*
     * SET YOUR CSS FILES TO BE AUTO LOADED
     *
     * Separate them with coma (,)
     * default      : AL_CSSF
     */    
     
    $GLOBALS['autoLoad_css_files']  = 'AL_CSSF';


    /*
     * SET YOUR ML_API_ID FOR ANY API REQUEST
     *
     * default      : ML_API_ID
     */    
     
    $GLOBALS['ApiLine_API_Key']     = 'ml_em_api2020';


    /*
     * SET YOUR ML_CONFIGURATION_API_ID FOR ANY API REQUEST
     *
     * default      : ML_CONFIG_API_ID
     */    
     
    $GLOBALS['configuration_API_Key']   = 'ML_CONFIG_API_ID';

?>