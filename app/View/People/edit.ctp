<script type="text/javascript" charset="utf-8" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"> 
    tinyMCE.init({ 
        theme : "advanced", 
        mode : "textareas", 
        convert_urls : false 
    }); 
</script>
<div class="people form">
<?php echo $this->Form->create('Person',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('position');
		echo $this->Form->input('bio',array('rows'=>15));
	?>
	<?php
		$options = array('1' => 'Yes', '0' => 'No');
		echo $this->Form->input('visible', array('options'=>$options,'label'=>'Visible on the site?','empty'=>false));
	?>
	<?php if (isset($this->data['MugShot']['filename'])): ?>
		<img src="<?php echo "/img/Assets/".$this->data['MugShot']['filename']; ?>" width=40 /> 
		<?php echo $this->Form->input('MugShot.id', array('type'=>'hidden', 'value'=>$this->data['MugShot']['id']));?>
	<?php endif; ?>
	<?php

	echo $this->Form->input('MugShot.filename', array('label'=>'Ugly Mug','type'=>'file'));
	echo $this->Form->input('MugShot.class', array('type'=>'hidden', 'value'=>$this->name));
	echo $this->Form->input('MugShot.type', array('type'=>'hidden', 'value'=>'mugshot'));
	 ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index'));?></li>
	</ul>
</div>
