<?php

    to('span','class::comment').show('<').tc('span');
    to('span','class::comment').show('!--').tc('span');
    to('span','class::comment').show(' to call session variable, just call the same name as the key name assigned in the $data variable. ').tc('span');
    to('span','class::comment').show('-->').tc('span').bl(2);

    to('span','class::keyword').show("<").tc('span');
    to('span','class::keyword').show("head").tc('span');
    to('span','class::keyword').show(">").tc('span').bl();
        to('span','class::keyword').tab(4).show("<").tc('span');
        to('span','class::keyword').show("title").tc('span');
        to('span','class::keyword').show(">").tc('span');
        to('span').show("My Blog").tc('span');
        to('span','class::keyword').show("<").tc('span');
        to('span','class::keyword').show("/title").tc('span');
        to('span','class::keyword').show(">").tc('span').bl();
    to('span','class::keyword').show("<").tc('span');
    to('span','class::keyword').show("/head").tc('span');
    to('span','class::keyword').show(">").tc('span').bl(2);

    to('span','class::keyword').show("<").tc('span');
    to('span','class::keyword').show("body").tc('span');
    to('span','class::keyword').show(">").tc('span').bl();
        to('span','class::keyword').tab(4).show("<").tc('span');
        to('span','class::keyword').show("h1").tc('span');
        to('span','class::keyword').show(">").tc('span');
            to('span').show("My session : ").tc('span');

            to('span','class::keyword').show("<").tc('span');
            to('span','class::keyword').show("?").tc('span');
            to('span','class::keyword').show("php").tc('span'); 

            to('span','class::function').show(' echo ').tc('span');
            to('span','class::keyword').show('$session').tc('span');
            to('span').show('->').tc('span');
            to('span','class::variable').show('get').tc('span');
            to('span').show('(').tc('span');
            to('span','class::function').show('session_name').tc('span');
            to('span').show('); ').tc('span');

            to('span','class::keyword').show("?".">").tc('span');
        to('span','class::keyword').show("<").tc('span');
        to('span','class::keyword').show("/h1").tc('span');
        to('span','class::keyword').show(">").tc('span').bl();
    to('span','class::keyword').show("<").tc('span');
    to('span','class::keyword').show("/body").tc('span');
    to('span','class::keyword').show(">").tc('span');

?>