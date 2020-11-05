<?php

    to('span','class::keyword').show("<").tc('span');
    to('span','class::keyword').show("?").tc('span');
    to('span','class::keyword').show("php").tc('span').bl(2);

    to('span','class::function').show("DEFINED").tc('span');
    to('span').show("(").tc('span');
    to('span','class::string').show("'BASE_URL'").tc('span');
    to('span').show(")").tc('span');
    to('span').show(" OR").tc('span');
    to('span','class::function').show(" redirect").tc('span');
    to('span').show("(").tc('span');
    to('span','class::string').show("'403'").tc('span');
    to('span').show(");").tc('span').bl(2);

    to('span','class::keyword').show('class').tc('span');
    to('span','class::class').show(' Blog').tc('span');
    to('span','class::keyword').show(' extends').tc('span');
    to('span','class::class').show(' ML_Controller').tc('span').bl().
    to('span').show('{').tc('span').bl();

    to('span','class::keyword').tab(4).show('public').tc('span');
    to('span','class::keyword').show(' function').tc('span');
    to('span','class::function').show(' index').tc('span'); 
    to('span').show('()').tc('span').bl();
    tab(4).to('span').show('{').tc('span').bl();       

        to('span','class::keyword').tab(8).show('$this').tc('span');
        to('span').show('->').tc('span');
        to('span','class::function').show('library').tc('span');
        to('span').show('(').tc('span');
        to('span','class::string').show("'session'").tc('span');
        to('span').show(');').tc('span').bl(2);

        to('span','class::if').tab(8).show('if').tc('span');
        to('span').show(' (').tc('span');
        to('span','class::keyword').show('$this').tc('span');
        to('span').show('->').tc('span');
        to('span','class::variable').show('session').tc('span');
        to('span').show('->').tc('span');
        to('span','class::function').show('exists').tc('span');
        to('span').show('(').tc('span');
        to('span','class::string').show("'session_name'").tc('span');
        to('span').show('))').tc('span').bl();
        tab(8).to('span').show('{').tc('span').bl();
        to('span','class::comment').tab(12).show('/*').tc('span').bl();
        to('span','class::comment').tab(12).show(' * return true').tc('span').bl();
        to('span','class::comment').tab(12).show(' * your codes go here').tc('span').bl();
        to('span','class::comment').tab(12).show(' */').tc('span').bl();

        tab(8).to('span').show('}').tc('span').bl().
        tab(8).to('span','class::else').show('else').tc('span').bl().
        tab(8).to('span').show('{').tc('span').bl();

        to('span','class::comment').tab(12).show('/*').tc('span').bl();
        to('span','class::comment').tab(12).show(' * return false').tc('span').bl();
        to('span','class::comment').tab(12).show(' * your codes go here').tc('span').bl();
        to('span','class::comment').tab(12).show(' */').tc('span').bl();

        to('span').tab(8).show('}').tc('span').bl(2);
    
        to('span','class::comment').tab(8).show('/*').tc('span').bl();
        to('span','class::comment').tab(8).show(' * to use session in your view,').tc('span').bl();
        to('span','class::comment').tab(8).show(' *').tc('span').bl();
        to('span','class::comment').tab(8).show(' * 1, create a new array variable.').tc('span').bl();
        to('span','class::comment').tab(8).show(' */').tc('span').bl();

        to('span','class::variable').tab(8).show('$data').tc('span');
        to('span').show('[').tc('span');
        to('span','class::string').show("'session'").tc('span');
        to('span').show('] = ').tc('span');
        to('span','class::keyword').show('$this').tc('span');
        to('span').show('->').tc('span');
        to('span','class::variable').show('session').tc('span');
        to('span').show(';').tc('span').bl(2);
    
        to('span','class::comment').tab(8).show('/*').tc('span').bl();
        to('span','class::comment').tab(8).show(' * 2, pass its variable to your view as second paramenter in your load method.').tc('span').bl();
        to('span','class::comment').tab(8).show(' */').tc('span').bl();

        to('span','class::keyword').tab(8).show('$this').tc('span');
        to('span').show('->').tc('span');
        to('span','class::variable').show("load").tc('span');
        to('span').show('->').tc('span');
        to('span','class::function').show('view').tc('span');
        to('span').show('(').tc('span');
        to('span','class::string').show("'blog'").tc('span');
        to('span').show(', ').tc('span');
        to('span','class::variable').show('$data').tc('span');
        to('span').show(');').tc('span').bl();

    to('span').tab(4).show('}').tc('span').bl();  
                    
    to('span').show('}').tc('span').bl(2); 

    to('span','class::keyword').show("?".">").tc('span');

?>