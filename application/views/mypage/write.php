<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->

		<section class="m-5">
			<div class="mx-auto w-100 mw1170 mt-3" >
				<form action="" method="POST" >
					<div class="row m-0 p-0 py-3">
						<a href="/mypage/write/preview" class="btn btn-primary w-100">
						<i class="fas fa-book-reader"></i> プレビュー
						</a>
					</div>
					<div class="row uploadarea m-0 p-0 " style="background-image:url('/assets/image/img/background.jpg')">	
						<div class="filter">
						<label class="uploads" for="file">
							<p class="text-center text-white p-0 m-0">
								<i class="fas fa-camera"></i><br />ヘッダ画像
							</p>
							<input type="file" name="headImage" id="file" />
						</label>
						</div>
					</div>
					<div class="form-group mt-3">
						<label>連載タイトル</label>
						<input type="text" name="title" value="" class="form-control" placeholder="連載のタイトル名を入力してください。" />
					</div>
					<div class="form-group">
						<label>連載の説明</label>
						<textarea class="form-control" rows=4 placeholder="連載の説明を入力してください。"></textarea>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label class="p-0 m-0">販売設定</label>
						</div>
						<div class="form-group col-4">
							<input type="radio" class="btn-check hide" name="saletype" id="sale_free" autocomplete="off" checked>
							<label class="btn btn-outline-success w-100" for="sale_free">無料</label>
						</div>
						<div class="form-group col-4">
							<input type="radio" class="btn-check hide" name="saletype" id="sale_month" autocomplete="off" checked>
							<label class="btn btn-outline-success w-100" for="sale_month">月額</label>
						</div>
						
					</div>
					<div class="form-group">
						<label>販売価格</label>
						<input type="text" name="sale_price" value="" class="form-control col-md-4 col-12"/>
					</div>

					<div class="row uploadarea m-0 p-0 " style="background-image:url('/assets/image/img/background2.jpg')">	
						<div class="filter">
						<label class="uploads" for="announceImage">
							<p class="text-center text-white p-0 m-0">
								<i class="fas fa-camera"></i><br />告知画像
							</p>
							<input type="file" name="announceImage" id="announceImage" />
						</label>
						</div>
					</div>
					<div class="form-group mt-3">
						<label>告知文言</label>
						<textarea class="form-control" rows=4 placeholder="告知を入力してください。"></textarea>
					</div>


					<div class="form-row mt-3">
						<div class="form-group col-sm-12">
							<label class="p-0 m-0">公開設定</label>
						</div>
						<div class="form-check pl-0">
							<input type="checkbox" checked data-toggle="toggle" data-on="公開" data-off="非公開" data-onstyle="success" data-offstyle="danger">
						</div>
					</div>
					<div class="form-row mt-3 " role="group" >						
						<div class="col-md-4 col-4 "><input type="submit" name="regist" value="登録する" class="btn btn-primary w-100" /></div>
						<div class="col-md-4 col-4"><input type="submit" name="cancel" value="キャンセル" class="btn btn-secondary w-100" /></div>
						<div class="col-md-4 col-4"><input type="submit" name="delete" value="削除する" class="btn btn-danger w-100" /></div>
					</div>
				</form>
			</div>
		</section>
		
	</div>
	<!--/.container-fluid--> 

