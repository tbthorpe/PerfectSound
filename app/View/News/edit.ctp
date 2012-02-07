<div class="sections form">
<?php echo $this->Form->create('News',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('copy');?>
		

	<?php	if (!empty($this->data['Images'])):?>		

				<?php $num_uploads = sizeof($this->data['Images']);
					
					for ($i=0; $i<$num_uploads; ++$i){
						if(isset($this->data['Images'][$i])){ ?>
							<div style='border:1px solid red;padding:10px;'>
								Type: <?php echo $this->data['Images'][$i]['type']; ?><br />
								<img src="<?php echo "/img/Assets/".$this->data['Images'][$i]['filename']; ?>" width=250 /> 
								<?php echo $this->Form->input("Images.$i.filename",array('type'=>'file','label'=>'PUT A NEW PICTURE IN THIS ONES PLACE')); ?>
								<?php echo $this->Form->input("Images.$i.id"); ?>
								<?php echo $this->Form->hidden("Images.$i.type"); ?>
								<?php echo $this->Form->hidden("Images.$i.class"); ?>

							<div class="image-delete">Delete <input type="checkbox" name="data[todelete][<?php echo $this->data['Images'][$i]['id']; ?>]" /></div>
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
						$("#additional").append(\'<div class="input file"><input type="file" name="data[Images][\' + next + \'][filename]" id="Images\' + next + \'Filename"><input type="hidden" name="data[Images][\' + next + \'][class]" value="'.$this->name.'" id="Images\' + next + \'Class"><input type="hidden" name="data[Images][\' + next + \'][type]" value="blogimg" id="Images\' + next + \'Type"></div>\');
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
