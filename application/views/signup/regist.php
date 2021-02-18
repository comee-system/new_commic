<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		<!--=============================================================================== -->
		<section class="">
			<div class="alert alert-primary text-center" role="alert">
				メールを送信しました
			</div>
			<div class="text-center">
			<div class="h3">仮登録ありがとうございます。</div>
			<div class="h4 text-danger">まだ会員登録手続きは完了しておりません。</div>
			<p>
				COMEEより確認のメールをお送りしますので、内容をご確認の上手続きを進めてください。
				<br />
				登録を中止される方は確認メールは破棄してください。
			</p>
			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

