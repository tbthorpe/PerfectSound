
<div class="sections form">
<?php echo $this->Form->create('Section',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Section'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('copy');?>
		
			<img src="<?php echo "/img/Assets/".$this->data['MainImage']['filename']; ?>" width=300 /> 
		<?php
		echo $this->Form->input('MainImage.filename', array('label'=>'Cover Image','type'=>'file'));
		echo $this->Form->input('MainImage.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('MainImage.type', array('type'=>'hidden', 'value'=>'mainimage'));
		echo $this->Form->input('MainImage.id', array('type'=>'hidden', 'value'=>$this->data['MainImage']['id'])); ?>

		<?php $num_uploads = sizeof($this->data['Slides']);
		if ($num_uploads > 0):
			for ($i=0; $i<$num_uploads; ++$i){
				if(isset($this->data['Slides'][$i])){ ?>
					<div style='border:1px solid red;padding:10px;'>
						Type: <?php echo $this->data['Slides'][$i]['type']; ?><br />
						<img src="<?php echo "/img/Assets/".$this->data['Slides'][$i]['filename']; ?>" width=250 /> 
						<?php echo $this->Form->input("Slides.$i.filename",array('type'=>'file','label'=>'PUT A NEW PICTURE IN THIS ONES PLACE')); ?>
						<?php echo $this->Form->input("Slides.$i.id"); ?>
						<?php echo $this->Form->hidden("Slides.$i.type"); ?>
						<?php echo $this->Form->hidden("Slides.$i.class"); ?>
					<div class="image-delete">Delete <input type="checkbox" name="data[todelete][<?php echo $this->data['Slides'][$i]['id']; ?>]" /></div>
					</div>
		<?php	}
			}
					
			endif; 

			echo '<div id="additional"></div>';	
			echo '<a id="add-images">Add Image</a>';
			echo '<script type="text/javascript"> 
					$("#add-images").click(function(){
						var children = $("#additional").children().length;
						var next = 1 + children + '.$num_uploads.';
						$("#additional").append(\'<div class="input file"><input type="file" name="data[Slides][\' + next + \'][filename]" id="Slides\' + next + \'Filename"><input type="hidden" name="data[Slides][\' + next + \'][class]" value="'.$this->name.'" id="Slides\' + next + \'Class"><input type="hidden" name="data[Slides][\' + next + \'][type]" value="slideshow" id="Slides\' + next + \'Type"></div>\');
					});
				 </script>';



	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Section.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Section.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index'));?></li>
	</ul>
</div>
