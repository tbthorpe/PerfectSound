<script type="text/javascript" charset="utf-8" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"> 
    tinyMCE.init({ 
        theme : "advanced", 
        mode : "textareas", 
        convert_urls : false 
    }); 
</script>
<div class="sections form">
<?php echo $this->Form->create('News',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('copy',array('rows'=>15));
		echo $this->Form->input('displaydate');
	?>
		
		<?php
		$options = array('1' => 'Yes', '0' => 'No');
		// echo $this->Form->select('inwidget', $options, null, array('label' => "show in news widget?"));
				echo $this->Form->input('inwidget', array('options'=>$options,'label'=>'Show in News Widget?','empty'=>false));
		?>
<br/><br/>
		<?php if (isset($this->data['BlogThumb']['filename'])): ?>
			<img src="<?php echo "/img/Assets/".$this->data['BlogThumb']['filename']; ?>" width=40 /> 
		<?php endif; ?>
		<?php
		echo $this->Form->input('BlogThumb.id', array('type'=>'hidden', 'value'=>$this->data['BlogThumb']['id']));
		echo $this->Form->input('BlogThumb.filename', array('label'=>'Module Thumbnail','type'=>'file'));
		echo $this->Form->input('BlogThumb.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('BlogThumb.type', array('type'=>'hidden', 'value'=>'blogthumb'));
		 ?>
		

	<?php 
		// $num_uploads = sizeof($this->data['Images']);
		// if ($num_uploads>0):		
		// 	for ($i=0; $i<$num_uploads; ++$i){
		// 		if(isset($this->data['Images'][$i])){ ?>
		 			<!-- <div style='border:1px solid red;padding:10px;'>
		 					 				To use - put ::<?= $i; ?>:: in the copy above!<br />
		 					 				<img src="<?php echo "/img/Assets/".$this->data['Images'][$i]['filename']; ?>" width=250 />  -->
		 				<?php //echo $this->Form->input("Images.$i.filename",array('type'=>'file','label'=>'PUT A NEW PICTURE IN THIS ONES PLACE')); ?>
		 				<?php //echo $this->Form->input("Images.$i.id"); ?>
		 				<?php //echo $this->Form->hidden("Images.$i.type"); ?>
		 				<?php //echo $this->Form->hidden("Images.$i.class"); ?>
		 
		 			<!-- <div class="image-delete">Delete <input type="checkbox" name="data[todelete][<?php echo $this->data['Images'][$i]['id']; ?>]" /></div>
				// 			</div> -->
		 		<?php	//}
		// 			}
					
//endif; 

			// echo '<div id="additional"></div>';	
			// 			echo '<a id="add-images" style="color:black;cursor:pointer;">Add Image</a>';
			// 			echo '<script type="text/javascript"> 
			// 					$("#add-images").click(function(){
			// 						var children = $("#additional").children().length;
			// 						var next = 1 + children + '.$num_uploads.';
			// 						$("#additional").append(\'<div class="input file"><input type="file" name="data[Images][\' + next + \'][filename]" id="Images\' + next + \'Filename"><input type="hidden" name="data[Images][\' + next + \'][class]" value="'.$this->name.'" id="Images\' + next + \'Class"><input type="hidden" name="data[Images][\' + next + \'][type]" value="blogimg" id="Images\' + next + \'Type"></div>\');
			// 					});
			// 				 </script>';



	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Section.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Section.id'))); ?></li>
		<li><?php echo $this->Html->link(__('All Posts'), array('action' => 'loggedinindex'));?></li>
	</ul>
</div>
