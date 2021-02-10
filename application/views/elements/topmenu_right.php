<div class="row ">
	<div class="col-12 col-md-2 text-center">
		<a href="/">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/1200px-Logo_NIKE.svg.png" class="mt-3 w-25" />
		</a>
	</div>
	<div class="col-12 col-md-10 text-right mt-3">
		<div class="d-inline-flex ">
		<?php if($loginflag === 1):?>
			<div class="mr-3">
				<button type="button" class="btn dropdown-toggle w80" id="dLabel1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-exclamation-triangle text-danger"></i>
				</button>
				<div class="dropdown-menu mt-3" aria-labelledby="dLabel">
					<div class="my-3 p-3 bg-white ">
						<div class="media text-muted pt-3">
							<img src="https://enjoynet.co.jp/icon/menherakun01_stickericon_01.jpg" width=32 height=32 class="rounded-circle" />
							<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
								<div class="d-flex justify-content-between align-items-center w-100">
								<strong class="text-gray-dark">taroさんがフォローしました</strong>
								
								</div>
							</div>
						</div>
						<div class="media text-muted pt-3">
							<img src="https://livedoor.blogimg.jp/meecosme/imgs/c/d/cdaa7002.png" width=32 height=32 class="rounded-circle" />
							<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
								<div class="d-flex justify-content-between align-items-center w-100">
								<strong class="text-gray-dark">sakoさんに支援しました</strong>
								
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="mr-3">
				<button type="button" class="btn btn-info dropdown-toggle w80" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="far fa-smile-beam"></i>
				</button>
				<div class="dropdown-menu mt-3" aria-labelledby="dLabel">
					<a class="dropdown-item" href="/mypage/"><i class="fas fa-door-open"></i> マイページ</a>
					<a class="dropdown-item" href="/mypage/account/"><i class="fas fa-user-circle"></i> アカウント設定</a>
					<a class="dropdown-item" href="/mypage/creater/"><i class="fas fa-inbox"></i> クリエイターページ編集</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="/mypage/"><i class="fas fa-th-list"></i> 作品一覧</a>
					<a class="dropdown-item" href="/mypage/serial/"><i class="far fa-list-alt"></i> 連載一覧</a>
					<a class="dropdown-item" href="#"><i class="fas fa-globe-asia"></i> ダッシュボード</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="/mypage/follow/"><i class="fas fa-highlighter"></i> フォロー</a>
					<a class="dropdown-item" href="#"><i class="fas fa-shopping-cart"></i> 購入した記事</a>
					<a class="dropdown-item" href="#"><i class="far fa-thumbs-up"></i> LIKEした記事</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="fas fa-calendar-check"></i> 月額会員</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> ログアウト</a>
				</div>
			</div>
			<div class="mr-3">
			<a href="/mypage/post/" class="btn btn-primary">
			<i class="fas fa-edit"></i> 投稿</a>
			</div>
		<?php else:?>
			<a href="#" class="btn  py-3"><i class="fa fa-search"></i></a>
			<a href="/mypage/" class="btn btn-default py-3">ログイン</a>
			<a href="/signup/" class="btn btn-info py-3 rounded-0">新規登録</a>
		<?php endif; ?>
		</div>
	</div>
</div>
<div class="alert alert-success mt-3 text-center" role="alert">
2021年2月から、安心・安全な環境づくりのために、投稿や購入などの基本機能はメールアドレス認証が必要になります。<br />
認証メールを確認して、登録手続きを完了してください。<br />
<a href="">認証メールを再送する</a>
</div>
