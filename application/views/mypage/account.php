<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->
		<!--モーダル表示-->
		<?php $this->load->view('modals/editAccount',["id"=>"editMailAddress","title"=>"新しいメールアドレス"]); ?>
		<?php $this->load->view('modals/editAccount',["id"=>"editPassword","title"=>"新しいパスワード"]); ?>
		<?php $this->load->view('modals/editAccount',["id"=>"editUserID","title"=>"新しいユーザーID"]); ?>
		<?php $this->load->view('modals/editAccount',["id"=>"editUserName","title"=>"新しいユーザーネーム"]); ?>
		<?php $this->load->view('modals/editBirthday',["id"=>"editBirthday","title"=>"新しい生年月日"]); ?>
		<?php $this->load->view('modals/editCard',["id"=>"editCard","title"=>"カード情報"]); ?>
		<?php $this->load->view('modals/editPay',["id"=>"editPay","title"=>"支払い情報"]); ?>
		
		<!--//モーダル表示-->
		<section class="mb-5">
			<div class="row uploadarea m-0 p-0 ht120" style="background-image:url('/assets/image/img/background.jpg')">	

			</div>

			<div class="mx-auto w-100 mw1170 mt-3" >
				<div class="row">
					<div class="col-0 col-xl-2 p-3 text-center">
						<img class="rounded-circle w-75 mw200" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image " >
					</div>
					<div class="col-12 col-xl-10">
						<div class="card">
							<div class="card-body p-0 m-0">
								<ul class="list-group list-group-flush">
									
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">メールアドレス</p>
												<p class="m-0 p-0">sample@sample.co.jp</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="#" class="btn btn-success"  data-toggle="modal" data-target="#editMailAddress">変更</a>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">パスワード</p>
												<p class="m-0 p-0">＊＊＊＊＊</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="#" class="btn btn-success" data-toggle="modal" data-target="#editPassword">変更</a>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">ユーザーID</p>
												<p class="m-0 p-0">ABC1234</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="#" class="btn btn-success" data-toggle="modal" data-target="#editUserID">変更</a>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">ユーザーネーム</p>
												<p class="m-0 p-0">testTaro</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="#" class="btn btn-success" data-toggle="modal" data-target="#editUserName">変更</a>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">生年月日</p>
												<p class="m-0 p-0">1990年00月00日</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="#" class="btn btn-success"  data-toggle="modal" data-target="#editBirthday" >変更</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card mt-3 ">
							<div class="card-body p-0 m-0">
								<ul class="list-group list-group-flush">
									
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">カード情報</p>
												<p class="m-0 p-0">*****</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="#" class="btn btn-success" data-toggle="modal" data-target="#editCard">変更</a>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-10">
												<p class="font-weight-bold m-0">支払先</p>
												<p class="m-0 p-0">〇〇銀行ABC支店</p>
											</div>
											<div class="col-md-2 text-right">
												<a href="" class="btn btn-success" data-toggle="modal" data-target="#editPay">変更</a>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="card mt-3 mb-3">
							<div class="card-body p-0 m-0">
								<ul class="list-group list-group-flush">
									
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-8">
												<p class="font-weight-bold m-0">年齢制限作品の表示</p>
											</div>
											<div class="col-md-4 text-right">
												<div class="btn-group btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-secondary active">
														<input type="radio" name="age" id="age1" autocomplete="off" checked> 表示
													</label>
													<label class="btn btn-secondary">
														<input type="radio" name="age" id="age2" autocomplete="off"> 非表示
													</label>
												</div>

											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row m-0 p-0">
											<div class="col-md-8">
												<p class="font-weight-bold m-0">SNS連携</p>
											</div>
											<div class="col-md-4 text-right">
												<div class="btn-group btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-secondary active">
														<input type="radio" name="sns" id="sns1" autocomplete="off" checked> 有効
													</label>
													<label class="btn btn-secondary">
														<input type="radio" name="sns" id="sns2" autocomplete="off"> 無効
													</label>
												</div>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		
	</div>
	<!--/.container-fluid--> 

