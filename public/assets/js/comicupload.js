/*********************
 * ファイルのアップロード
 */
$(function(){
    var fileArea = document.getElementById('dropArea');
    var fileInput = document.getElementById('uploadFile');

    // ドラッグオーバー時の処理
    fileArea.addEventListener('dragover', function(e){
        e.preventDefault();
        fileArea.classList.add('dragover');
    });
    // ドラッグアウト時の処理
    fileArea.addEventListener('dragleave', function(e){
        e.preventDefault();
        fileArea.classList.remove('dragover');
    });

    // ドロップ時の処理
    fileArea.addEventListener('drop', function(e){
        e.preventDefault();
        fileArea.classList.remove('dragover');

        // ドロップしたファイルの取得
        var files = e.dataTransfer.files;
        // 取得したファイルをinput[type=file]へ
        fileInput.files = files;
      //  $("#img1").html("");
        var _div = "";
        var _num = parseInt($("#imageCount").text());
        $.each(files,function(key,val){
            var file = val;
            var reader = new FileReader();
            //アップロードした画像を設定する
            reader.onload = (function(file){
                return function(e){
                var _chk = "";
                if(_num == 0 ){
                    _chk="checked";
                }
                _div = "<div class='col-3  checkareabox'><img src='"+e.target.result+"' class='w-100' />";
                _div += "<input type='hidden' name='imageSort["+_num+"]' value='"+val.name+"'  />";
                _div += "<input type='radio' id='label-"+_num+"' name='cover' value='"+_num+"' "+_chk+" />";
                _div += "<label for='label-"+_num+"'>表紙</label>";
                _div += "</div>";
                $("#img1").append(_div);
                
                _num++;
                $("#imageCount").text(_num);
                };
            })(file);
            
            reader.readAsDataURL(file);
        });

        



        if(typeof files[0] !== 'undefined') {
            //ファイルが正常に受け取れた際の処理
        } else {
            //ファイルが受け取れなかった際の処理
            alert("image error");
        }
    });
    
    fileInput.addEventListener('change', function(e){
        var file = e.target.files[0];
        
        if(typeof e.target.files[0] !== 'undefined') {
            // ファイルが正常に受け取れた際の処理
        } else {
            // ファイルが受け取れなかった際の処理
        }
    }, false);

    $(document).on("click",'[name="cover"]',function(){


        return true;
    });
});


$(function(){
    Sortable.create(img1);
});

