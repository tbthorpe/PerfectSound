<div class="footerlinks form">
<?php echo $this->Form->create('Footerlink');?>
	<fieldset>
		<legend><?php echo __('Add Footerlink'); ?></legend>
	<?php
		echo $this->Form->input('text');
		echo $this->Form->input('url');
	?>
	<?php
		$options = array('1' => 'Yes', '0' => 'No');
		echo $this->Form->input('visible', array('options'=>$options,'label'=>'Show in footer?','empty'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Footerlinks'), array('action' => 'index'));?></li>
	</ul>
</div>
