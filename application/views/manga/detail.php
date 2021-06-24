

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		<?php if($bunner):?>
		<div class="row p-0 m-0">
			<div class="row uploadarea m-0  ht200" style="background-image:url('<?=$bunner?>')" >	
			</div>
		</div>
		<?php endif;?>
		<!--=============================================================================== -->
		
		
		<section >
			<div class="row p-0 m-0 ">
				<div class="mx-auto wdetail">
					<div class="row m-0 p-0">
						<div class="p-3" >
						<div class="h5 m-0 p-0 col-12"><?=$detail->comiclist_title?></div>
						<div class="h5 m-0 p-0 col-12"><small><?=$detail->kana?></small></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-12">
							<?php if($detail->coverimage):?>
								<img src="<?=$this->config->config['imagepath']?><?=$detail->uid?>/comic/<?=$detail->coverimage?>" class="w-md-75 w-100 p-3" />
							<?php else:?>
								<div class=""></div>
							<?php endif;?>
						</div>
						<div class="col-md-4 col-12 mt-3">
							<span class="badge badge-info">New</span>
							<div class="row">
								<div class="col-4">著者・作者</div>
								<div class="col-8"><a href="" class="btn btn-danger btn-sm"><i class="fas fa-person-booth"></i> <?=$user->nickname?></a></div>

								
								<div class="col-12 font-weight-bold mt-3">タグ</div>
								<div class="col-12">
									<?php foreach($tag as $key=>$value):?>
										<span class="badge badge-secondary"><?=$value->name?></span>
									<?php endforeach;?>
									
								</div>
								
								<div class="col-12 mt-3">
									<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
								</div>
								<div class="col-12 mt-3">
									<a href="/manga/viewer/<?=$detail->comiclist_id?>" class="btn btn-success w-100"><i class="fas fa-book"></i> 試し読み</a>
								</div>
								<div class="col-12 mt-3">
									<a href="javascript:void(0);" data-toggle="modal" data-target="#one_buy" class="btn btn-info w-100"><i class="fas fa-shopping-basket"></i> 購入する</a>
								</div>
								<div class="col-12 mt-3">
									<a href="javascript:void(0);"  class="btn btn-outline-primary w-100" data-toggle="modal" data-target="#support">
									<i class="fas fa-hands-helping" ></i> 支援</a>
								</div>

								
							</div>
						</div>
						<div class="col-md-4 col-12">
							<p>あらすじ | ストーリー</p>
							<div class="mt-3">
								<?=$detail->caption?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row p-0 m-3 mt-3">
				<div class="mx-auto wdetail">
					<div class="h5">一覧</div>
					<?php foreach($comiclist as $key=>$value):?>
						<div class="row mb-4 pb-3 shadow-sm w-100 border">
							<div class="m-2 col-12 ">
								<b><?=$value->comiclist_title?></b>
								<span class="badge badge-info ml-2">New</span>
							</div>
							<div class="col-md-10 col-12">
								<div class="col-12">
									<small>価格：</small><?=$value->sale_price?>円
								</div>
								<hr />
								<div class="col-12">
									<?=nl2br($value->caption)?>
								</div>
								
							</div>
							<div class="col-md-2 col-12">
								<img src="<?=$this->config->config['imagepath']?><?=$value->uid?>/comic/<?=$value->coverimage?>" class="w-md-75 w-100 " />
							</div>
							<div class="row p-0 m-0 mt-2 w-100">
								<div class="col-6">
									<a href="/manga/viewer/<?=$value->comiclist_id?>" class="btn btn-success w-100"><i class="fas fa-book"></i> 試し読み</a>
								</div>
								<div class="col-6">
									<a href="" class="btn btn-info w-100"><i class="fas fa-shopping-basket"></i> 購入する</a>
								</div>
							</div>
						</div>
					<?php endforeach;?>

				</div>
			</div>
			<!--モーダル 支援-->
			<?php $this->load->view('elements/modal_support'); ?>
			<?php $this->load->view('elements/modal_one_buy'); ?>
		</section>
	</div>
	<!--/.container-fluid--> 

