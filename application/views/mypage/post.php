<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->
		<section class="m-5">
		<form action="/mypage/conf/" method="post" enctype="multipart/form-data" >
			<div class="row">
				<select name="" class="form-control">
					<option value="">連載を選択</option>
				</select>

				<div id="upFileWrap" class="w-100 mt-3">
					<div id="inputFile">
						<!-- ドラッグ&ドロップエリア -->
						<p id="dropArea">ここにファイルをドロップしてください<br>または</p>

						<!-- 通常のinput[type=file] -->
						<div id="inputFileWrap">
							<input type="file" name="uploadFile" id="uploadFile">
							<div id="btnInputFile"><span>ファイルを選択する</span></div>
							<div id="btnChangeFile"><span>ファイルを変更する</span></div>
						</div>
					</div>
				</div>
				<div class="col-12 mt-3">
					<label for="title">タイトル</label>
					<input type="text" name="title" id="title" value="" class="form-control" placeholder="タイトルを入力してください" />
				</div>
				<div class="col-12 mt-3">
					<label for="caption">キャプション</label>
					<input type="text" name="caption" id="caption" value="" class="form-control" placeholder="見出しを入力してください" />
				</div>
				<div class="col-12 mt-3">
					<div class="border p-3">
						<button class="btn btn-outline-secondary">#aaa</button>
						<button class="btn btn-outline-secondary">#bbb</button>
						<button class="btn btn-outline-danger"><i class="fas fa-plus"></i>タグの追加</button>
					</div>
				</div>
				<div class="col-12 mt-3">
					<label>年齢制限</label>
					<select name="age" class="form-control">
						<option value="">R-18</option>
					</select>
				</div>
				<div class="col-12 mt-3">
					<label>リード文</label>
					<textarea class="form-control" placeholder="紹介文を入力してください" name="lead" rows="3"></textarea>
				</div>
				

				<div class="col-12 mt-3">
					<input type="submit" name="pass" value="投稿する" class="btn btn-primary w-100" />
				</div>
			</div>
		</form>
		</section>
	</div>
	<!--/.container-fluid--> 

