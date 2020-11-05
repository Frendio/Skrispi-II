function bar_chart()
{
    var e = $("#m_chart_daily_sales");
    var s_sktp = series_status_ktp;
    if (0 != e.length) {
        var t = {
            labels: [s_sktp],
            datasets: [{
                backgroundColor: mApp.getColor("success"),
                data: [value_status_ktp]
            }]
        };
        new Chart(e, {
            type: "bar",
            data: t,
            options: {
                title: {
                    display: !1
                },
                tooltips: {
                    intersect: !1,
                    mode: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                legend: {
                    display: !1
                },
                responsive: !0,
                maintainAspectRatio: !1,
                barRadius: 4,
                scales: {
                    xAxes: [{
                        display: !1,
                        gridLines: !1,
                        stacked: !0
                    }],
                    yAxes: [{
                        display: !1,
                        stacked: !0,
                        gridLines: !1
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            }
        })
    }
}

function pie_chart()
{
    $("#m_chart_profit_share").length && new Chartist.Pie("#m_chart_profit_share", {
        series: [{
            value: 32,
            className: "custom",
            meta: {
                color: mApp.getColor("brand")
            }
        }, 
        {
            value: 32,
            className: "custom",
            meta: {
                color: mApp.getColor("accent")
            }
        }, 
        {
            value: 36,
            className: "custom",
            meta: {
                color: mApp.getColor("warning")
            }
        }, 
        {
            value: 36,
            className: "custom",
            meta: {
                color: mApp.getColor("info")
            }
        }],
        labels: [1, 2, 3]
    }, {
        donut: !0,
        donutWidth: 17,
        showLabel: !1
    }).on("draw", function(e) {
        if ("slice" === e.type) {
            var t = e.element._node.getTotalLength();
            e.element.attr({
                "stroke-dasharray": t + "px " + t + "px"
            });
            var a = {
                "stroke-dashoffset": {
                    id: "anim" + e.index,
                    dur: 1e3,
                    from: -t + "px",
                    to: "0px",
                    easing: Chartist.Svg.Easing.easeOutQuint,
                    fill: "freeze",
                    stroke: e.meta.color
                }
            };
            0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                "stroke-dashoffset": -t + "px",
                stroke: e.meta.color
            }), e.element.animate(a, !1)
        }
    })
}


jQuery(document).ready(function() {
    bar_chart();
    pie_chart();
});