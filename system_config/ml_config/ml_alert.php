<?php
    bootstrap_icon();
    system_css('ml_alert, ml_toastr, ml_template');
    
    to('div','class::alert-box-overlay*close-alert').tc('div');
    to('div','class::alert-box');
        to('div', 'class::mla-heading*rfc');
            bl();
        tc('div');
        to('span','id::alert-box').tc('span');
    tc('div');
    make('div', '', 'class::ml-toastr*ml-toastr-tr id::ml-toastr');
?>