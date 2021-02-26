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
				<?=form_open_multipart("/mypage/write_add/".$id);?>
					<div class="row m-0 p-0 py-3">
						<a href="/mypage/write/preview" class="btn btn-primary w-100">
						<i class="fas fa-book-reader"></i> プレビュー
						</a>
					</div>
					
					<?php
						$headimage = "";
						if($comic->head_image){
							$headimage = $this->config->config['imagepath'].$comic->uid."/".$comic->head_image;
						}
					?>
					<div class="row uploadarea m-0 p-0 " style="background-image:url('<?=$headimage?>')" id="file_creater_bunner" >	
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
						<?php
							$title = (set_value('title'))?set_value('title'):$comic->title;
						?>
						<input type="text" name="title" value="<?=$title?>" class="form-control" placeholder="連載のタイトル名を入力してください。" />
						<span class="text-danger"><?=form_error('title')?></span>
					</div>
					<div class="form-group">
						<label>連載の説明</label>
						<?php
							$explain = (set_value('explain'))?set_value('explain'):$comic->explain;
						?>
						<textarea class="form-control" name="explain" rows=4 placeholder="連載の説明を入力してください。"><?=$explain?></textarea>
					</div>
					
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label class="p-0 m-0">販売設定</label>
						</div>
						<?php foreach($feesetting as $key=>$value):
							$act = $chk = "";
							if(set_value('explain') || $comic->sale_type):
								if(
									set_value('explain') == $value['key'] 
									|| $comic->sale_type == $value['key']
								):
									$act="active";
									$chk="checked";
								endif;
							else:
								if($value['key'] == 1):
									$act="active";
									$chk="checked";
								endif;
							endif;
							?>
						<div class="form-group col-4">
							<input type="radio" class="btn-check hide" name="sale_type" value="<?=$key?>" id="sale_free_<?=$value['key']?>" autocomplete="off" <?=$chk?> >
							<label class="btn btn-outline-success w-100 <?=$act?> sale_type" for="sale_free_<?=$value['key']?>"><?=$value['value']?></label>
						</div>
						<?php endforeach;?>
						
					</div>
					<div class="form-group">
						<label>販売価格</label>
						<?php
							$sale_price = (set_value('sale_price'))?set_value('sale_price'):$comic->sale_price;
						?>
						<input type="text" name="sale_price" value="<?=$sale_price?>" class="form-control col-md-4 col-12"/>
					</div>
					<?php
						$announceimage = "";
						if($comic->announce_image){
							$announceimage = $this->config->config['imagepath'].$comic->uid."/".$comic->announce_image;
						}
					?>
					<div class="row uploadarea m-0 p-0 " style="background-image:url(<?=$announceimage?>)" id="announceImage_creater_bunner" >	
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
						<?php
							$announce = (set_value('announce'))?set_value('announce'):$comic->announce;
						?>
						<textarea class="form-control" name="announce" rows=4 placeholder="告知を入力してください。"><?=$announce?></textarea>
					</div>


					<div class="form-row mt-3">
						<div class="form-group col-sm-12">
							<label class="p-0 m-0">公開設定</label>
						</div>
						<div class="form-check pl-0">
							<?php
								$chk = (set_value('open_flag'))?"checked":"";
							?>
							<input type="checkbox" checked data-toggle="toggle" name="open_flag" data-on="公開" data-off="非公開" data-onstyle="success" data-offstyle="danger">
						</div>
					</div>
					<div class="form-row mt-3 " role="group" >						
						<div class="col-md-4 col-4 "><input type="submit" name="regist" value="登録する" class="btn btn-primary w-100" /></div>
						<div class="col-md-4 col-4"><a href="/mypage/serial/"  class="btn btn-secondary w-100" >キャンセル</a></div>
						<div class="col-md-4 col-4"><input type="submit" name="delete" value="削除する" class="btn btn-danger w-100" /></div>
					</div>
				<?=form_close();?>
			</div>
		</section>
		
	</div>
	<!--/.container-fluid--> 

