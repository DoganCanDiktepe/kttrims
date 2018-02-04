/* ============================================================
 * Form Elements
 * This file applies various jQuery plugins to form elements
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
var MODULE = {};
(function ($) {

    'use strict';

    var getBaseURL = function () {
        var url = document.URL;
        return url.substr(0, url.lastIndexOf('/'));
    }

    $(document).ready(function () {

        //Multiselect - Select2 plug-in
        //$("#multi").val(["Jim", "Lucy"]).select2();

        //Date Pickers
        //$('#datepicker-range, #datepicker-component, #datepicker-component2').datepicker();

        /*$('#datepicker-embeded').datepicker({
         daysOfWeekDisabled: "0,1"
         });*/

        /*
         $('#daterangepicker').daterangepicker({
         timePicker: true,
         timePickerIncrement: 30,
         format: 'MM/DD/YYYY h:mm A'
         }, function(start, end, label) {
         console.log(start.toISOString(), end.toISOString(), label);
         });*/

        /* Time picker
         * https://github.com/m3wolf/bootstrap3-timepicker
         */
        /*
         $('#timepicker').timepicker().on('show.timepicker', function(e) {
         var widget = $('.bootstrap-timepicker-widget');
         widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
         widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
         });
         */


        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        //Input mask - Input helper
        /* $(function($) {
         $("#date").mask("99/99/9999");
         $("#phone").mask("(999) 999-9999");
         $("#tin").mask("99-9999999");
         $("#ssn").mask("999-99-9999");
         });*/
        //Autonumeric plug-in - automatic addition of dollar signs,etc controlled by tag attributes
        //$('.autonumeric').autoNumeric('init');

        //Drag n Drop up-loader
        /*$("div#myId").dropzone({
         url: "/file/post"
         });*/
        //Single instance of tag inputs - can be initiated with simply using data-role="tagsinput" attribute in any input field
        /*$('.custom-tag-input').tagsinput({

         });*/
        /*

         var myCustomTemplates = {
         "font-styles": function(locale) {
         return '<li class="dropdown">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">' + '<span class="editor-icon editor-icon-headline"></span>' + '<span class="current-font">Normal</span>' + '<b class="caret"></b>' + '</a>' + '<ul class="dropdown-menu">' + '<li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal</a></li>' + '<li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">1</a></li>' + '<li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">2</a></li>' + '<li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">3</a></li>' + '<li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">4</a></li>' + '<li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">5</a></li>' + '<li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">6</a></li>' + '</ul>' + '</li>';
         },
         emphasis: function(locale) {
         return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
         },
         blockquote: function(locale) {
         return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
         },
         lists: function(locale) {
         return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
         },
         image: function(locale) {
         return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
         },
         link: function(locale) {
         return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<label class="checkbox"> <input type="checkbox" checked="" class="bootstrap-wysihtml5-insert-link-target">Open link in new window</label>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
         },
         html: function(locale) {
         return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Edit HTML" data-wysihtml5-action="change_view" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-html"></i>' + '</a>' + '</div>' + '</li>'
         }
         }
         */
        /*
         //TODO: chrome doesn't apply the plugin on load
         setTimeout(function() {
         $('#wysiwyg5').wysihtml5({
         html: true,
         stylesheets: ["pages/css/editor.css"],
         customTemplates: myCustomTemplates
         });
         }, 500);
         */

        $('#summernote').summernote({
            height: 200,
            onfocus: function (e) {
                $('body').addClass('overlay-disabled');
            },
            onblur: function (e) {
                $('body').removeClass('overlay-disabled');
            },
            onkeyup: function (e) {
                MODULE.General.setval('#field2', $(this).code());
            }
        });

        $('.switch').on('change', function () {
            if ($(this).is(':checked')) {
                $(this).val(1);
            } else {
                $(this).val(0);
            }
        });


        MODULE.Login();

        MODULE.Plugins.init();

    });

})(window.jQuery);

MODULE.Login = (function ($) {

    var info = "LoginWrapper";
    var _self = this;

    function buildCache() {
        _self.$loginForm = $('#login_form');
    }

    function validationControl() {
        _self.$loginForm.validate();
    }

    function eventListener() {

    }

    function init() {
        buildCache();
        eventListener();
        validationControl();

    }

    return init;
});


MODULE.General = (function ($) {
    var info = "General Settings";

    function otherValSet(field1, field2) {
        $(field1).val(field2);
    }

    function seoSetVal(val) {
        $('#seoUrl').val(MODULE.Plugins.seo(val));
    }

    return {
        setval: otherValSet,
        seo: seoSetVal
    }

})(jQuery);


MODULE.Plugins = (function ($) {
    var info = "CMS PLUGIN";
    var _self = this;
    var uploadArrayData = {};
    var _options = {
        fileBox: '.fileinput-box',
        filesOutPut: '.filesoutPut',
        progressBar: '.progress',
        multipleType: false
    }


    function init() {
        buildCache();
        eventListener();
        getPictureValue();
    }

    function buildCache() {

    }

    function getPictureValue() {
        if ($('input[name=picture]').length) {
            uploadArrayData = ($('input[name=picture]').val().length > 0) ? $.parseJSON($('input[name=picture]').val()) : {};
        }
    }

    function setPictureValue() {
        uploadArrayData = (jQuery.isEmptyObject(uploadArrayData)) ? '' : JSON.stringify(uploadArrayData);
        $('input[name=picture]').val(uploadArrayData);
    }

    function uploadRemove() {
        var uploadArrayValue = $(this).parents('.items').attr('data-img');
        $(this).parents(_options.fileBox).find('[data-img="' + uploadArrayValue + '"]').remove();
        delete uploadArrayData[uploadArrayValue];
        setPictureValue();
    }

    function uploadDone(e, data) {
        var outPutHTML = '<div class="col-xs-4 col-sm-2 items" data-img="' + data.result.attach_file_name + '"><img src="' + base_path + upload_resize_path + data.result.attach_file_name + '" class="img-responsive"> <a class="remove-picture"><i class="fa fa-trash"></i></a></div>';

        if (_options.multipleType) {
            uploadArrayData[data.result.attach_file_name] = data.result;
            $(e.target).parents(_options.fileBox).find(_options.filesOutPut).append(outPutHTML);
        } else {
            uploadArrayData = {};
            uploadArrayData[data.result.attach_file_name] = data.result;
            $(e.target).parents(_options.fileBox).find(_options.filesOutPut).html(outPutHTML);
        }

        $(e.target).parents(_options.fileBox).find('input[name=picture]').val(JSON.stringify(uploadArrayData));
        $(e.target).parents(_options.fileBox).find(_options.progressBar).find('.progress-bar').css('width', '0%');
    }

    function uploadProgressDone(e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $(e.target).parents(_options.fileBox).find(_options.progressBar).find('.progress-bar').css(
            'width',
            progress + '%'
        );
    }

    function uploadInit(uploadPath, multipleType) {
        if (typeof multipleType != undefined) {
            _options.multipleType = multipleType;
        }

        $('.fileUpload').fileupload({
            url: base_path + uploadPath,
            dataType: 'json',
            done: uploadDone,
            progressall: uploadProgressDone
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled')
    }

    function eventListener() {
        $(document).on('click', '.remove-picture', uploadRemove);
    }


    function seoUrl(as_url) {
        var url = as_url
            .replace(/ü/g, "u")
            .replace(/Ü/g, "u")
            .replace(/ğ/g, "g")
            .replace(/Ğ/g, "g")
            .replace(/İ/g, "i")
            .replace(/ı/g, "i")
            .replace(/ş/g, "s")
            .replace(/Ş/g, "s")
            .replace(/ç/g, "c")
            .replace(/Ç/g, "c")
            .replace(/ö/g, "o")
            .replace(/Ö/g, "o")
            .toLowerCase() // change everything to lowercase
            .replace(/^\s+|\s+$/g, "") // trim leading and trailing spaces
            .replace(/[_|\s]+/g, "-") // change all spaces and underscores to a hyphen
            .replace(/[^a-z0-9-]+/g, "") // remove all non-alphanumeric characters except the hyphen
            .replace(/[-]+/g, "-") // replace multiple instances of the hyphen with a single instance
            .replace(/^-+|-+$/g, "") // trim leading and trailing hyphens
            ;
        return url;
    }

    return {
        upload: uploadInit,
        seo: seoUrl,
        init: init
    }

})(jQuery);

