<div class="sections form">
<?php echo $this->Form->create('Section',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Add Section'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('copy');
		// echo $this->Form->input('mainimage',array('type'=>'file'));
		echo $this->Form->input('MainImage.filename', array('label'=>'Image','type'=>'file'));
		echo $this->Form->input('MainImage.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('MainImage.type', array('type'=>'hidden', 'value'=>'mainimage'));
	?>
	<div id='add-photo-input'>
	<?php
	echo $this->Form->input('Slides.0.filename', array('label'=>'Image','type'=>'file'));
	echo $this->Form->input('Slides.0.class', array('type'=>'hidden', 'value'=>$this->name));
	echo $this->Form->input('Slides.0.type', array('type'=>'hidden', 'value'=>'slideshow'));
	echo '<div id="additional"></div>';	
	echo '<a id="add-images">Add Image</a>';
	echo '<script type="text/javascript"> 
			$("#add-images").click(function(){
				var children = $("#additional").children().length;
				var next = 1 + children;
				$("#additional").append(\'<div class="input file"><input type="file" name="data[Slides][\' + next + \'][filename]" id="Slides\' + next + \'Filename"><input type="hidden" name="data[Slides][\' + next + \'][class]" value="'.$this->name.'" id="Slides\' + next + \'Class"><input type="hidden" name="data[Slides][\' + next + \'][type]" value="slideshow" id="Slides\' + next + \'Type"></div>\');
			});
		 </script>';
	?>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index'));?></li>
	</ul>
</div>
