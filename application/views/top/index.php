

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>

		<!--=============================================================================== -->
		<section class="row">
			
				<?php $this->load->view('elements/topmenu'); ?>
				
			<div class="col-lg-10 col-12 ">
				<div class="d-block d-lg-none">
					<div class="table-responsive mt-0  col-12 scroll_box ">
						<table class="menutable m-0 p-0">
							<tr>
								<?php foreach($menu_list as $key=>$value):?>
									<td nowrap="">
										<a href="/mypage/" class="linker" ><?=$value?></a>
									</td>
								<?php endforeach;?>
							</tr>
						</table>
						
					</div>
				</div>
				<div class="d-block font-weight-bold h4 text-left mt-3">
					<i class="fas fa-exclamation-circle"></i>
					 編集部のおすすめ
				</div>
				<div class="d-block" >
					<div class="table-responsive mt-0  col-12 scroll_box ">
						<div class="table">
							<div class="table-row">
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="https://usagidayo.com/wp-content/uploads/2019/02/rogo2.png" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="https://i.pinimg.com/474x/a4/60/9e/a4609e6cbbcaebb0b2a1e826568e3965.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="table-row">
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="https://pics.prcm.jp/utatan21/8316106/jpeg/8316106.jpeg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="http://www.comee.jp/files/921_539263399bd38/01.png" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							

						</div>
					</div>
				</div>

				<div class="d-block font-weight-bold h4 text-left mt-3">
					<i class="far fa-laugh-beam"></i> 今日の注目
				</div>
				<div class="d-block" >
					<div class="table-responsive mt-0  col-12 scroll_box ">
						<div class="table">
							<div class="table-row">
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="http://www.comee.jp/files/968_572765a428a93/01.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="https://i.pinimg.com/474x/a4/60/9e/a4609e6cbbcaebb0b2a1e826568e3965.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="table-row">
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							

						</div>
					</div>
				</div>

				<div class="d-block font-weight-bold h4 text-left mt-3">
					<i class="fas fa-history"></i> あなたにおすすめ 
				</div>
				<div class="d-block" >
					<div class="table-responsive mt-0  col-12 scroll_box ">
						<div class="table">
							<div class="table-row">
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="https://i.pinimg.com/474x/a4/60/9e/a4609e6cbbcaebb0b2a1e826568e3965.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="table-row">
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="table-cell">
									<a href="/manga/1" class="topLink">
										<div class="row p-0 m-0">
											<div class="col-12 p-0 m-0">
												<img src="/assets/image/img/unnamed.jpg" alt="" class="topImg">
											</div>
											<div class="col-12">
												<p class="mb-1 font-weight-bold">商品名が⼊ります</p>
												<small class="font-weight-bold p-0 m-0">読み放題 （税込）</small>
												<div class="d-md-flex justify-content-between"> 
													<div class="ml-auto py-2"><i class="fas fa-heart mr-2"></i><span class="mr-2">609</span> <i class="fas fa-comment-alt mr-2"></i><span>120</span> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							

						</div>
					</div>
				</div>
				
			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

