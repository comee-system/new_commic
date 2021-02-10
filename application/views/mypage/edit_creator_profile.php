<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
  <div class="mb-4 bg-light rounded pt-4">
    <h3 class="text-center text-dark py-2 my-3">クリエイター情報の登録・変更</h3>
  
    <!-- ヘッダー画像変更 -->
    <form method="POST" action="#">
      <div class="card card my-4">
        <img src="/assets/image/5/detail/15/thum/neko.png" class="card-img" alt="header_image">
        <div class="card-img-overlay align-items-center pb-5">
            <div class="card-body d-flex justify-content-around">
              <h1><a href="#"><i class="fas fa-camera"></i></a></h1>
              <h1><a href="#"><i class="fas fa-times"></i></a></h1>       
            </div>
        </div>
      </div>

      <!-- 以下、クリエイタープロフィール編集画面 -->
      <div class="row py-2 m-2">
        <!-- アイコン変更 -->
        <div class="col-4 my-auto pt-1 noleft">
          <div class="card bg-light ml-2 border border-0">
            <img src="/assets/image/5/announce/49/icon.png" class="card-img img-thumbnail rounded-circle float-left" alt="icon_image">
            <a href="#"><div class="card-img-overlay align-items-center py-auto">
              <div class="card-body d-flex justify-content-around">
                  <h1 class="mb-4"><i class="fas fa-camera"></i></h1>
                </div>
              </div></a>
          </div>
        </div>

        <div class="col-sm-8 d-flex flex-column mt-2">
          <div class="d-flex flex-row mb-3" >
            <!-- ユーザーネーム変更 -->
            <div class="col-6 p-2 mx-auto">
              <h5 class="font-weight-bold pb-2">ユーザーネーム</h5>
              <a href="/users/update_username" class="text-dark font-weight-bold"><div class="col-md-7 col-sm-10 text-center alert alert-success text-nowrap">変更する
              </div>
              </a>
            </div>
            <!-- フォロワー数表示 -->
            <div class="col mx-auto pt-2">
                <h6>フォロワー:xxx</h6>
            </div>
          </div>

            <!-- プロフィール編集 -->
            <div class="p-2 text-left">
              <div class="form-group">
                  <label for="profileTextarea1">プロフィールをお書きください (160字以内)</label>
                  <textarea class="form-control" id="profileTextarea" rows="3" placeholder="プロフィールを記入"></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- ストア情報（最初は不要） -->
        <div class="form-row text-left justify-content-center ">
          <div class="col-12">
              <p class="font-weight-bold mx-2">ストア情報(最初は不要)
              </p>
              <div class="mx-2"><p>iichi・STORES・BASE・minne・MUUU・EC-CUBEで、あなたが販売している商品をマイページに表示します。登録方法は右のアイコンをクリックしてヘルプをご参照ください。   
                <i class="far fa-question-circle" data-toggle="modal" role="button" data-target="#exampleModal"></i>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">登録方法について</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                              (※詳細未定) 
                              </div>
                              <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary " data-dismiss="modal">閉じる</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <input type="url" name="url" autocomplete="url" class="form-control " placeholder="例 : http://">
          </div>       
        </div>

        <!-- 設定保存 -->
        <div class="text-center py-5 d-flex justify-content-around">
          <a href="/"><button type="button" class="btn btn-danger btnflex">キャンセル</button></a>
          <input type="submit" value="保存" formaction="/creator?id={id}" class="btn btn-success btnflex">
        </div>
    </form>
  </div>
</div>
