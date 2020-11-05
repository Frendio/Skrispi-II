/**
 * Aajax caller class
 *
 * @package     Madeline
 * @subpackage  system_js
 * @category    Ajax caller
 * @author      Stevani Andolo
 */

var ML_Ajax_Caller = function() {

    this.array_data = {};

    this.manual_search = function(element) {
        var controller  = ajax.controller('user_guide_search');
        var method      = ajax.method('manual_search');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data,'manual_search');
    };

    this.close_alert = function() {
        ML.remove_class('.alert-box','top-position');
    };

    this.db_conf = function(element) {
        var controller  = ajax.controller('database_conf');
        var method      = ajax.method('index');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data,'db_conf');
    };

    this.route_conf = function(element) {
        var controller  = ajax.controller('route_conf');
        var method      = ajax.method('index');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data,'route_conf');
    };

    this.dir_conf = function(element) {
        var controller  = ajax.controller('directory_conf');
        var method      = ajax.method('index');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data,'dir_conf');
    };

    this.system_status = function() {
        var controller  = ajax.controller('configuration');
        var method      = ajax.method('gs_ajax');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data);
    };

    this.adb_conf = function(element) {
        var controller  = ajax.controller('add_database_conf');
        var method      = ajax.method('index');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data, 'adb_conf');
    };

    this.import_db = function(element) {
        var controller  = ajax.controller('import_db');
        var method      = ajax.method('index');
        var ajax_data   = ajax.ajax_data(controller,method);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data, 'import_db');
    };

    this.ddb_conf = function(element) {
        var controller  = ajax.controller('drop_database_conf');
        var method      = ajax.method('index');
        var data        = ajax.data('ugm');
        var ajax_data   = ajax.ajax_data(controller,method,data);

        this.array_data['element']  = element;
        this.array_data['data']     = ajax_data;

        ajax.request(this.array_data, 'ddb_conf');
    };

};
