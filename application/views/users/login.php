<?php $this->load->view('elements/topmenu_login'); ?>

  <div class="main-contents container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">

            <!-- 各ソーシャルアカウントでログイン -->
            <div class="text-center my-5">
                <h1>ログインする</h1>
                <div class="btn col-md-8 text-center mt-5 mx-2 mb-2">
                    <button type="button" class="btn btn-primary w-75"> <i class="fab fa-twitter">　Twitterでログイン</i></button>
                </div>
                <div class="btn col-md-8 mx-2 mb-2">
                    <button type="button" class="btn facebook w-75"><i class="fab fa-facebook-f"> Facebookでログイン</i></button>
                </div>
                <div class="btn col-md-8 mx-2 mb-2">
                    <button type="button" class="btn btn-danger w-75"><i class="fab fa-google">　Googleでログイン</i></button>
                </div>
                <div class="btn col-md-8 mx-2">
                    <button type="button" class="btn btn-success w-75 btnflex"><i class="fab fa-line"></i>　LINEでログイン　</i></button>
                </div>
                <div class="p-3">
                </div>              
            </div>

            <!-- メールアドレスまたはユーザーIDでログイン -->
            <form method="POST" action="#">
                <div class="text-center my-5">
                    <h5>メールアドレスまたはIDでログイン</h5>
                    <div class="form-row text-left justify-content-center mt-5">
                        <label class="col-sm-8 col-sm-offset-2"> メールアドレスまたはユーザーID</label>
                        <div class="col-sm-8">
                            <!--入力がメールアドレスの場合-->
                            <p> 
                                <input type="email" name="email" autocomplete="email" class="form-control " placeholder="メールアドレスまたはユーザーID" required />
                            </p>
                            <!--入力がユーザIDの場合 
                            <p>
                                <input type="text" name="uid" autocomplete="uid" class="form-control" placeholder="メールアドレスまたはID" required />
                            </p> -->
                        </div>

                        <label class="col-sm-8 col-sm-offset-2">パスワード<br>
                            <small class="text-danger"> *8文字以上　半角英数字または_(アンダースコア)</small>
                        </label>
                        <div class="col-sm-8">  
                            <p>
                            <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="パスワード" required />
                            </p>
                            <p><a href="/users/reset_password">パスワードを忘れた方はこちら</a></p>
                        </div>
                    </div>
                </div>

                <!-- ログインボタン -->
                <div class="text-center my-5">
                    <input type="submit" value="ログイン" class="btn btn-success btn-flex">
                </div>
            </form>
        </div>
  </div>
