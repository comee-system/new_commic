<!-- Top Nav -->
<nav class="navbar navbar-expand navbar-light bg-transparent">
		<a class="navbar-brand text-success" href="/">Comee</a>
</nav> 

<div class="main-contents container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">

        <!-- 見出し -->
        <h3 class="text-center text-dark p-2 my-3">作品投稿/新規または編集</h3>

        <!-- 以下、編集(/manga/edit?id={id})の場合のみ表示 -->
        <div class="container mt-4 justify-content-center">

            <!-- 1枚目（表紙） -->
            <div class="row" id="manga1">
                <div class="col-12">
                    <nav class="navbar alert alert-success text-dark">
                    <div class="font-weight-bold text-dark">1枚目<div class="text-dark border border-dark rounded text-center"> 表紙</div></div>
                        <div class="inline">
                            <a href="#manga2"><button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-arrow-down"></i></button></a>
                            <a href="#manga3"><button class="btn btn-outline-dark font-weight-bold ncss" type="button">末</button></a>
                            <button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-times"></i></button>
                        </div>
                    </nav>
                </div>
                <div class="bg-light mx-auto d-block mb-3 p-2">
                    <img src="/assets/image/5/detail/17/thum/5f7191ae805b1.jpg" class="img" alt="image1">
                </div>
            </div>
            
            <!-- 2枚目（画像選択前） -->
            <div class="row" id="manga2">
                <div class="col-12">
                    <nav class="navbar alert alert-success text-dark">
                    <div class="font-weight-bold text-dark">2枚目</div>
                        <div class="inline">
                            <a href="#manga1"><button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-arrow-up"></i></button></a>
                            <a href="#manga3"><button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-arrow-down"></i></button></a>
                            <a href="#manga1"><button class="btn btn-outline-dark font-weight-bold ncss" type="button">表紙</button></a>
                            <a href="#manga3"><button class="btn btn-outline-dark font-weight-bold ncss" type="button">末</button></a>
                            <button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-times"></i></button>
                        </div>
                    </nav>
                </div>
                <div class="bg-light mx-auto d-block mb-3">
                    <img src="/assets/image/5/detail/18/thum/5fa4eba11bebe.jpg" class="img" alt="image2">
                </div>
            </div>

            <!-- 3枚目（末） -->
            <div class="row" id="manga3">
                <div class="col-12">
                    <nav class="navbar alert alert-success text-dark">
                    <div class="font-weight-bold text-dark">3枚目<div class="text-dark border border-dark rounded text-center"> 末</div></div>
                        <div class="inline">
                            <a href="#manga2"><button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-arrow-up"></i></button></a>
                            <a href="#manga1"><button class="btn btn-outline-dark font-weight-bold ncss" type="button">表紙</button></a>
                            <button class="btn btn-outline-dark font-weight-bold ncss" type="button"><i class="fas fa-times"></i></button>
                        </div>
                    </nav>
                </div>
                <div class="bg-light mx-auto d-block mb-3 p-2">
                    <img src="/assets/image/5/detail/18/lists/5fa4eba8a87bb.jpg" class="img" alt="image3">
                </div>
            </div>
        </div>
        <!-- 以上、編集(/manga/edit?id={id})の場合のみ表示 -->


            <div class="p-3"></div>
            <!-- 画像を追加 このボタンを押すとディレクトリから画像を選択する-->
            <div class="alert alert-success border border-0">
                <div class="row col-10 offset-1">
                    <button type="button" class="col mx-4 btn btn-success btn-lg btn-block text-nowrap ncss">画像を追加</button>
                    <div class="col-6 text-center text-nowrap">・画像の要件を記載<br>　サイズ、枚数条件</div>
                </div>
            </div>

            <div class="p-3"></div>
            <h5 class="font-weight-bold ml-2 py-3">作品情報</h5>

            <!-- 作品情報入力 -->
            <form method="POST" action="#">
                <div class="ml-2">
                    <!-- タイトル -->
                    <div class="form-group row">
                        <label for="title" class="col-3 col-form-label bg-light border text-nowrap">タイトル</label>
                        <div class="col-9">
                        <input type="text" id="title" class="form-control" placeholder="ここに入力">
                        </div>
                    </div>

                    <!-- キャプション -->
                    <div class="form-group row">
                        <label for="caption" class="col-3 col-form-label bg-light border">キャプション</label>
                        <div class="col-9">
                        <textarea rows="4" id="caption" class="form-control" placeholder="ここに入力" ></textarea>
                        </div>
                    </div>

                    <!-- タグ -->
                    <div class="form-group row">
                        <label for="tag" class="col-3 col-form-label bg-light border">タグ</label>
                        <div class="col-9">
                        <input type="text" id="tag" class="form-control" placeholder="ここに入力">
                        </div>
                    </div>

                    <!-- 年齢制限（プルダウン） -->
                    <div class="form-group row">
                        <label for="age_limit" class= "col-3 col-form-label bg-light border text-nowrap">年齢制限</label>
                        <div class="col-9">
                            <select title="年齢制限"  name="age_limit" id="age_limit" class="form-control" autocomplete="" aria-describedby="">
                                <option selected value="01">全年齢</option>
                                <option value="02">R-18</option>
                            </select>
                        </div>
                    </div>

                    <!-- 表現内容(チェックボックス) -->
                    <div class="form-group row">
                        <label for="contents" class="col-3 col-form-label bg-light border text-nowrap">表現内容</label>
                        <div class="col-9">
                        <!-- <input type="checkbox" id="checkbox" class="form-control" checked data-toggle="toggle" data-style="ios"> -->
                            <div class="list-group-item d-flex justify-content-between align-items-center">性的表現
                                <input type="checkbox" id="checkbox" class="form-control" data-toggle="toggle" data-style="ios" aria-checked="false" title="性的表現"  name="adult">
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">暴力表現
                                <input type="checkbox" id="checkbox" class="form-control" data-toggle="toggle" data-style="ios" aria-checked="false" title="暴力表現"  name="violence">
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">飲酒・喫煙・ドラッグ
                                <input type="checkbox" id="checkbox" class="form-control" data-toggle="toggle" data-style="ios" aria-checked="false" title="飲酒・喫煙・ドラッグ"  name="alcohol_Smoking_Drug">
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">ホラー・恐怖
                                <input type="checkbox" id="checkbox" class="form-control" data-toggle="toggle" data-style="ios" aria-checked="false" title="ホラー・恐怖"  name="horror">
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">宗教
                                <input type="checkbox" id="checkbox" class="form-control" data-toggle="toggle" data-style="ios" aria-checked="false" title="宗教"  name="religion">    
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">反社会的表現
                                <input type="checkbox" id="checkbox" class="form-control" data-toggle="toggle" data-style="ios" aria-checked="false" title="反社会的表現"  name="antisocial">
                            </div>
                        </div>
                    </div>


                    <!--以下、A・Bいずれか -->

                    <!-- A.既存の連載がある場合 -->               
                    <!-- 連載を選択（プルダウン） -->
                    <div class="form-group row mb-5">
                        <label for="select_serial" class="col-3 col-form-label bg-light border">連載を選択</label>
                        <div class="col-9">
                            <select title="連載を選択" name="select_serial" id="select_serial" class="form-control"  autocomplete="" aria-describedby="">
                                <option selected value="01">連載タイトル1</option>
                                <option value="02">連載タイトル2</option>
                            </select>
                        </div>
                    </div>

                    <!-- B.連載がひとつもない場合 -->
                    <!-- 連載を追加（ボタン）-->
                    <div class="form-group text-center my-5">
                        <a href="/manga/regist_serial"><button type="button" class="btn btn-success btnflex">連載を追加</button></a>
                    </div>
                    
                    <!-- 以上 -->


                    <hr> <!-- 販売設定 -->
                    <div class="form-group row">      
                        <h5 class="col-4 my-3">販売設定</h5>
                        <div class="form-check form-check-inline col">
                                <input class="form-check-input" type="radio" name="radio2" id="sales1" value="無料" checked="checked">無料
                        </div>
                        <div class="form-check form-check-inline col">
                                <input class="form-check-input" type="radio" name="radio2" id="sales2" value="有料">有料
                        </div>
                    </div>

                    <!-- 以下、有料を選択した場合のみ -->
                    <!-- 価格を入力 -->
                    <div class="form-group row mb-5">
                        <label for="price" class="col-3 col-form-label bg-light border">価格</label>
                        <div class="col-7">
                            <input type="number" id="price" class="form-control" placeholder="ここに入力">
                        </div>
                        <label class="col-1 col-form-label">円</label>
                    </div>
                    <!-- 以上、有料を選択した場合のみ -->

                    <hr>
                    <!-- 公開範囲 -->
                    <div class="form-group row">
                        <h5 class="col-4 my-3">公開範囲</h5>
                    </div>
                    <!-- 公開範囲を選択 -->
                    <div class="form-group row mb-5">
                        <label for="select_public" class="col-3 col-form-label bg-light border">連載を選択</label>
                        <div class="col-9">
                            <select title="公開範囲を選択"  name="select_public" id="select_public" class="form-control"  autocomplete="" aria-describedby="">
                                <option selected value="01">公開</option>
                                <option value="02">下書き(非公開)</option>
                            </select>
                        </div>
                    </div>

                    <hr>
                    <!-- サムネイル画像とリード文 -->
                    <div class="d-md-flex flex-row justify-content-center mt-4">
                        <!-- サムネイル画像を選択 -->
                        <div class="form-group mb-4">
                            <div class="card ml-3" style="width: 13rem; height: 13rem;">
                                <label for="inputFile" class="card-body-top"></label>
                                <div class="custom-file center-block">
                                    <input type="file" class="custom-file-input" id="inputFile">
                                    <label class="custom-file-label" for="inputFile" data-browse="参照">サムネイルを選択</label>
                                    <img id="preview">選択画像をここに表示
                                </div>
                            </div>
                        </div>

                        <!-- リード文を入力 -->
                        <div class="form-group col">
                            <textarea rows="8" id="leadtext" class="form-control col w-100" placeholder="ここにリード文を入力" ></textarea>
                        </div>
                    </div>

                    <!-- 投稿する -->
                    <div class="form-group my-5 d-flex justify-content-around">
                        <a href="/creator/manga?id={id}"><button type="button" class="btn btn-danger btnflex">キャンセル</button></a>
                        <input type="submit" value="投稿する" formaction="/creator/manga?id={id}" class="btn btn-success btnflex">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
