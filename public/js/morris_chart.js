function moris_line(id, series, label1 = 'Series A', label2 = 'Series B')
{
    new Morris.Line({
        element: id,
        data: series,
        xkey: "y",
        ykeys: ["a","b"],
        labels: [label1,label2]
    });    
}

function morris_area(id, series, label1 = 'Series A', label2 = 'Series B')
{
    new Morris.Area({
        element: id,
        data: series,
        xkey: "y",
        ykeys: ["a","b"],
        labels: [label1,label2]
    });
}

function morris_bar()
{
    new Morris.Bar({
        element: "m_morris_3",
        data: [
            {y: "2006", a: 100, b: 90},
            {y:"2007",a:75,b:65},
            {y:"2008",a:50,b:40},
            {y:"2009",a:75,b:65},
            {y:"2010",a:50,b:40},
            {y:"2011",a:75,b:65},
            {y:"2012",a:100,b:90}
        ],
        xkey: "y",
        ykeys: ["a","b"],
        labels: ["Series A","Series B"]
    });
}

function morris_pie()
{    
    new Morris.Donut({
        element: "tax_kbp",
        data: [
            {label: "Download Sales", value: 12},
            {label:"In-Store Sales",value:30},
            {label:"Mail-Order Sales",value:20}
        ]
    });
}