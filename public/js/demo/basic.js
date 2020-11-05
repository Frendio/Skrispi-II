var DatatablesBasicBasic={
    init:function(){
        var e;
        (e=$("#m_table_1")).DataTable({
            responsive:!0,
            // dom:"<'row'<'col-sm-12'tr>>\n\t\t\t<'row print'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            lengthMenu:[5,10,25,50,100],
            pageLength:25,
            language:{lengthMenu:"Display _MENU_"},
            order:[[0,"asc"]],
            headerCallback:function(e,a,t,n,s){},
            columnDefs:[{targets:0, width:"30px", className:"dt-left", orderable:!1}]
        }),
        (e=$("#bottom")).DataTable({
            responsive:!0,
            dom:"<'row'<'col-sm-12'tr>>\n\t\t\t<'row print'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            lengthMenu:[5,10,25,50,100],
            pageLength:10,
            language:{lengthMenu:"Display _MENU_"},
            order:[[1,"asc"]],
            headerCallback:function(e,a,t,n,s){},
            columnDefs:[{targets:0, width:"30px", className:"dt-left", orderable:!1}]
        }),
        $(document).on("change",".m-group-checkable",function(){
            $('#id-data').val('');
            var e   = $(this).closest("table").find("td:first-child .m-checkable"),
                a   = $(this).is(":checked");

            $(e).each(function(){
                var b   = $('#id-data').val();
                a?(
                    $(e).prop("checked",1),
                    $(e).closest("tr").addClass("active"),
                    $('.hapus-data').removeClass("disabled"),
                    $('#id-data').val(b+$(this).attr("id")+',')
                )
                :
                (
                    $(e).prop("checked",0),
                    $(e).closest("tr").removeClass("active"),
                    $('.hapus-data').addClass("disabled"),
                    $('#id-data').val(ML.str_replace($(this).attr("id")+',','',b))
                )
            })
        }),
        $(document).on("change",".m-checkable",function(){
            // $('#id-data').val('');
            var id  = $(this).attr("id");
            var el  = $("tbody tr .m-checkbox");
            var a   = $('.m-checkable').is(":checked");
            var b   = $('#id-data').val();
            var c   = $('#'+id).is(":checked");
            a?(
                $(el).prop("checked",!0),
                $('.hapus-data').removeClass("disabled"),
                $('#id-data').val(b+id+',')
            )
            :
            (
                $(el).prop("checked",!1),
                $('.hapus-data').addClass("disabled"),
                $('#id-data').val(b.replace(id+',', ''))
            );
        })
    }
};
jQuery(document).ready(function(){DatatablesBasicBasic.init()});