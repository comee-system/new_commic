<div class="modal fade" id="<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php $this->load->view('modals/modalHeader'); ?>
			<div class="modal-body">
				
				<div>
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<label class="btn btn-secondary active">
							<input type="radio" name="pay_company" id="company1" autocomplete="off" value="1" checked>法人
						</label>
						<label class="btn btn-secondary">
							<input type="radio" name="pay_company" id="company2" autocomplete="off" value=2 >個人
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>姓</b>
						<input type="text" name="pay_sei" value="" class="form-control" />
					</div>
					<div class="col-md-6">
						<b>名</b>
						<input type="text" name="pay_mei" value="" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>せい</b>
						<input type="text" name="pay_kana_sei" value="" class="form-control" />
					</div>
					<div class="col-md-6">
						<b>めい</b>
						<input type="text" name="pay_kana_mei" value="" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<b>郵便番号</b>
						<input type="text" name="postcode" value="" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<b>住所</b>
						<input type="text" name="address" value="" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<b>電話番号</b>
						<input type="text" name="tel" value="" class="form-control" />
					</div>
				</div>
				
				<div class="row mt-5">
					<div class="col-md-12">
						<b>銀行名</b>
						<input type="text" name="bankname" value="" class="form-control" />
					</div>
				</div>
				<div class="row ">
					<div class="col-md-12">
						<b>支店名</b>
						<input type="text" name="shopname" value="" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<b>口座種別</b>
						<div class="row p-0 m-0">
							<div class="form-check form-check-inline">
								<input class="form-check-input " type="radio" name="account_type" id="account_type1" value="1">
								<label class="form-check-label" for="account_type1">普通預金</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="account_type" id="account_type2" value="2">
								<label class="form-check-label" for="account_type2">当座預金</label>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<b>口座番号</b>
						<input type="text" name="accountNumber" value="" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<b>口座名義(カナ)</b>
						<input type="text" name="accountNameKana" value="" placeholder="サトウタロウ" class="form-control" />
						<small>個人の場合は、性と名の間に1文字分の全角スペースを入力してください。</small>
					</div>
				</div>

			</div>
			<?php $this->load->view('modals/modalFooter'); ?>
		
		</div>
	</div>
</div>
