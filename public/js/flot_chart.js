function pie_chart_FC(id, series, value)
{
    // Math.floor(10*Math.random())+1
    var t = [],
        e = series.length;
    for(o = 0; o < e; o++)
        t[o] = {
            label: series[o],
            data: value[o]
        };
        
    $.plot($(id), t, {
        series: {
            pie: {show:!0}
        },
        legend:{show:!1}
    })
}