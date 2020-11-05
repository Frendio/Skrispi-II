function show_toastr(message,status,title=null)
{
    var a = status,
        i = message,
        s = title || "";        
    
    var k = toastr[a](i, s);
        t = k;
}