function UT_data_return (r, d1, d2, d3) {
    alert(r)
    ML.clear_error('error_message');
    if(r.includes('|')) {
        if(r.split('|')[0] == '0')
        {
            show_toastr('Masih ada field yang harus diisi!', 'error', 'Opps!');
            ML.input_handler(r.split('|')[1], 'error_message');
        }
        else if(r.split('|')[0] == '1')
        {
            show_toastr(r.split('|')[1], 'success', 'Beautiful!');
            setTimeout(function() {
                ML.redirect(d1);  
            }, 1000);
        }
    } else {
        show_toastr(r, 'error', 'Opps!');
    }
}