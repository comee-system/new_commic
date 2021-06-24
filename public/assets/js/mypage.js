var _id = "";
var _type = "";
$(function(){
    $(".save").on("click",function(){
        $("input[name='type']").val($(this).attr("id"));
    });
    //クリエーター情報変更
    $(".account_edit").on("click",function(){
       
        
    });
    //クリエーターバナーアップロード
    $("#file").change(function(e){
        _id = $(this).attr("id");
        _type = "css";
        $(this).fileupload(e);
    });
    //告知画像アップロード
    $("#announceImage").change(function(e){
        _id = $(this).attr("id");
        _type = "css";
        $(this).fileupload(e);
    });

    //クリエーターアイコンアップロード
    $("#iconImage").change(function(e){
        _id = $(this).attr("id");
        _type = "src";
        $(this).fileupload(e);
    });


    //販売設定
    $("input[name='saletype']").on("change",function(){
        $("input[name='saletype']").next('label').removeClass("active");
        $(this).next('label').addClass("active");
        $("input[name='saletype']").prop('checked', false);
        $(this).prop('checked', true);
    });

    //sns連携のステータス変更
    $("input[name='sns']").on("change",function(){$(this).editFlag("sns");});
    $("input[name='age']").on("change",function(){$(this).editFlag("age");});

    //月額ボタン切り替え
    $(".sale_type").on("click",function(){
        $(".sale_type").removeClass("active");
        $(this).addClass("active");
    });

    //投稿画面で連載を選択
    $(this).commentlistdisp();
    $("#comic_select_one").on("click",function(){
        $(this).commentlistdisp();
    });

    //連載一覧ページの公開非公開
    $(".serial_open_flag").on("change",function(){
        var _id=$(this).attr("id").split("-");
        var _chk=$(this).prop("checked");
        var _open_flag = 1;
        if(!_chk) _open_flag = 0;

        let _csrf_test_name = $("[name='csrf_test_name']").val();
        let _data = {
            "id":_id[1],
            "open_flag":_open_flag,
            "csrf_test_name":_csrf_test_name
        };
        let _url = "/mypage/serialStatusAjax";
        $.ajax({
            url:_url,
            type:'POST',
            data:_data
        })
        .done(function(html){
            
        })
        .fail(function() {
            console.log("error");
        });
        
        return false;
    });
    //タグ
    $("#tagsetting").on("click",function(){
        var _tag = $("#tag").val();
        if(!_tag) return false;
        var _btn = " <a href='javascript:void(0);' class='btn btn-success tagclose' ><i class='fas fa-times'></i> "+_tag+"";
        _btn += "<input type='hidden' name='tag[]' value='"+_tag+"' />";
        _btn += "</a>";
        $("div.tags").append(_btn);
        $('#modaltag').modal('hide');
    });
    $(document).on("click","a.tagclose",function(){
        $(this).hide();
    });
});
$.fn.commentlistdisp = function(){
    var _let = $("#comic_select_one_checked").prop("checked");
    if(_let){
        $("#comiclists").show();
    }else{
        $("#comiclists").hide();
    }

};
$.fn.fileupload = function(e){
    var file = e.target.files[0];
    var reader = new FileReader();
    //画像でない場合は処理終了
    try{
        if(file.type.indexOf("image") < 0){
            alert("画像ファイルを指定してください。");
            return false;
        }
    }catch(ex){
        return false;
    }
    //アップロードした画像を設定する
    reader.onload = (function(file){
    return function(e){
        if(_type == "css") $("#"+_id+"_creater_bunner").css("background-image", "url("+e.target.result+")");
        if(_type == "src") $("#"+_id+"_creater_bunner").attr("src", e.target.result);
    };
    })(file);
    reader.readAsDataURL(file);


}


$.fn.editFlag = function(type){
    let _select = $(this).val();
    let _csrf_test_name = $("[name='csrf_test_name']").val();
    let _data = {
        "type":type,
        "value":_select,
        "csrf_test_name":_csrf_test_name
    };
    let _url = "/mypage/editParamAjax";
    $.ajax({
        url:_url,
        type:'POST',
        data:_data
    })
    .done(function(html){
        console.log("OK");
console.log(html);
    })
    .fail(function() {
        console.log("error");
    });
}