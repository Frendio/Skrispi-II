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
 * Aajax request class
 *
 * @package		Madeline
 * @subpackage	system_js
 * @category	ML JavaScript functions
 * @author		Stevani Andolo
 */
var ML_Java_Script = function()
{
    this.array_data = {};

    this.head           = '';
    this.body           = '';
    this.type           = '';
    this.confirmation   = null;
    this.timer          = null;
    this.the_css        = null;
    this.tid            = 0;
    this.all_tid        = '';
    
    this.do = function(event_type, element, method, extra1 = null, extra2 = null, extra3 = null)
    {
        var array_data = {};
        $(document).on(event_type,element, function(e)
        {
            e.preventDefault();
            method(this, array_data,extra1,extra2,extra3);
        });
    }
    
    this.selector = function(element)
    {
        return document.querySelector(element);
    }
    
    this.add_class = function(element,class_name)
    {
        if(element.includes(',')) {
            element = this.str_replace(' ', '', element);
            element = element.split(',');
            for(i = 0; i < element.length; i++) {
                $(element[i]).addClass(class_name);
            }
        } else {
            $(element).addClass(class_name);
        }
    }
    
    this.remove_class = function(element,class_name)
    {
        if(element.includes(',')) {
            element = this.str_replace(' ', '', element);
            element = element.split(',');
            for(i = 0; i < element.length; i++) {
                $(element[i]).removeClass(class_name);
            }
        } else {
            $(element).removeClass(class_name);
        }
    }
    
    this.selected = function(element)
    {
        return element.options[element.selectedIndex].value.trim();
    }
    
    this.inner_html = function(element,data=null)
    {
        return this.selector(element).innerHTML = data;
    }
    
    this.set_html = function(element,data)
    {
        $(element).html(data);
    }
    
    this.set_text = function(element,data)
    {
        $(element).text(data);
    }
    
    this.get_html = function(element)
    {
        $(element).html();
    }
    
    this.hide = function(element, type = '')
    {
        if(element.includes(',')) {
            element = element.split(',');
            for(i = 0; i < element.length; i++) {
                $(type+''+element[i]).hide();
            }
        } else {
            $(type+''+element).hide();
        }
    }
    
    this.show = function(element, type = '')
    {
        if(element.includes(',')) {
            element = element.split(',');
            for(i = 0; i < element.length; i++) {
                $(type+''+element[i]).show();
            }
        } else {
            $(type+''+element).show();
        }
    }
    
    this.focus = function(element)
    {
        $(element).focus();
    }
    
    this.css = function(element,style_attribute,value)
    {
        return $(element).css(style_attribute,value); 
    }
    
    this.str_replace = function(delimeter,replacement,string)
    {
        return string.split(delimeter).join(replacement);
    }
    
    this.lower_case = function(string)
    {
        return string.toLowerCase();
    }
    
    this.upper_case = function(string)
    {
        return string.toUpperCase();
    }
    
    this.text = function(element,data)
    {
        return $(element).text(data);
    }
    
    this.basepath = function()
    {
        return this.get_value("#path_getter");
    }
    
    this.imagepath = function()
    {
        return this.get_value("#ip_getter");
    }
    
    this.disable = function(element, data2 = 1)
    {
        if(data2 == 1)
        {
            return this.selector(element).disabled = true;
        }
        else if(data2 == 0)
        {
            return this.selector(element).disabled = false;
        }
    }
    
    this.set_attr = function(element,attr,val)
    {
        $(element).attr(attr, val);
    }
    
    this.remove_attr = function(element,attr,val)
    {
        this.selector(element).removeAttribute(attr);
    }
    
    this.get_attr = function(element,attr)
    {
        return $(element).attr(attr);
    }
    
    this.set_value = function(element,val)
    {
        $(element).val(val);
    }
    
    this.get_value = function(element)
    {
        return $(element).val();
    }
    
    this.click = function(element)
    {
        return $(element).click();
    }
    
    this.has_class = function(element,class_name)
    {
        return $(element).hasClass(class_name);
    }
    
    this.reload = function(timer=null)
    {
        if(timer == null)
        {
            location.reload();
        }
        else
        {          
            setTimeout(
                function ()
                {
                    location.reload();            
                },
                timer
            );
        }
    }
    
    this.load = function(IC_name)
    {
        if(IC_name.includes(',')) {
            IC_name = IC_name.split(',');
            for(i = 0; i < IC_name.length; i++)
            {
                $(IC_name[i]).load(location.href+" "+IC_name[i]+">*","");
            }
        } else {
            $(IC_name).load(location.href+" "+IC_name+">*","");
        }
    }
    
    this.count = function(array)
    {
        return array.length;
    }
    
    this.redirect = function(location = '')
    {
        window.location = this.basepath()+location;   
    }
    
    this.add_attr = function(element, attribute_name, attribute_value)
    {
        return $(element).attr(attribute_name,attribute_value);  
    }
    
    this.name = function(element_name)
    {
        return document.getElementsByName(element_name);
    }
    
    this.id = function(element_name)
    {
        return document.getElementById(element_name);
    }
    
    this.class = function(class_name)
    {
        return document.getElementsByClassName(class_name);
    }
    
    this.alert = function(confirmation)
    {
        this.show('.alert-box, .alert-box-overlay');
        this.set_html('#alert-box',confirmation);
    }
    
    this.clear_error = function(type = '')
    {
        if(type !== '') {
            if(type === 'error_message') {
                this.set_html('.ml_input_eh', '');
            } else {
                if($(type).val() !== '') {
                    this.remove_class(type,'ml_input_wb');
                }
            }
        } else {
            this.remove_class('.ml_input_eh','ml_input_wb');
        }
    }

    this.valid = function ()
    {
        this.remove_class('.uk-border-danger', 'uk-border-danger');
    }
    
    this.input_handler = function(response = null, type = null)
    {
        if(response != '')
        {
            if(response.includes(','))
            {
                response    = response.split(',');
                var i;
                for(i = 0; i < response.length; i++)
                {
                    if(response[i].includes('::'))
                    {
                        ph_id = response[i].split('::')[0];
                        required_mes = response[i].split('::')[1];
                    }
                    else
                    {
                        ph_id = response[i];
                        required_mes = 'This is required';
                    }

                    if(type == 'error_message')
                    {
                        this.set_html('#'+ph_id, required_mes);
                    }
                    else
                    {
                        this.add_class('#'+ph_id,'ml_input_wb');
                        // this.id(ph_id).placeholder = required_mes;
                    }
                }

                if(response[0].includes('::'))
                {
                    top_id = response[0].split('::')[0];
                }
                else
                {
                    top_id = response[0];
                }
            
            }
            else
            {
                if(response.includes('::'))
                {
                    ph_id = response.split('::')[0];
                    required_mes = response.split('::')[1];
                    top_id = ph_id;
                }
                else
                {
                    ph_id = response;
                    top_id = ph_id;
                    required_mes = 'This is required';
                }

                if(type == 'error_message')
                {
                    this.set_html('#'+ph_id, required_mes);
                }
                else
                {
                    this.add_class('#'+ph_id,'ml_input_wb');
                    this.id(ph_id).placeholder = required_mes;
                }
            }
            // if(type != 'error_message')
            // {
            //     $('.body-holder,html').animate({scrollTop: this.id(top_id).offsetTop - 50}, 0);
            //     this.focus('#'+top_id);
            // }
        }
    }
    
    this.auto_notifier = function(response = null)
    {
        if(response == 'reload')
        {
            this.reload();
        }
        else
        {
            this.toastr('fail', 'Oops!', response);
        }
    }

    this.system_status = function(response)
    {
        if(response.trim() == 'development')
        {
            this.show('.alert-box, .alert-box-overlay');
            this.set_html('#alert-box',this.body);
        }
        else
        {
            var indicator   = this.alert_icon(this.type);
            var content = `
                <div class="ml-toastr-content ml-${this.type}" id="ml-toastr_${this.tid}">
                    <span class="glyphicon ${indicator} ml-toastr-ind"></span>
                    <div class="ml-toastr-rc">
                        <div class="ml-toastr-head">${this.head}</div>
                        <div class="ml-toastr-body">${this.body}</div>
                    </div>
                </div>
            `;
            
            this.loop_toastr(this.timer);
            this.id('ml-toastr').innerHTML += content;
        }
    };

    this.toastr = function (type, head, body, timer = 3000)
    {
        this.tid++;
        this.all_tid    += this.tid+',';
        this.type       = type;
        this.head       = head;
        this.body       = body;
        this.timer      = timer;
        ajax_call.system_status();
    }

    this.loop_toastr = function(timer)
    {
        var tot_tid = this.all_tid.split(',');
        if(tot_tid.length > 1)
        {
            setTimeout(function ()
            {
                for(i = 0; i < tot_tid.length; i++)
                {
                    if(tot_tid[i] !== '')
                    {
                        $('#ml-toastr_'+tot_tid[i]).fadeOut();
                    }
                }
            }, timer);
        }
    }

    this.alert_icon = function (type)
    {
        if(type === 'success')
        {
            return 'glyphicon-ok';
        }
        else if(type === 'warning')
        {
            return 'glyphicon-alert';
        }
        else
        {
            return 'glyphicon-exclamation-sign';
        }
    }
};

$(function()
{
    $(document).on('click','.close-alert', function()
    {
        ML.hide('.alert-box, .alert-box-overlay');
    });

    $(document).on('keydown', function(e)
    {
        if (e.keyCode == 27)
        {
            ML.hide('.alert-box, .alert-box-overlay').hide();
        }
    });

    $(document).on('click','.ml-toastr-content', function(){
        var id_name = $(this).attr("id");
        var id      = id_name.split('_')[1];
        ML.all_tid  = ML.str_replace(id+',','',ML.all_tid);
        $('#'+id_name).fadeOut();
    });
});

(function ($)
{
    $(document).ready(function()
    {
        ml_idle_timer   = null;
        ml_idle_state   = false;        
        ml_idle_wait    = 3000;
        
        $('*').bind('mousemove keydown scroll', function()
        {
            clearTimeout(ml_idle_timer);
            if (ml_idle_state == true)
            {
                ML.remove_class('.ml-rs-conf', 'ml-rsc-to-right')
            }
            
            ml_idle_state = false;
            ml_idle_timer = setTimeout(function ()
            {
                ML.add_class('.ml-rs-conf', 'ml-rsc-to-right')
                ml_idle_state = true;
            }, ml_idle_wait);
        });
        $('body').trigger('mousemove');
    });
}) (jQuery);