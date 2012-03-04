<script type="text/javascript" charset="utf-8" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"> 
    tinyMCE.init({ 
        theme : "advanced", 
        mode : "textareas", 
        convert_urls : false 
    }); 
</script>
<div class="news form">
<?php echo $this->Form->create('News',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('copy');
		echo $this->Form->input('BlogThumb.filename', array('label'=>'Thumbnail (mainly for news module should be 40x40)','type'=>'file'));
		echo $this->Form->input('BlogThumb.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('BlogThumb.type', array('type'=>'hidden', 'value'=>'blogthumb'));
	?>
	<div id='add-photo-input'>
	<?php
	// echo $this->Form->input('Images.0.filename', array('label'=>'Image','type'=>'file'));
	// echo $this->Form->input('Images.0.class', array('type'=>'hidden', 'value'=>$this->name));
	// echo $this->Form->input('Images.0.type', array('type'=>'hidden', 'value'=>'blogimg'));
	echo '<div id="additional"></div>';	
	echo '<a id="add-images" style="color:black;cursor:pointer;">Add Image</a>';
	echo '<script type="text/javascript"> 
			$("#add-images").click(function(){
				var children = $("#additional").children().length;
				var next = children;
				$("#additional").append(\'<div class="input file"><input type="file" name="data[Images][\' + next + \'][filename]" id="Images\' + next + \'Filename"><input type="hidden" name="data[Images][\' + next + \'][class]" value="'.$this->name.'" id="Images\' + next + \'Class"><input type="hidden" name="data[Images][\' + next + \'][type]" value="blogimg" id="Images\' + next + \'Type"></div>\');
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

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index'));?></li>
	</ul>
</div>
