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
					<div class="col-md-3">
						<div class="card mb-4 shadow-sm">
							<div class="card-body position-relative">
								<div class="text-center">
									<img src="/assets/image/img/sample1.jpg" class="ht50 mw-100" />
								</div>
								<div class="p-2">
									<div class="h5">閉鎖病棟</div>
									<p><i class="fas fa-book-open"></i>
									<small>投稿本数</small>
									<b>32</b>
									<small>本</small></p>
									<div class="text-right">
										<input type="checkbox" checked data-toggle="toggle" data-on="公開中" data-off="非公開" data-onstyle="success" data-offstyle="danger">
									</div>
								</div>
								<a href="/mypage/write/1" class="w-100 btn btn btn-secondary">編集する</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card mb-4 shadow-sm">
							<div class="card-body position-relative">
								<div class="text-center">
									<img src="/assets/image/img/sample2.jpg" class="ht50" />
								</div>
								<div class="p-2">
									<div class="h5">アンパンマン</div>
									<p><i class="fas fa-book-open"></i>
									<small>投稿本数</small>
									<b>32</b>
									<small>本</small></p>
									<div class="text-right">
										<input type="checkbox"  data-toggle="toggle" data-on="公開中" data-off="非公開" data-onstyle="success" data-offstyle="danger">
									</div>
								</div>
								<a href="/mypage/write/2" class="w-100 btn btn btn-secondary">編集する</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card mb-4 shadow-sm">
							<div class="card-body position-relative">
								<div class="text-center">
									<img src="/assets/image/img/sample3.jpg" class="ht50" />
								</div>
								<div class="p-2">
									<div class="h5">毀滅の刃</div>
									<p><i class="fas fa-book-open"></i>
									<small>投稿本数</small>
									<b>32</b>
									<small>本</small></p>
									<div class="text-right">
										<input type="checkbox"  data-toggle="toggle" data-on="公開中" data-off="非公開" data-onstyle="success" data-offstyle="danger">
									</div>
								</div>
								<a href="/mypage/write/3" class="w-100 btn btn btn-secondary">編集する</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
	</div>
	<!--/.container-fluid--> 

