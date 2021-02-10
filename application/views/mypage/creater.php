<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->

		<section class="mb-5">
			<div class="row uploadarea m-0 p-0" style="background-image:url('/assets/image/img/background.jpg')">	
				<label for="file" class="uploads text-center " >
					ヘッダ画像の作成<br />
					<i class=" fas fa-camera" ></i>

				</label>
				<input type="file" id="file" name="file" class="form-control">
			</div>

			<div class="mx-auto w-100 mw1170 mt-3" >
				<div class="row">
					<div class="col-0 col-xl-2 p-3 text-center">
						<label for="iconImage" class="position-relative position-ct">
							<i class=" fas fa-camera" ></i>
							<img class="rounded-circle w-75 mw200" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image " >
						</label>
						<input type="file" id="iconImage" name="iconImage" class="form-control d-none">
					</div>
					<div class="col-12 col-xl-10 mt-3">
						<input type="text" name="username" value="" class="form-control" placeholder="ユーザネーム"  />
						<div class="mt-3">
							<textarea name="profile" class="form-control" rows=4 placeholder="あなたの自己紹介を書きましょう(140文字以内)"></textarea>
						</div>
						
						<div class="card w-100 mt-3">
							<div class="card-body">
								<div class="row">
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
							</div>
						</div>
						
					</div>

				</div>
			</div>


		</section>
		
	</div>
	<!--/.container-fluid--> 

