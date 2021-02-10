<?php $this->load->view('elements/topmenu'); ?>

<main class="w-100 mb-5">
	<div class="container-fluid"> 
		<!--=============================================================================== --> 
		
		<!-- 右上メニュー部分 -->
		<?php $this->load->view('elements/topmenu_right'); ?>
		
		<!--=============================================================================== -->
		<section class="">
			<?php $this->load->view('elements/myself'); ?>
			<?php
				//マイページ用メニュー
				$active['dashboards']="1";
				$this->load->view('elements/mypagemenu',$active); 
			?>
			
			<div class="btn-toolbar mt-3 ">
				<div class="btn-group  margin-auto" >
					<a href="" class="btn btn-outline-secondary btn-sm active">閲覧数</a>
					<a href="" class="btn btn-outline-secondary btn-sm">売上管理</a>
					<a href="" class="btn btn-outline-secondary btn-sm">振込履歴</a>
					<a href="" class="btn btn-outline-secondary btn-sm">コメント</a>
				</div>
			</div>
			
			
			<div class="row margin-auto w-100  mt-3" >
				<div class="col-6 col-md-3">
					<a href="" class="btn btn-outline-primary w-100 active">全期間</a>
				</div>
				<div class="col-6 col-md-3">
				<select class="form-control w-100" name="search-month">
					<option value="">月選択</option>
				</select>
				</div>
				<div class="col-6 col-md-3 mt-2 mt-md-0">
					<a href="" class="btn btn-outline-primary w-100">7日間</a>
				</div>
				<div class="col-6 col-md-3 mt-2 mt-md-0">
					<a href="" class="btn btn-outline-primary w-100">今日</a>
				</div>
			</div>
			<div class="text-center mt-3 mb-3">
				集計期間：2020/01/01～2020/02/02
			</div>
			
			<div  class="mx-auto mw800"  >
				<div class="col-md-12 ">
					<table  class="table table-sm " >
						<tr>
							<th></th>
							<th>閲覧数</th>
							<th>LIKE</th>
						</tr>
						<tr>
							<td>ドラゴンボール1</td>
							<td>1000</td>
							<td>400</td>
						</tr>
						<tr>
							<td>ドラゴンボール1</td>
							<td>1000</td>
							<td>400</td>
						</tr>
						<tr>
							<td>ドラゴンボール1</td>
							<td>1000</td>
							<td>400</td>
						</tr>
						<tr>
							<td>ドラゴンボール1</td>
							<td>1000</td>
							<td>400</td>
						</tr>
						<tr>
							<td>ドラゴンボール1</td>
							<td>1000</td>
							<td>400</td>
						</tr>
					</table>
				</div>
			</div>
		</section>
	</div>
	<!--/.container-fluid--> 

