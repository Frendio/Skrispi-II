var currentHTML = ML.get_html('#content-holder');

function manual_search(response) {  
    if(response !== 'empty!') {
        ML.set_html('#content-holder', '<img class="search-gif" src="'+ML.basepath()+'system_config/ML_Assets/gif/search5.gif" />');
    }
  
    setTimeout(function() {
        if(response === 'empty!') {
            ML.set_html('#content-holder', currentHTML);
        } else {
            ML.set_html('#content-holder', response);
        }              
    }, 500);
}

function db_conf(response) {
    ML.valid();
    if(response.split('::')[0] == 'error') {    
        var class_name = response.split('::')[1];        
        var top = ML.class(class_name).offsetTop;
        $('.body-holder,html').animate({scrollTop: top - 50}, 0);
        ML.add_class('.'+class_name, 'ML-border-danger');
        ML.focus('.'+class_name);
    } else if(response == 'done') {
        ML.toastr('success', 'Beautiful!', 'Your database is connected!');
    } else {
        ML.toastr('fail', 'Oops!', "DATABASE CONNECTION ERROR! \n Check your \n (Host, User, Password or DBname)");
    }
}

function route_conf(response) {
    ML.valid();
    if(response.split('::')[0] == 'error') {
        var class_name = response.split('::')[1];        
        var top = ML.class(class_name).offsetTop;
        $('.body-holder,html').animate({scrollTop: top - 50}, 0); 
        ML.add_class('.'+class_name, 'ML-border-danger');
        ML.focus('.'+class_name);
    } else if(response == 'done') {
        ML.toastr('success', 'Beautiful!', 'Your route configuration is set!');
    } else {
        ML.toastr('success', 'Beautiful!', response);
    }
}

function dir_conf(response) {
    if(response.split('::')[0] == 'done') {
        ML.toastr('success', 'Beautiful!', 'Successfully reanamed directory "'+response.split('::')[1]+'"');
        ML.reload(1000);
    } else if(response.split('::')[0] == 'nf') {
        ML.toastr('fail', 'Oops!', 'Directory "'+response.split('::')[1]+'" does not exist!');
    } else if(response.split('::')[0] == 'existed') {
        ML.toastr('fail', 'Oops!', 'Directory "'+response.split('::')[1]+'" already exists!');
    } else {
        ML.alert(response);
    }
}

function adb_conf(response) {
    ML.valid();
    if(response.split('::')[0] == 'error') {    
        var class_name = response.split('::')[1];
        var top = ML.class(class_name).offsetTop;
        $('.body-holder,html').animate({scrollTop: top - 50}, 0);
        ML.add_class('.'+class_name, 'ML-border-danger');
        ML.focus('.'+class_name);
        ML.toastr('fail', 'Oops!', 'Please enter database name!');
    } else if(response.split('::')[0] == 'done') {
        ML.load('.ml-table');
        ML.toastr('success', 'Beautiful!', 'Your new database "'+response.split('::')[1]+'" has been created!');
    } else if(response == 'exists') {
        ML.load('.ml-table');
        ML.toastr('fail', 'Oops!', 'Migration file exists!');
    } else {
        ML.load('.ml-table');
        ML.alert(response);
    }
}

function ddb_conf(response) {
    ML.valid();
    if(response.split('::')[0] == 'error') {
        var class_name = response.split('::')[1];        
        var top = ML.class(class_name).offsetTop;
        $('.body-holder,html').animate({scrollTop: top - 50}, 0);
        ML.add_class('.'+class_name, 'ML-border-danger');
        ML.focus('.'+class_name);        
        ML.toastr('fail', 'Oops!', 'You didn\'t choose database!');
    } else if(response.split('::')[0] == 'done') {
        ML.load('.ml-table');
        ML.toastr('success', 'Beautiful!', 'Database "'+response.split('::')[1]+'" is succesfuly droped!');
    } else {
        ML.load('.ml-table');
        ML.alert(response);
    }
}

function import_db(response) {
    ML.valid();
    if(response.split('::')[0] == 'error') {    
        var class_name = response.split('::')[1];
        var top = ML.class(class_name).offsetTop;
        $('.body-holder,html').animate({scrollTop: top - 50}, 0);
        ML.add_class('.'+class_name, 'ML-border-danger');
        ML.focus('.'+class_name);
        ML.toastr('fail', 'Oops!', 'Please add a file before importing a database.');
    } else if(response.split('::')[0] == 'done') {
        ML.load('.ml-table');
        ML.toastr('success', 'Beautiful!', response.split('::')[1]);
    }
    else
    {
        ML.toastr('fail', 'Oops!', response);
    }
}