function tambah_data(el, a_d, r, d1)
{
    var c   = ajax.controller(r);       
    var ad  = ajax.ajax_data(c);    
    
    a_d['element']  = el;
    a_d['data']     = ad;
    ajax.request(a_d,'data_return', d1);
}