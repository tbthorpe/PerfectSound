<div class="people form">
<?php echo $this->Form->create('Person', array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('position');
		echo $this->Form->input('bio',array('rows'=>15));
		echo $this->Form->input('MugShot.filename', array('label'=>'Mugshot','type'=>'file'));
		echo $this->Form->input('MugShot.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('MugShot.type', array('type'=>'hidden', 'value'=>'mugshot'));
	?>
	<?php
		$options = array('1' => 'Yes', '0' => 'No');
		echo $this->Form->input('visible', array('options'=>$options,'label'=>'Visible on the site?','empty'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index'));?></li>
	</ul>
</div>
