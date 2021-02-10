/*********************
 * ファイルのアップロード
 */
var _num=1;
$(function(){
    $('#upfileDetail').on('mouseover', function(){
        
        return true;
    });

    $('#upfileDetail').on('change', function(){
        _num = $(".drapBox").length+1;
        // ファイル情報を取得
        var files = this.files;
        console.log(files);
        var _exp = files[0][ 'name' ].split('.').pop();
        if(_exp == "zip"){
            $(this).uploadZipFiles();
            return true;
        }
        
        $(this).uploadFiles(files);
        return true;
    });

    $(document).on("click",".detaildelete",function(){
        var _id = $(this).attr("id").split("-");
        var _drop = "dropBox-"+_id[1];
        $("#"+_drop).remove();
        return false;
    });

});
$.fn.uploadZipFiles = function(){
    $('#prog').val(0);
    $('#pv').html("");
    let _upfile = $('input[name="upfileDetail"]');
    let fd = new FormData();
    fd.append("upfile", _upfile.prop('files')[0]);

    $.ajax({
        url: '/Admin/Fileupload/zip/',
        type: 'POST',
        data: fd,
        processData: false,
        contentType: false,
        xhr : function(){
            var XHR = $.ajaxSettings.xhr();
            XHR.upload.addEventListener('progress',function(e){
                var progre = parseInt(e.loaded/e.total * 100);
                $('#prog').val(progre);
                $('#pv').html(progre);
            });
            return XHR;
        }
        
        
    }).done(function(data) {
        var obj = $.parseJSON(data);
        var _div = "";
        var _tmp = "/assets/image/temp/";
        $.each(obj,function(index, value){
            _div = "<div class='drapBox col-sm-3' id='dropBox-"+_num+"'>";
            _div += "<div class='mangaImg'><img src="+_tmp+value+" /></div>";
            _div += "<div class='dropdelete'><a href='javascript:void(0);'  class='detaildelete' id='detaildelete-"+_num+"' >×</a></div>";
            _div += "<input type='hidden' name='mangaDetail[]' value='"+_tmp+value+"'  />";
            _div += "</div>";
            _num = _num+1;
            $("#listWithHandle").append(_div);
        });     
        

    }).fail(function(data) {
        console.log(data.responseText);
    });

};


$.fn.uploadFiles = function(files){
    $('#prog').val(0);
    $('#pv').html("");
    var fd = new FormData();
    var filesLength = files.length;
    // ファイル情報を追加
    for (var i = 0; i < filesLength; i++) {
        fd.append("files[]", files[i]);
    }
    // Ajaxでアップロード処理をするファイルへ内容渡す
    $.ajax({
        url: '/Admin/Fileupload/fileAll/',
        type: 'POST',
        data: fd,
        processData: false,
        contentType: false,
        xhr : function(){
            var XHR = $.ajaxSettings.xhr();
            XHR.upload.addEventListener('progress',function(e){
                var progre = parseInt(e.loaded/e.total * 100);
                $('#prog').val(progre);
                $('#pv').html(progre);
            });
            return XHR;
        }
        
        
    }).done(function(data) {
        var obj = $.parseJSON(data);
        var _div = "";
        var _tmp = "/assets/image/temp/";
        $.each(obj,function(index, value){
            _div = "<div class='drapBox col-sm-3' id='dropBox-"+_num+"'>";
            _div += "<div class='mangaImg'><img src="+_tmp+value+" /></div>";
            _div += "<div class='dropdelete'><a href='javascript:void(0);'  class='detaildelete' id='detaildelete-"+_num+"' >×</a></div>";
            _div += "<input type='hidden' name='mangaDetail[]' value='"+_tmp+value+"'  />";
            _div += "</div>";
            _num = _num+1;
            $("#listWithHandle").append(_div);
        });
        
        

    }).fail(function(data) {
        console.log(data.responseText);
    });




};
