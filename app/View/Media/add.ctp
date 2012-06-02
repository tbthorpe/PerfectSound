<div class="media form">
<?php echo $this->Form->create('Media',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Add Media'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('filename',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Media'), array('action' => 'index'));?></li>
	</ul>
</div>
