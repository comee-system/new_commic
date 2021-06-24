<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->
		<section class="m-5">
		<?=form_open_multipart("/mypage/conf/".$id);?>
			<div class="row">
				<div class="card w-100 mt-1" id="comic_select_one">
					<div class="card-body comiclist">
						<label>
							<div class="row">
								<div class="col-11">
									<input type="checkbox" value="0" checked  id="comic_select_one_checked" />
									▼連載を選択
								</div>
							</div>
							
						</label>
					</div>
				</div>
				<div class="w-100 hide" id="comiclists">
					<?php foreach($comic as $key=>$value):?>
						<div class="card w-100">
							<div class="card-body comiclist">
								<label>
									<div class="row">
										<div class="col-2 col-md-1">
											<?php if($value->head_image):?>
											<img src="<?=$this->config->config['imagepath']?><?=$value->uid?>/min_<?=$value->head_image?>"  />
											<?php else:?>
												<img src="<?=$this->config->config['imagepath']?>cover.jpg"  />
											<?php endif;?>
										</div>
										<div class="col-10 col-md-11">
											<?php 
											$chk = "";
											if(isset($comiclist->comic_id) && $comiclist->comic_id == $value->id):
												$chk = "checked";
											endif;
											?>
											
											<input type="radio" value="<?=$value->id?>" name="comic_id"  <?=$chk?> >
											
											<?=$value->title?>
										</div>
									</div>
								</label>
							</div>
						</div>
					<?php endforeach;?>
				</div>
				<span class="text-danger"><?=form_error('comic_id'); ?></span>
				<div class="mt-2 w-100">
					<button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#modal1">
					<i class="fas fa-upload"></i> ファイルアップロード (<span id="imageCount"><?=count($comicimage)?></span>件設定中)
					</button>
					
					<div class="modal fade " id="modal1" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">

						<div class="modal-dialog modal-xl" role="document">
							<div class="modal-content ">
								<div class="modal-header">
									<h5 class="modal-title" id="label1">漫画ファイルアップロード</h5>
								</div>
								<div class="modal-body">
									
									<div id="upFileWrap" class="w-100 mt-3">
										<div id="inputFile">
											<p id="dropArea">ここにファイルをドロップしてください<br>または</p>

											<div id="inputFileWrap">
												<input type="file" name="uploadFile[]" id="uploadFile">
												<div id="btnInputFile"><span>ファイルを選択する</span></div>
												<div id="btnChangeFile"><span>ファイルを変更する</span></div>
											</div>
										</div>
									</div>

									<div class="modal-body">
										<div id="img1" class="row">
										<?php foreach($comicimage as $key=>$value):
											$chk = "";
											if($value->cover == 1) $chk = "checked";
											?>
											<div class='col-3'>
												<img src='<?=$this->config->config['imagepath']?><?=$user->id?>/comic/<?=$value->filename?>' class='w-100' />
												<input type='hidden' name='imageSort[<?=$value->number?>]' value='<?=$value->number?>'  />
												<label><input type='radio' <?=$chk?> name='cover' value='<?=$value->number?>' />表紙</label>
											</div>
										<?php endforeach?>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 mt-3">
					<label for="title">タイトル</label>
					<?php
						$title = set_value('title');
						if(!$title && isset($comiclist->comiclist_title)) $title = $comiclist->comiclist_title;
						
					?>
					<input type="text" name="title" id="title" value="<?=$title?>" class="form-control" placeholder="タイトルを入力してください" />
					<span class="text-danger"><?=form_error('title'); ?></span>
				</div>
				<div class="col-12 mt-3">
					<label for="title">ふりがな</label>
					<?php
						$kana = set_value('kana');
						if(!$kana && isset($comiclist->kana)) $kana = $comiclist->kana;
					?>
					<input type="text" name="kana" id="kana" value="<?=$kana?>" class="form-control" placeholder="ふりがなを入力してください" />
				</div>
				<div class="col-12 mt-3">
					<label for="caption">キャプション</label>
					<?php
						$caption = set_value('caption');
						if(!$caption && isset($comiclist->caption)) $caption = $comiclist->caption;
					?>
					<input type="text" name="caption" id="caption" value="<?=$caption?>" class="form-control" placeholder="見出しを入力してください" />
				</div>
				<div class="col-12 mt-3">
					<div class="border p-3 tags">
						<a href="javascript:void(0);" class="btn btn-outline-danger" data-toggle="modal" data-target="#modaltag" ><i class="fas fa-plus"></i>タグの追加</a>
						<?php foreach($comictag as $key=>$value):?>
							<a href='javascript:void(0);' class='btn btn-success tagclose' ><i class='fas fa-times'></i> <?=$value->name?>
							<input type='hidden' name='tag[]' value='<?=$value->name?>' />
							</a>
						<?php endforeach?>
					</div>
				</div>

				<div class="modal" id="modaltag" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<p>タグ設定</p>
								<input type="text" id="tag" value="" class="form-control" />
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
								<button type="button" class="btn btn-primary" id="tagsetting">設定</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 mt-3">
					<label>年齢制限</label>
					<select name="age" class="form-control">
						<?php foreach($this->config->config['ageSetting'] as $key=>$value):
							$sel = "";
							if($comiclist->age == $key || $key == set_value('age') ) $sel = "selected";
							?>
							<option value="<?=$key?>" <?=$sel?> ><?=$value?></option>
						<?php endforeach?>
					</select>
				</div>
				<div class="col-12 mt-3">
					<label>リード文</label>
					<?php
						$read = set_value('read');
						if(!$read && isset($comiclist->read)) $read = $comiclist->read;
					?>
					<textarea class="form-control" placeholder="紹介文を入力してください" name="read" rows="3"><?=$read?></textarea>
				</div>
				

				<div class="col-12 mt-3">
					<input type="submit" name="pass" value="投稿する" class="btn btn-primary w-100" />
				</div>
			</div>
		<?=form_close();?>
		</section>
	</div>
	<!--/.container-fluid--> 

