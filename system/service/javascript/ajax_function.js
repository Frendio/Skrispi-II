$(function(){    

    $(document).on('submit','#manual-search', function(){
        ajax_call.manual_search(this);
    });

    $(document).on('keyup','#manual-search', function(){
        ajax_call.manual_search(this);
    });

    $(document).on('click','.show-mmm', function(){
        ML.css('.ls-body', 'width', '100%');
    });

    $(document).on('click','.hide-mmm', function(){
        ML.css('.ls-body', 'width', '0');
    });

    $(document).on('submit','.db_conf', function(){
        ajax_call.db_conf(this);
    });

    $(document).on('submit','.route_conf', function(){
        ajax_call.route_conf(this);
    });

    $(document).on('submit','.dir_conf', function(){
        ajax_call.dir_conf(this);
    });

    $(document).on('submit','.add_database', function(){
        ajax_call.adb_conf(this);
    });

    $(document).on('submit','.import_db', function(){
        ajax_call.import_db(this);
    });

    $(document).on('submit','.drop_database', function(){
        ajax_call.ddb_conf(this);
    });

    $(document).on('click','.ml-stt_holder', function(){
        $('body,html').animate({scrollTop: 0}, 1250); 
    });

    $(document).on('click','.ml-mmenu', function(){
        var $this = $(".mlr-menut");
        if ($this.hasClass("show")) {
            $this.removeClass("show");
        } else {
            $this.addClass("show");
        }  
    });    
});

$(window).scroll(function(){
    var scrollTop = ($('html').scrollTop()) ? $('html').scrollTop() : $('body').scrollTop();     
    var stop = $('.wy-nav-content').offset().top - scrollTop;
    if (stop <= -151) {
		 $(".ml-stt_holder").show();
	} else {
		 $(".ml-stt_holder").hide();
	}
});
