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

});
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