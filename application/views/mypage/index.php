<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		<div class="row p-0 m-0">
			<img src="https://assets.st-note.com/production/uploads/images/9382886/ddc41ac380f4fdec45a8e3c6d8275de2.png" class="top_bunner" />
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
				<div class="col-12 mt-2 col-md-6 col-lg-3 card p-0 m-0 pb-space position-relative ">
					<div class="row p-0 m-0 ">
						<div class="col-4 col-md-12 p-2">
							<img src="https://saisin.link/wp-content/uploads/2016/09/%E6%9D%B1%E4%BA%AC%E3%81%90%E3%83%BC%E3%82%8B%EF%BC%97.jpg" alt="" class="listImg">
						</div>
						<div class="col-8 col-md-12 pb-2">
							<div class="col-12 p-0  mt-0 mt-md-2">カテゴリが⼊ります</div>
							<div class="col-12 font-weight-bold m-0 p-0">商品名が⼊ります</div>
							<p class="h6 m-0 p-0 text-left">
							親譲りの無鉄砲で⼩供の時から損ばかりしている。...
							</p>
							<div class="h6 m-0 p-0 mt-3">
								<span><i class="far fa-clock"></i>2011/01/01</span>
								<span class="ml-4"><i class="fas fa-lock-open"></i>公開中</span>
							</div>
							
						</div>
					</div>
					<div class="row position-absolute bottom-0 p-0 m-0 mb-2 w-100">
						<div class="col-6"><a href="#" class="btn btn-success w-100">作品</a></div>
						<div class="col-6"><a href="#" class="btn btn-primary w-100">編集</a></div>
					</div>
				</div>
				<div class="col-12 mt-2 col-md-6 col-lg-3 card p-0 m-0 pb-space position-relative ">
					<div class="row p-0 m-0 ">
						<div class="col-4 col-md-12 p-2">
							<img src="https://dosbg3xlm0x1t.cloudfront.net/images/items/9784088823911/1200/9784088823911.jpg" alt="" class="listImg">
						</div>
						<div class="col-8 col-md-12 pb-2">
							<div class="col-12 p-0  mt-0 mt-md-2">カテゴリが⼊ります</div>
							<div class="col-12 font-weight-bold m-0 p-0">商品名が⼊ります</div>
							<p class="h6 m-0 p-0 text-left">
							親譲りの無鉄砲で⼩供の時から損ばかりしている。...
							</p>
							<div class="h6 m-0 p-0 mt-3">
								<span><i class="far fa-clock"></i>2011/01/01</span>
								<span class="ml-4"><i class="fas fa-lock-open"></i>公開中</span>
							</div>
							
						</div>
					</div>
					<div class="row position-absolute bottom-0 p-0 m-0 mb-2 w-100">
						<div class="col-6"><a href="#" class="btn btn-success w-100">作品</a></div>
						<div class="col-6"><a href="#" class="btn btn-primary w-100">編集</a></div>
					</div>
				</div>
				<div class="col-12 mt-2 col-md-6 col-lg-3 card p-0 m-0 pb-space position-relative ">
					<div class="row p-0 m-0 ">
						<div class="col-4 col-md-12 p-2">
							<img src="https://newstisiki.com/wp-content/uploads/2020/01/e5d68aac47cb0730a27442007a84e737.jpg" alt="" class="listImg">
						</div>
						<div class="col-8 col-md-12 pb-2">
							<div class="col-12 p-0  mt-0 mt-md-2">カテゴリが⼊ります</div>
							<div class="col-12 font-weight-bold m-0 p-0">商品名が⼊ります</div>
							<p class="h6 m-0 p-0 text-left">
							親譲りの無鉄砲で⼩供の時から損ばかりしている。...
							</p>
							<div class="h6 m-0 p-0 mt-3">
								<span><i class="far fa-clock"></i>2011/01/01</span>
								<span class="ml-4"><i class="fas fa-lock-open"></i>公開中</span>
							</div>
							
						</div>
					</div>
					<div class="row position-absolute bottom-0 p-0 m-0 mb-2 w-100">
						<div class="col-6"><a href="#" class="btn btn-success w-100">作品</a></div>
						<div class="col-6"><a href="#" class="btn btn-primary w-100">編集</a></div>
					</div>
				</div>
				<div class="col-12 mt-2 col-md-6 col-lg-3 card p-0 m-0 pb-space position-relative ">
					<div class="row p-0 m-0 ">
						<div class="col-4 col-md-12 p-2">
							<img src="https://dw9to29mmj727.cloudfront.net/properties/2016/371-SeriesThumbnails_MHA__400x320.jpg" alt="" class="listImg">
						</div>
						<div class="col-8 col-md-12 pb-2">
							<div class="col-12 p-0  mt-0 mt-md-2">カテゴリが⼊ります</div>
							<div class="col-12 font-weight-bold m-0 p-0">商品名が⼊ります</div>
							<p class="h6 m-0 p-0 text-left">
							親譲りの無鉄砲で⼩供の時から損ばかりしている。...
							</p>
							<div class="h6 m-0 p-0 mt-3">
								<span><i class="far fa-clock"></i>2011/01/01</span>
								<span class="ml-4"><i class="fas fa-lock-open"></i>公開中</span>
							</div>
							
						</div>
					</div>
					<div class="row position-absolute bottom-0 p-0 m-0 mb-2 w-100">
						<div class="col-6"><a href="#" class="btn btn-success w-100">作品</a></div>
						<div class="col-6"><a href="#" class="btn btn-primary w-100">編集</a></div>
					</div>
				</div>
				<div class="col-12 mt-2 col-md-6 col-lg-3 card p-0 m-0 pb-space position-relative ">
					<div class="row p-0 m-0 ">
						<div class="col-4 col-md-12 p-2">
							<img src="https://cmoa.sslcs.cdngc.net/data/image/title/title_0000129673/VOLUME/100001296730005.jpg" alt="" class="listImg">
						</div>
						<div class="col-8 col-md-12 pb-2">
							<div class="col-12 p-0  mt-0 mt-md-2">カテゴリが⼊ります</div>
							<div class="col-12 font-weight-bold m-0 p-0">商品名が⼊ります</div>
							<p class="h6 m-0 p-0 text-left">
							親譲りの無鉄砲で⼩供の時から損ばかりしている。...
							</p>
							<div class="h6 m-0 p-0 mt-3">
								<span><i class="far fa-clock"></i>2011/01/01</span>
								<span class="ml-4"><i class="fas fa-lock-open"></i>公開中</span>
							</div>
							
						</div>
					</div>
					<div class="row position-absolute bottom-0 p-0 m-0 mb-2 w-100">
						<div class="col-6"><a href="#" class="btn btn-success w-100">作品</a></div>
						<div class="col-6"><a href="#" class="btn btn-primary w-100">編集</a></div>
					</div>
				</div>
				

			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

