<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->

		<section class="m-1 m-md-5">
			<div class="mx-auto w-100 mw1170 mt-3" >
			<?php $this->load->view('elements/alert');?>
				<?=form_open_multipart("/mypage/write_add/");?>
					<div class="row m-0 p-0 py-3">
						<a href="/mypage/write/preview" class="btn btn-primary w-100">
						<i class="fas fa-book-reader"></i> プレビュー
						</a>
					</div>
					
					
					<div class="row uploadarea m-0 p-0 " style="background-image:url('/assets/image/img/sample.jpg')" id="file_creater_bunner" >	
						<div class="filter">
						<label class="uploads" for="file">
							<p class="text-center  p-0 m-0">
								<i class="fas fa-camera"></i><br />ヘッダ画像
							</p>
							<input type="file" name="headImage" id="file" />
						</label>
						</div>
					</div>
					<div class="form-group mt-3">
						<label>連載タイトル</label> <small class="badge badge-danger">必須</small>
						<input type="text" name="title" value="<?=set_value('title')?>" class="form-control" placeholder="連載のタイトル名を入力してください。" />
						<span class="text-danger"><?=form_error('title')?></span>
					</div>
					<div class="form-group">
						<label>連載の説明</label>
						<textarea class="form-control" name="explain" rows=4 placeholder="連載の説明を入力してください。"></textarea>
					</div>
					
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label class="p-0 m-0">販売設定</label>
						</div>
						<?php foreach($feesetting as $key=>$value):
							$act = $chk = "";
							if($value['key'] == 1):
								$act="active";
								$chk="checked";
							endif;
							?>
						<div class="form-group col-4">
							<input type="radio" class="btn-check hide" name="sale_type" value="0" id="sale_free_<?=$value['key']?>" autocomplete="off" <?=$chk?> >
							<label class="btn btn-outline-success w-100 <?=$act?>" for="sale_free_<?=$value['key']?>"><?=$value['value']?></label>
						</div>
						<?php endforeach;?>
						
					</div>
					<div class="form-group">
						<label>販売価格</label>
						<input type="text" name="sale_price" value="" class="form-control col-md-4 col-12"/>
					</div>

					<div class="row uploadarea m-0 p-0 " style="background-image:url('/assets/image/img/sample.jpg')" id="announceImage_creater_bunner" >	
						<div class="filter">
						<label class="uploads" for="announceImage">
							<p class="text-center  p-0 m-0">
								<i class="fas fa-camera"></i><br />告知画像
							</p>
							<input type="file" name="announceImage" id="announceImage" />
						</label>
						</div>
					</div>
					<div class="form-group mt-3">
						<label>告知文言</label>
						<textarea class="form-control" name="announce" rows=4 placeholder="告知を入力してください。"></textarea>
					</div>


					<div class="form-row mt-3">
						<div class="form-group col-sm-12">
							<label class="p-0 m-0">公開設定</label>
						</div>
						<div class="form-check pl-0">
							<input type="checkbox" checked data-toggle="toggle" name="open_flag" data-on="公開" data-off="非公開" data-onstyle="success" data-offstyle="danger">
						</div>
					</div>
					<div class="form-row mt-3 " role="group" >						
						<div class="col-md-4 col-4 "><input type="submit" name="regist" value="登録する" class="btn btn-primary w-100" /></div>
						<div class="col-md-4 col-4"><input type="submit" name="cancel" value="キャンセル" class="btn btn-secondary w-100" /></div>
						<div class="col-md-4 col-4"><input type="submit" name="delete" value="削除する" class="btn btn-danger w-100" /></div>
					</div>
				<?=form_close();?>
			</div>
		</section>
		
	</div>
	<!--/.container-fluid--> 

