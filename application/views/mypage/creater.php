<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->
		<?=form_open_multipart("/mypage/editParams/creater");?>
		<section class="mb-5">
		<?php $this->load->view('elements/alert');?>
			<div class="row uploadarea m-0 p-0"  style="background-image:url('<?=$bunner?>')" id="file_creater_bunner">
				<label for="file" class="uploads text-center"  >
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
							<img class="rounded-circle w-75 mw200" src="<?=$icon?>"  id="iconImage_creater_bunner" >
						</label>
						<input type="file" id="iconImage" name="iconImage" class="form-control d-none">
					</div>
					<div class="col-12 col-xl-10 mt-3">
					
						<label>ニックネーム</label>
						<div class="input-group">
							<input type="text" class="form-control" name="nickname" value="<?=$user->nickname?>"　/>
						</div>
						<div class="input-group mt-3">
							<textarea name="introduce" class="form-control" rows=4 placeholder="あなたの自己紹介を書きましょう"><?=$user->introduce?></textarea>
						</div>
						<div class="mt-3 col-md-3 col-12">
							<button type="submit" class="btn btn-primary account_edit w-100" >変更</button>
						</div>
						<input type="hidden" name="type" value="creater" />
					</div>
				</div>
			</div>
		</section>
		<?=form_close();?>
	</div>
	<!--/.container-fluid--> 

