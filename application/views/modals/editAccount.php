<div class="modal fade" id="<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php $this->load->view('modals/modalHeader'); ?>
			<div class="modal-body">
				<b><?=$title?></b>
				<input type="text" name="email" class="form-control" value="" />
			</div>
			<?php $this->load->view('modals/modalFooter'); ?>
		
		</div>
	</div>
</div>
