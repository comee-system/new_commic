<script>

	var page = 4; //ページ数
	var imgtype = "png"; //画像の拡張子
	var title = "タイトル名"; //タイトル名
	var site = "/manga/detail/1"; //サイトのURL
	var copy = "作者名"; //作者名
	var display = 0; //左ページ始まりは「0」、右ページ始まりは「1」

	
	$(function(){
		$("title,h1").text(title);
		$(".o_button").attr("onClick", "location.href='" + site + "'");
		$(".copy").text(copy);
		for(var i=1; i<=page; i++){
			$('#last_page').before('<div class="c_i"><div><img data-lazy="/assets/image/viewer/' + i + '.' + imgtype + '" src="/assets/image/viewer/load.gif"></div></div>'); 
		}
		
		/**長すぎるからh1の方のタイトル改行したいって時var/コメントアウト解除して編集**/
		//$("h1").html("サンプル<br>サンプル");
			
	});
</script>
</head>
<body>

<div class="slider" dir="rtl">
        <div id="first_page"></div>
        <div id="last_page">
            <div class="last_page_in" dir="ltr">
                <div>
                    <!--最終ページフリー追加ゾーンここから-->

                    

                    <!--最終ページフリー追加ゾーンここまで-->
                </div>
                <h1></h1>
                <small>Copyright &copy; <span class="copy"></span> All Rights Reserved</small>
                <!--最終ページにボタンを追加する場合は以下をコメントアウト解除して編集-->
                <!--
                <p>
                    <a class="button" href="#">次の話へ</a>
                    <a class="button" href="#">前の話へ</a>
                </p>
                -->
                <p>
					<button class="btn btn-success b_button" ><i class="fas fa-undo-alt"></i> 最初から読む</button>
					<button class="btn btn-primary o_button orange" ><i class="fas fas fa-backward"></i> サイトへ戻る</button>
                </p>
            </div>
        </div>
    </div>
    <!--漫画表示ゾーンここまで-->
    
    <!--メニューここから-->
    <div class="menu_box">
        <div class="menu_button">メニュー</div>
        <div class="menu_show">    
            <h1></h1>
            <small>Copyright &copy; <span class="copy"></span> All Rights Reserved</small>
            <!--メニューにボタンを追加する場合は以下をコメントアウト解除して編集-->
            <!--
            <p>
                <a class="button" href="#">次の話へ</a>
                <a class="button" href="#">前の話へ</a>
            </p>
            -->
            <p>
				<button class="btn btn-primary p_button"><i class="fa fa-fw fa-question"></i> 操作方法</button>
				<button class="btn btn-primary g_button sp_none"><i class="fas fa-desktop"></i> 全画面表示</button>
				<button class="btn btn-primary z_button"><i class="fas fa-search-plus"></i> 拡大モード</button>
				<button class="btn btn-primary o_button orange"><i class="fas fa-backward"></i> サイトへ戻る</button>
            </p>
            <div class="slick-counter"><span class="current"></span> / <span class="total"></span></div>
            <div class="dots" dir="rtl"></div>
            <div class="menu_button close">閉じる</div>
        </div>
    </div>
    <!--メニューここまで-->
    
    <!--操作ヘルプここから-->
    <div class="help">
        <div class="help_in">
            <div class="help_img"><img src="/assets/image/viewer/help.png" width="300"></div>
            <p>【画面操作】</p>
            <!--class="sp_none"でPC以外だと非表示・class="pc_none"でPCだと非表示-->
            <ul class="pc_none">
                <li>&#9312;中央ダブルタップ<span>……拡大モード</span></li>
                <li>&#9312;中央フリック<span>……次のページ・前のページ</span></li>
                <li>&#9313;両端タップ<span>……次のページ・前のページ</span></li>
                <li>&#9314;ページャータップ<span>……ページ移動</span></li>
            </ul>
            <ul class="sp_none">
                <li>&#9312;中央スライド<span>……次のページ・前のページ</span></li>
                <li>&#9313;両端クリック<span>……次のページ・前のページ</span></li>
                <li>&#9314;ページャークリック<span>……ページ移動</span></li>
            </ul>
            <p class="sp_none">【キーボード操作】</p>
            <ul class="sp_none">
                <li>←キー……次のページ</li>
                <li>→キー……前のページ</li>
                <li>↓キー……メニュー表示</li>
                <li>↑キー……拡大モード</li>
                <li>F11キー……全画面表示</li>
            </ul>
        </div>
    </div>
    <!--操作ヘルプここまで-->
    
    <!--初期表示ガイドここから-->
    <div class="guide">
        <div class="slide-arrow prev-arrow"><span></span></div>
        <div class="guide_yazirusi"><div class="icon"></div><div class="text"></div></div>
        <div class="guide_operation">
            <!--ガイド内容ここから-->
            <img src="/assets/image/viewer/guide.png" width="190"><br>
            横へ読みます
            <!--ガイド内容ここまで-->
        </div>
        <div class="slide-arrow next-arrow"><span></span></div>
    </div>
    <!--初期表示ガイドここまで-->
    
    <!--拡大モードここから-->
    <div class="zoomwrap"></div>
    <div class="zoom_reset z_button">
        <div class="zr_in">拡大モードを解除</div>
    </div>
    <!--拡大モードここまで-->
