<div class="modal fade" id="<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php $this->load->view('modals/modalHeader'); ?>
			<div class="modal-body">
				<b><?=$title?></b>
				<div class="row m-0 p-0">

					<div class="form-check form-check-inline">
						
						<input type="text" name="year" value="<?=$y?>" class="form-control" />年 
						<select name="month" class="form-control">
							<?php for($i=1;$i<=12;$i++):
								$sel = "";
								if($i == (int)$m) $sel = "SELECTED";
								?>
								<option value="<?=$i?>" <?=$sel?> ><?=$i?>月</option>
							<?php endfor;?>
						</select>
						<select name="day" class="form-control">
							<?php for($i=1;$i<=31;$i++):
									$sel = "";
									if($i == (int)$d) $sel = "SELECTED";
							?>
								<option value="<?=$i?>" <?=$sel?> ><?=$i?>月</option>
							<?php endfor;?>
						</select>
					</div>
				</div>
			</div>
			<?php $this->load->view('modals/modalFooter'); ?>
		
		</div>
	</div>
</div>
