
<div class="widgets form">
<?php echo $this->Form->create('Widget',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Widget'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('text');
		echo $this->Form->input('linkurl');
		echo $this->Form->input('videoembed');
		
	?>
	<?php if (isset($this->data['WidgImg']['filename'])): ?>
		<img src="<?php echo "/img/Assets/".$this->data['WidgImg']['filename']; ?>" width=300 /> 
		<?php echo $this->Form->input('WidgImg.id', array('type'=>'hidden', 'value'=>$this->data['WidgImg']['id']));?>
	<?php endif; ?>
	<?php
	echo $this->Form->input('WidgImg.filename', array('label'=>'Cover Image','type'=>'file'));
	echo $this->Form->input('WidgImg.class', array('type'=>'hidden', 'value'=>$this->name));
	echo $this->Form->input('WidgImg.type', array('type'=>'hidden', 'value'=>'wigige'));
	echo $this->Form->input('WidgImg.id', array('type'=>'hidden', 'value'=>$this->data['WidgImg']['id']));
	?>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Widget.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Widget.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Widgets'), array('action' => 'index'));?></li>
	</ul>
</div>
