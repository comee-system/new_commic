<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->
		<section class="m-2">
			<?php $this->load->view('elements/myself'); ?>
			<?php
				//マイページ用メニュー
				$active['follow']="1";
				$this->load->view('elements/mypagemenu',$active); 
			?>
			<ul class="nav justify-content-center mt-3">
				<li class="nav-item">
					<a class="nav-link btn btn-primary" id="followNav1" href="javascript:void(0);">フォロワー</a>
				</li>
				<li class="nav-item ml-5">
					<a class="nav-link btn btn-primary" id="followNav2" href="javascript:void(0);">フォロー</a>
				</li>
			</ul>

			<div id="tab1" class="hide">
				<div class="row mt-2">
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://www.shonenjump.com/j/comics/_comicimage/onepiece095.jpg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">作品名</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>


				</div>
			</div>
			<div id="tab2" class="hide">
				<div class="row mt-2">
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム123</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://www.shonenjump.com/j/comics/_comicimage/onepiece095.jpg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">作品名</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>
					<div class="col-12 mt-2 col-lg-3 card p-0 m-0 pb-space position-relative ">
						<div class="row p-3 m-0 ">
							<div class="col-3 col-md-4 col-lg-12  p-2 text-center">
								<img class="rounded-circle" src="https://pics.prcm.jp/9959d117a414b/84627974/jpeg/84627974.jpeg" alt="Generic placeholder image" width="80" height="80">
							</div>
							<div class="col-9 col-md-8 col-lg-12 pb-2">
								<div class="col-12 font-weight-bold m-0 p-0">ニックネーム</div>
								<p class="h6 m-0 p-0">ユーザID</p>
								<p class="h6 m-0 p-0">そういった事を直接聞ける人、聞けな人に分かれてくると思います。なので事前にあなたの理想をプロフィールに書くことで、...</p>
								
							</div>
						</div>
						<div class="row position-absolute bottom-0 right-0 p-0 m-0 mb-2 ">
							<div class="col-12"><a href="#" class="btn btn-success w-100">フォロー中</a></div>
						</div>
					</div>


				</div>
			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

