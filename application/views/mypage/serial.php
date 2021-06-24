<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->

		<section class="m-2">
			<!--自身の情報-->
			<?php $this->load->view('elements/myself'); ?>
			<?php
				//マイページ用メニュー
				$active['serial']="1";
				$this->load->view('elements/mypagemenu',$active); 
			?>
			<div class="mx-auto w-100 mw1170 mt-3" >
				<div class="row">
					<div class="col-md-3 ">
						<div class="card mb-4 shadow-sm ">
							<div class="card-body">
								<button type="button" id="create" class="ht210 w-100 btn btn-lg btn-outline-secondary">
								<i class="fas fa-plus"></i><br />連載を作る
								</button>
							</div>
						</div>
					</div>
					<?php foreach($comic as $key=>$value): ?>
						<div class="col-md-3">
							<div class="card mb-4 shadow-sm">
								<div class="card-body position-relative">
									<div class="text-center">
										<?php if($value->uid ): ?>
										<?php if($value->head_image):?>
											<img src="<?=$this->config->config['imagepath']?><?=$value->uid?>/min_<?=$value->head_image?>" class="ht50 mw-100" />
										<?php else:?>
											<img src="<?=$this->config->config['imagepath']?>cover.jpg" class="ht50 mw-100" />
										<?php endif;?>
										<?php endif;?>
									</div>
									<div class="p-2">
										<div class="h5"><?=$value->title?></div>
										<p><i class="fas fa-book-open"></i>
										<small>投稿本数</small>
										<b>32</b>
										<small>本</small></p>
										<div class="text-right">
										<?php 
											$chk = "";
											if($value->open_flag == 1) $chk = "checked";
										?>
											<input type="checkbox" <?=$chk?> data-toggle="toggle" data-on="公開中" data-off="非公開" data-onstyle="success" data-offstyle="danger" class="serial_open_flag"  data-target="#open_flag" id="open_flag-<?=$value->id?>" >
										</div>
									</div>
									<a href="/mypage/write/<?=$value->id?>" class="w-100 btn btn btn-secondary">編集する</a>
								</div>
							</div>
						</div>

					<?php endforeach?>
					
				</div>
			</div>
		</section>
		
	</div>
	<!--/.container-fluid--> 

