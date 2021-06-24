<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		<!--=============================================================================== -->
		<section class="">
			<div class="d-block font-weight-bold h4">COMEEにログインする</div>
				<div class="row my-3">
					<div class="col-md-5 d-none d-md-block">
					<div class="col col-xs-12 col-md-12">
						<h2>COMEEにようこそ！</h2>
						<div class="mt-5">
						<p>COMEEは、創作をする人、それを応援する人、ものづくりが好きなみんなのための街のような場所。
						<br />
						<br />
						好みのクリエイターやコンテンツを見つけたり、自分のつくりたいものをつくったりして楽しめます。
						<br />
						<br />
						いっしょに、創作の輪を広げていきましょう。
						</p>
						</div>
					</div>
					</div>


					<div class="col-12 col-md-7">
						<div class="col-12  col-md-10">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 fw-normal">comeeにログインする</h4>
								</div>
								<div class="card-body">
									<?=form_open("/login/login_validation");?>
									<div >
										<label for="email">メールアドレス</label>
										<input type="text" name="email" id="email" value="<?=$this->input->post('email')?>" placeholder="mail@comee.co.jp" class="form-control" />
										<div class="text-danger"><?=form_error('email'); ?></div>
									</div>
									<div class="mt-3">
										<label for="password">パスワード
										</label>
										<input type="text" name="password" id="password" value="<?=$this->input->post('password')?>"  class="form-control" />
										<div class="text-danger"><?=form_error('password'); ?></div>
									</div>
									<div class="text-center mt-3">
										
										<input type="submit" name="regist" value="ログインする" class="btn btn-info w-100" />
									</div>
									<hr class="mt-3" />
									<div class="text-center mt-3">
										<p class="font-weight-bold">ソーシャルアカウントでログイン</p>
										<div class="row">
										<div class="col-md-6">
										<a href="" class="btn btn-success w-100">
											<i class="fab fa-twitter" ></i>
											Twitter</a>
										</div>
										<div class="col-md-6">
										<a href="" class="btn btn-primary w-100">
										<i class="fab fa-facebook-f"></i>
											Facebook</a>
										</div>
										</div>
									</div>
									<?=form_close();?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

