function tambah_data(el, a_d, r, d1, d2, d3)
{
    var c   = ajax.controller(r);       
    var ad  = ajax.ajax_data(c);    
    
    a_d['element']  = el;
    a_d['data']     = ad;
    ajax.request(a_d,'UT_data_return', d1, d2, d3);
}

function pilih_TS()
{
    var ts = $('#pjsm').find(":selected").val();
    ML.css('.dis_no', 'display', 'none');
    ML.show(ts);
}