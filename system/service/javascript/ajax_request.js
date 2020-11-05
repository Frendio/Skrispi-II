/*
 * Madeline Framework
 *
 * A custom built application development framework for PHP
 *
 * Permission is hereby granted to anyone who is
 * AN ACTIVE STUDENT AT UNIVERSITAS KLABAT
 * to use this application
 *
 * THE SOFTWARE IS PROVIDED "AS IS" TO HELP STUDENTS UNDERSTAND
 * AND BUILD A SIMPLE WEBSITE WITH THE CONCEPT OF MVC (MODEL, VIEW, CONTROLLER)
 *
 * @package	Madeline
 * @author	Stevani Andolo
 * @version V1
*/


/**
 * Ajax request class
 *
 * @package		Madeline
 * @subpackage	system_js
 * @category	ML Ajax request
 * @author		Stevani Andolo
 */
var ML_Ajax_Request = function()
{
    /*
     * Rquest as form
     *
     * @param	element	element
     * @param	string	data
     * @param	string	action
     * @param	string	extra
     * @returns ajax.responseText
     */
    
    this.request = function(array_data, action = null, extra1 = null, extra2 = null, extra3 = null)
    {
        var ajax    = this.ajax_object("POST", this.ajax_url()+"ajax/ajax-c"+this.data_validation(array_data['data'])+'&ML_Ajax_Request');
        ajax.onreadystatechange = function()
        {
            if(ajax.readyState == 4 && ajax.status == 200)
            {
                var response   = ajax.responseText.trim();                
                if(action != null)
                {
                    window[action](response,extra1,extra2,extra3);
                }
                else
                {
                    ML.system_status(response);
                }
            }
        }
        ajax.send(this.check_element(array_data['element'],array_data['data']));
    }

    this.check_element = function(element,data)
    {
        if(element === 'undefined')
        {
            return data;
        }
        else
        {
            return new FormData(element);
        }
    }

    this.extra_validation = function(extra)
    {
        if(extra === 'undefined')
        {
            return '';
        }
        else
        {
            return extra;
        }
    }

    this.data_validation = function(data)
    {
        if(data === 'undefined')
        {
            return '';
        }
        else
        {
            return '?'+data;
        }
    }

    this.data = function(data)
    {
        if(data == null || data == '')
        {
            return '';
        }
        else
        {
            return 'data='+data;
        }
    }

    this.ajax_data = function(controller, method = '', data = '')
    {
        return data+"&"+controller+"&"+method;
    }

    this.controller = function(controller)
    {
        if(controller == null || controller == '')
        {
            return '';
        }
        else
        {
            return 'controller='+controller;
        }
    }

    this.method = function(method)
    {
        if(method == null || method == '')
        {
            return '';
        }
        else
        {
            return 'method='+method;
        }
    }

    this.ajax_url = function()
    {
        return ML.get_value('#path_getter');
    }

    this.image_url = function()
    {
        return ML.get_value('#ip_getter');
    }

    this.ajax_object = function(meth, url)
    {
        var x = new XMLHttpRequest();
        x.open(meth, url, true );
        return x;
    }
};
