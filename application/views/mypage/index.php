<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		<div class="row p-0 m-0">
			<div class="row uploadarea m-0  ht200" style="background-image:url('<?=$bunner?>')" >	

			</div>
			
		</div>
		<!--=============================================================================== -->
		<section class="m-2">
			<!--自身の情報-->
			<?php $this->load->view('elements/myself'); ?>
			<?php
				//マイ用メニュー
				$active['mypage']="1";
				//クリエーター用
				$active['creater']=(isset($creater))?1:0;
				$this->load->view('elements/mypagemenu',$active); 
			?>

			<div class="row mt-2 border p-3">
				<div class="col-md-2 mt-2"><i class="fas fa-book"></i> 作品数：10<small>作品</small></div>
				<div class="col-md-3 col-6">
					<select class="form-control selects" placeholder="ステータス">
						<option value="0">すべて</option>
						<option value="0">公開中</option>
						<option value="0">下書き</option>
						<option value="0">予約投稿</option>
					</select>
				</div>
				<div class="col-md-3 col-6">
					<select class="form-control selects" placeholder="連載">
						<option value="0">連載リスト</option>
					</select>
				</div>
				<div class="col-md-4 col-12">
					<select class="form-control selects" placeholder="期間">
						<option value="0">2020年発効</option>
					</select>
				</div>
			</div>
			
			<div class="row mt-2">
				<?php foreach($comiclist as $key=>$value):?>
				<div class="col-12 mt-2 col-md-6 col-lg-3 card p-0 m-0 pb-space position-relative ">
					<div class="row p-0 m-0 ">
						<div class="col-4 col-md-12 p-2 text-center">
							<?php if($value->coverimage):?>
								<img src="<?=$this->config->config['imagepath']?><?=$value->uid?>/comic/<?=$value->coverimage?>" alt="" class="topImg">
							<?php else:?>
								<img src="<?=$this->config->config['imagepath']?>cover.jpg" alt="" class="topImg">
							<?php endif?>
						</div>
						<div class="col-8 col-md-12 pb-2">
							<div class="col-12  m-0  border  bg-secondary text-white"><?=$value->comic_title?></div>
							<div class="col-12 font-weight-bold m-0 p-0"><?=$value->comiclist_title?></div>
							<p class="h6 m-0 p-0 text-left">
								<?=mb_substr($value->caption,0,30)?>
								<?php if(mb_strlen($value->caption,"utf-8") > 30 ):?>
								…
								<?php endif?>
							</p>
							<div class="h6 m-0 p-0 mt-3">
								<span><i class="far fa-clock"></i><?=$value->dates?></span>
								<span class="ml-4">
									<i class="fas fa-lock-open"></i>
									<?=$this->config->config['openflag'][$value->open_flag]?>
								</span>
							</div>
							
						</div>
					</div>
					<div class="row position-absolute bottom-0 p-0 m-0 mb-2 w-100">
						<div class="col-6"><a href="/manga/detail/<?=$value->comiclist_id?>" class="btn btn-success w-100">作品</a></div>
						<div class="col-6"><a href="/mypage/post/<?=$value->comiclist_id?>" class="btn btn-primary w-100">編集</a></div>
					</div>
				</div>
				<?php endforeach?>



				

			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

