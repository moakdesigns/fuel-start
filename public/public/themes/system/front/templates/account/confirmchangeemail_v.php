<article class="general-page-container">
	<h1><?php echo \Lang::get('account_confirm_change_email'); ?></h1>
	
	<?php echo \Form::open(array('action' => \Uri::main(), 'class' => 'form-horizontal', 'role' => 'form')); ?> 
		<div class="form-status-placeholder">
			<?php if (isset($form_status) && isset($form_status_message)) { ?> 
			<div class="alert alert-<?php echo str_replace('error', 'danger', $form_status); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $form_status_message; ?></div>
			<?php } ?> 
		</div>
		<?php echo \Extension\NoCsrf::generate(); ?> 
	
		<?php if (!isset($hide_form) || (isset($hide_form) && $hide_form === false)) { ?> 
		<div class="form-group">
			<label for="account_confirm_code" class="col-sm-2 control-label"><?php echo __('account_confirm_code'); ?>: <span class="txt_require">*</span></label>
			<div class="col-sm-10">
				<?php echo \Form::input('confirm_code', $confirm_code, array('id' => 'account_confirm_code', 'maxlength' => '255', 'class' => 'form-control', 'autocomplete' => 'off')); ?> 
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary"><?php echo __('account_submit'); ?></button>
			</div>
		</div>
		<?php } // endif; ?> 
	<?php echo \Form::close(); ?> 
</article>