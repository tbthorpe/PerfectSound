<div class="footerlinks form">
<?php echo $this->Form->create('Footerlink');?>
	<fieldset>
		<legend><?php echo __('Edit Footerlink'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('text');
		echo $this->Form->input('url');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Footerlink.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Footerlink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Footerlinks'), array('action' => 'index'));?></li>
	</ul>
</div>
