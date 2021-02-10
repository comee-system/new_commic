<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
    <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">アカウント設定【パスワードの変更】
    </div>
    
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <form method="POST" action="">
            <div class="text-center my-5">
                <div class="form-row text-left justify-content-center ">
                    <!-- 現在のパスワードで認証 -->
                    <label class="col-sm-8 col-sm-offset-2"> 現在のパスワード<br>
                    </label>
                    <div class="col-sm-8 mb-4">
                        <p> 
                            <input type="password" name="password" autocomplete="old_password" class="form-control " placeholder="現在のパスワードを入力してください。" required />
                        </p>
                    </div>
                    
                    <!-- 新しいパスワードを入力 -->
                    <label class="col-sm-8 col-sm-offset-2"> 新しいパスワード<br>
                        <small class="text-danger"> *8文字以上, 半角英数字と_(アンダースコア)が使用できます。</small>
                    </label>
                    <div class="col-sm-8">
                        <p> 
                            <input type="password" name="password" autocomplete="old_password" class="form-control " placeholder="新しいパスワードを入力してください。" required />
                        </p>
                    </div>

                    <!-- 新しいパスワードを入力(確認) -->
                    <label class="col-sm-8 col-sm-offset-2"> 新しいパスワード(確認)<br>
                        <small class="text-danger"> </small>
                    </label>
                    <div class="col-sm-8">
                        <p> 
                            <input type="password" name="password" autocomplete="old_password" class="form-control " placeholder="新しいパスワードを入力してください。" required />
                        </p>
                    </div>
                </div>
            </div>

            <!-- 設定保存 -->
            <div class="py-2 mb-4 row justify-content-around">
                <a href="/users/settings"><button type="button" class="btn btn-danger btnflex">キャンセル</button></a>
                <input type="submit" value="保存" formaction="/users/settings" class="btn btn-success btnflex">
            </div>
        </form>
    </div>
</div>
