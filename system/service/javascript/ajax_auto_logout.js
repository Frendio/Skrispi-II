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


/* ======================================
 * ======================================*/

    
/**
 * Aajax request class
 *
 * @package		Madeline
 * @subpackage	system_js
 * @category	Ajax request
 * @author		Stevani Andolo
 */
    
idletimer   = null;
idlestate   = false;

// YOU CAN IMPLEMENT THIS USING DATABASE,
// PUT YOUR DATA BASE DATA IN A HIDDEN INPUT
// GET THE VALUE AND ASSIGN THE VALUE TO THE FOLLOWING VARIABLE
idlewait    = 60000;

(function ($) {
    $(document).ready(function() {
        $('*').bind('mousemove keydown scroll', function() {
            clearTimeout(idletimer);
            if (idlestate == true) {
                alert('active');
            }
            
            idlestate = false;
            idletimer = setTimeout(function () {
                // YOU CAN CALL YOUR CALL.FUNCTION AND USE AJAX FOR THIS
                // TO DESTROY SESSION
                // YOUR CODES...
                alert('not active for : '+idlewait/1000+' minute');
                idlestate = true;
            }, idlewait);
        });
        $('body').trigger('mousemove');
    });
}) (jQuery);