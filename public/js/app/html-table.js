var DatatableHtmlTableDemo = {
    init: function() {
        var e;
        e = $(".m-datatable").mDatatable({
            data: {
                saveState: {
                    cookie: !1
                }
            },
            search: {
                input: $("#generalSearch")
            },
            columns: [{
                field: "Deposit Paid",
                type: "number"
            }, {
                field: "Order Date",
                type: "date",
                format: "YYYY-MM-DD"
            }, {
                field: "Type",
                title: "Type",
                template: function(e) {
                    var t = {
                        1: {
                            title: "Online",
                            state: "danger"
                        },
                        2: {
                            title: "Retail",
                            state: "primary"
                        },
                        3: {
                            title: "Direct",
                            state: "accent"
                        }
                    };
                    return '<span class="m-badge m-badge--' + t[e.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + t[e.Type].state + '">' + t[e.Type].title + "</span>"
                }
            }]
        }), $("#m_form_type").on("change", function() {
            e.search($(this).val().toLowerCase(), "Type")
        }), $("#m_form_status, #m_form_type").selectpicker()
    }
};
jQuery(document).ready(function() {
    DatatableHtmlTableDemo.init()
});
