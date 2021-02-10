<?php $this->load->view('elements/topmenu_login'); ?>

<div class="main-contents container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <!-- 見出し -->
    <div class="text-center my-5">
      <h4>パスワードの再設定</h4>
    </div>
      
      <!-- パスワード入力フォーム -->
      <form method="POST" action="#">

         <!-- 入力欄 -->
        <div class="form-row text-left justify-content-center">
          <label class="col-sm-8 col-sm-offset-2">パスワード<br>
            <p><small class="text-danger"> *8文字以上, 半角英数字と_(アンダースコア)が使用できます
            </small></p>
          </label>
          <div class="col-sm-8">  
            <p>
            <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="新しいパスワードを入力" required />
            </p>
          </div>
        </div>

        <!-- 確認欄 -->
        <div class="form-row text-left justify-content-center">
          <div class="col-sm-8">  
            <p>
            <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="新しいパスワードを入力(確認)" required />
            </p>
          </div>
        </div>
        
        <!-- 送信ボタン -->
        <div class="text-center my-5">
          <input type="submit" value="設定" class="btn btn-success w-25 btn-flex">
        </div>
      </div>
    </form>
  </div>
</div>
  