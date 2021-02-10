<div class="modal fade" id="<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php $this->load->view('modals/modalHeader'); ?>
			<div class="modal-body">
				<div>
					<b>カード番号<small>ハイフンなし</small></b>
					<input type="text" name="cardNumber" class="form-control" value="" placeholder="4111111111111111"  />
				</div>
				<div>
					<b>有効期限</b>
					<div class="row p-0 m-0">
						<div class="form-check form-check-inline">
							
							<select name="enabled_month" class="form-control">
								<?php for($i=1;$i<=12;$i++):?>
									<option value="<?=$i?>"><?=$i?>月</option>
								<?php endfor;?>
							</select>
							<input type="text" name="enabled_year" value="" class="form-control" size=4 />年 
						</div>
					</div>
				</div>
				<div>
					<b>カード名義</b>
					<input type="text" name="cardName" class="form-control" value="" placeholder="taro sato"  />
				</div>
				<div>
					<b>セキュリティコード</b>
					<input type="text" name="cardCode" class="form-control" value="" placeholder="000"  />
				</div>
			</div>
			<?php $this->load->view('modals/modalFooter'); ?>
		
		</div>
	</div>
</div>
