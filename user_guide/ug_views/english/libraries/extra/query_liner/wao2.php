<?php

    to('span','class::comment').show('/* WHERE, AND, OR column_name = "column_value" */').tc('span').bl();
    to('span','class::keyword').show('$this').tc('span');
    to('span').show('->').tc('span');
    to('span','class::variable').show('condition').tc('span');
    to('span').show('(').tc('span');
    to('span','class::string').show("'column_name'").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'column_value'").tc('span');
    to('span').show(');').tc('span').bl(2);

    to('span','class::comment').show('/* WHERE, AND, OR column_name = column_value */').tc('span').bl();
    to('span','class::keyword').show('$this').tc('span');
    to('span').show('->').tc('span');
    to('span','class::variable').show('condition').tc('span');
    to('span').show('(').tc('span');
    to('span','class::string').show("'column_name'").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'column_value'").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'at'").tc('span');
    to('span').show(');').tc('span').bl(2);

    to('span','class::comment').show('/* WHERE, AND, OR column_name != "column_value" */').tc('span').bl();
    to('span','class::keyword').show('$this').tc('span');
    to('span').show('->').tc('span');
    to('span','class::variable').show('condition').tc('span');
    to('span').show('(').tc('span');
    to('span','class::string').show("'column_name'").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'column_value'").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'!='").tc('span');
    to('span').show(');').tc('span').bl(2);

    to('span','class::comment').show('/* WHERE, AND, OR column_name != "column_value" */').tc('span').bl();
    to('span','class::keyword').show('$this').tc('span');
    to('span').show('->').tc('span');
    to('span','class::variable').show('condition').tc('span');
    to('span').show('(').tc('span');
    to('span','class::string').show("'column_name !='").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'column_value'").tc('span');
    to('span').show(');').tc('span').bl(2);

    to('span','class::comment').show('/* WHERE, AND, OR column_name != column_value */').tc('span').bl();
    to('span','class::keyword').show('$this').tc('span');
    to('span').show('->').tc('span');
    to('span','class::variable').show('condition').tc('span');
    to('span').show('(').tc('span');
    to('span','class::string').show("'column_name !='").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'column_value'").tc('span');
    to('span').show(", ").tc('span');
    to('span','class::string').show("'at'").tc('span');
    to('span').show(');').tc('span');

?>