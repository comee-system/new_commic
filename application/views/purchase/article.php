<!-- Top Nav -->
<nav class="navbar navbar-expand navbar-light bg-transparent">
		<a class="navbar-brand text-success" href="/">Comee</a>
</nav> 

<div class="main-contents container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 class="text-center text-dark p-2 my-2">有料作品の購入</h3>

      <!-- 以下、記事情報表示画面 -->
        <div class="row col py-4 justify-content-center">
            <!-- 表紙画像 -->
            <div class="mt-2 col-md-3 w-50">
                <div class="card ml-2 border border-0">
                <img src="/assets/image/5/detail/17/thum/5f700052d720d.jpg" class="card-img img-thumbnail" alt="icon_image">
                </div>
            </div>

            <div class="col-md d-flex flex-column mt-2">
                <!-- 作品タイトル/ユーザーネーム -->
                <div class="row d-flex flex-row" >
                    <div class="col-8 text-left m-1 mx-auto">
                        <h4 class="font-weight-bold text-center text-nowrap">作品タイトル</h4>
                        <h5 class="font-weight-bold text-center text-nowrap">ユーザーネーム</h5>
                    </div>
                <!-- 価格表示 -->
                <div class="pb-2 d-flex align-items-center">
                    <div class="col-sm justify-content-center">ｘｘｘ円</div>
                </div>
                </div>

                <!--ここのスペースに支援リンクか、あらすじなど何かのコンテンツを入れる？-->
                <div class="text-left">
                    <div class="col-sm-12 justify-content-center">
                        <textarea class="form-control" id="profileTextarea" rows="3" placeholder="ここのスペースに支援リンクか、あらすじなど何かのコンテンツを入れる？"></textarea>
                    </div>
                </div>

                <!-- 残り画像数と決済方法Link -->
                <div class="row d-flex justify-content-around my-1 d-flex align-items-end">
                    <!-- 残り画像数 -->
                    <div class="p-2 text-left">
                        <div class="ml-4">
                            残り画像 xx 枚
                        </div>
                    </div>
                    <!-- 決済方法Link -->
                    <div class="d-flex justify-content-center">
                        <a href="/users/update_card_information"><button type="button" class="btn btn-secondary my-1">決済方法</button></a>
                    </div>
                </div>    
            </div>
        </div>

    <form method="POST" action="#">
        <!-- メッセージ -->
        <div class="form-row text-left justify-content-center">
            <div class="col-sm-10">
                <h5 class="text-dark">メッセージ<small>（絵文字使用可）</small></h5>
                <div class="form-group">
                    <textarea rows="5" cols="40" id="textarea1" class="form-control" placeholder="作者へのメッセージを入力してください(任意)" ></textarea>
                </div>
            </div>
        </div>

        <!-- 購入する -->
        <div class="py-5 row justify-content-around">
            <a href="/creator/manga?id={id}"><button type="button" class="btn btn-danger ml-5 btnflex">キャンセル</button></a>
            <input input type="submit" value="購入する" class="btn btn-success mr-5 btnflex">
        </div>
    </form>
  </div>
</div>
