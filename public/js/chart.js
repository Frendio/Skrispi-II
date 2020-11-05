function pie_chart(series,color,id,el)
{
    $(id).length && Morris.Donut({
        element : el,
        data    : series,
        colors  : color
    });
}

function double_bar_chart(series, value1, value2, color1, color2, id)
{
    var e = $(id);
    if(0 != e.length) {
        var t = {
            labels: series,
            datasets: [{
                backgroundColor: color1,
                data: value1
            }, {
                backgroundColor: color2,
                data: value2
            }]
        };

        new Chart(e, {
            type: "bar",
            data: t,
            options: {
                title: {display:!1},
                tooltips: {
                    intersect:!1,
                    mode:"nearest",
                    xPadding:10,
                    yPadding:10,
                    caretPadding:10
                },
                legend: {display:!1},
                responsive: !0,
                maintainAspectRatio: !1,
                barRadius: 4,
                scales: {
                    xAxes: [{display:!1, gridLines:!1, stacked:!0}],
                    yAxes: [{display:!1, stacked:!0, gridLines:!1}]
                },
                layout: {
                    padding: {left:0,right:0,top:0,bottom:0}
                }
            }
        })
    }
}

function single_bar_chart(series, value, color, id)
{
    var e = $(id);
    if (0 != e.length) {
        var t = {
            labels: series,
            datasets: [{
                backgroundColor: color,
                data: value
            }]
        };

        new Chart(e, {
            type: "bar",
            data: t,
            options: {
                title: {display:!1},
                tooltips: {
                    intersect:!1,
                    mode:"nearest",
                    xPadding:10,
                    yPadding:10,
                    caretPadding:10
                },
                legend: {display:!1},
                responsive: !0,
                maintainAspectRatio: !1,
                barRadius: 4,
                scales: {
                    xAxes: [{display:!1, gridLines:!1, stacked:!0}],
                    yAxes: [{display:!1, stacked:!0, gridLines:!1}]
                },
                layout: {
                    padding: {left:0,right:0,top:0,bottom:0}
                }
            }
        })
    }
}

function line_chart()
{
    if(0 != $("#m_chart_sales_stats").length) {
        var e = {
            type: "line",
            data: {
                labels: ["January","February","March","April","May","June","July","August","September","October","November","December","January","February","March","April"],
                datasets: [{
                    label: "Sales Stats",
                    borderColor: mApp.getColor("brand"),
                    borderWidth: 2,
                    pointBackgroundColor: mApp.getColor("brand"),
                    backgroundColor: mApp.getColor("accent"),
                    pointHoverBackgroundColor: mApp.getColor("danger"),
                    pointHoverBorderColor: Chart.helpers.color(mApp.getColor("danger")).alpha(.2).rgbString(),
                    data: [10,20,16,18,12,40,35,30,33,34,45,40,60,55,70,65,75,62]
                }]
            },
            options: {
                title: {display:!1},
                tooltips: {
                    intersect: !1,
                    mode: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                legend: {
                    display: !1,
                    labels: {usePointStyle:!1}
                },
                responsive: !0,
                maintainAspectRatio: !1,
                hover: {mode:"index"},
                scales: {
                    xAxes: [{
                        display: !1,
                        gridLines: !1,
                        scaleLabel: {display:!0, labelString:"Month"}
                    }],
                    yAxes:[{
                        display: !1,
                        gridLines: !1,
                        scaleLabel: {display:!0, labelString:"Value"}
                    }]
                },
                elements: {
                    point: {radius: 3, borderWidth: 0, hoverRadius: 8, hoverBorderWidth: 2}
                }
            }
        };
        
        new Chart($("#m_chart_sales_stats"), e)
    }
}

function double_line(series, value1, value2, label1, label2, id)
{
    if(0 != $(id).length) {
        var e = document.getElementById("bm_chart").getContext("2d"),
            t = e.createLinearGradient(0,0,0,240);

        t.addColorStop(0, Chart.helpers.color("#ffefce").alpha(1).rgbString()),
        t.addColorStop(1,Chart.helpers.color("#ffefce").alpha(.3).rgbString());
        
        var a = {
            type: "line",
            data: {
                labels: series,
                datasets: [
                    {
                        label: label1,
                        backgroundColor: mApp.getColor("brand"),
                        borderColor: mApp.getColor("brand"),
                        pointBackgroundColor: Chart.helpers.color("#000000").alpha(0).rgbString(),
                        pointBorderColor: Chart.helpers.color("#000000").alpha(0).rgbString(),
                        pointHoverBackgroundColor: mApp.getColor("danger"),
                        pointHoverBorderColor: Chart.helpers.color("#000000").alpha(.1).rgbString(),
                        data: value1
                    },
                    {
                        label: label2,
                        backgroundColor: mApp.getColor("accent"),
                        borderColor: mApp.getColor("accent"),
                        pointBackgroundColor: Chart.helpers.color("#000000").alpha(0).rgbString(),
                        pointBorderColor: Chart.helpers.color("#000000").alpha(0).rgbString(),
                        pointHoverBackgroundColor: mApp.getColor("danger"),
                        pointHoverBorderColor: Chart.helpers.color("#000000").alpha(.1).rgbString(),
                        data: value2
                    }
                ]
            },
            options: {
                title: {display:!1},
                tooltips: {mode:"nearest", intersect:!1, position:"nearest", xPadding:10, yPadding:10, caretPadding:10},
                legend: {display:!1},
                responsive: !0,
                maintainAspectRatio: !1,
                scales: {
                    xAxes: [{
                        display: !1,
                        gridLines: !1,
                        scaleLabel: {display:!0,labelString:"Month"}
                    }],
                    yAxes:[{
                        stacked: !0,
                        display: !1,
                        gridLines: !1,
                        scaleLabel: {display:!0,labelString:"Value"},
                        ticks: {beginAtZero:!0}
                    }]
                },
                elements: {
                    line: {tension:1e-7},
                    point: {radius:4,borderWidth:12}
                },
                layout: {
                    padding: {left:0, right:0, top:10, bottom:0}
                }
            }
        };
        
        new Chart(e,a)
    }
}