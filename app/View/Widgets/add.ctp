<div class="widgets form">
<?php echo $this->Form->create('Widget',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Add Widget'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('text');
		echo $this->Form->input('linkurl');
		echo $this->Form->input('videoembed');
		echo $this->Form->input('WidgImg.filename', array('label'=>'Image','type'=>'file'));
		echo $this->Form->input('WidgImg.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('WidgImg.type', array('type'=>'hidden', 'value'=>'wigige'));
	?>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Widgets'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Assets'), array('controller' => 'assets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'assets', 'action' => 'add')); ?> </li>
	</ul>
</div>
