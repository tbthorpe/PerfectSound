<script type="text/javascript" charset="utf-8" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript"> 
    tinyMCE.init({ 
        theme : "advanced", 
        mode : "textareas", 
        convert_urls : false 
    }); 
</script>
<div class="sections form">
<?php echo $this->Form->create('Section',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Section'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('copy',array('rows'=>15));?>
		
			<!-- <img src="<?php echo "/img/Assets/".$this->data['MainImage']['filename']; ?>" width=300 />  -->
		<?php
		// echo $this->Form->input('MainImage.filename', array('label'=>'Cover Image','type'=>'file'));
		// 		echo $this->Form->input('MainImage.class', array('type'=>'hidden', 'value'=>$this->name));
		// 		echo $this->Form->input('MainImage.type', array('type'=>'hidden', 'value'=>'mainimage'));
		// 		echo $this->Form->input('MainImage.id', array('type'=>'hidden', 'value'=>$this->data['MainImage']['id'])); ?>
		<div id="assetssortables">
		<?php $num_uploads = sizeof($this->data['MainImage']);
		if ($num_uploads > 0):
			for ($i=0; $i<$num_uploads; ++$i){
				if(isset($this->data['MainImage'][$i])){ ?>
					<div style='border:1px solid red;padding:10px;' class="sizzortable" id="w_<?php echo $this->data['MainImage'][$i]['id']; ?>">
						<img src="<?php echo "/img/Assets/".$this->data['MainImage'][$i]['filename']; ?>" width=250 /> 
						<?php echo $this->Form->input("MainImage.$i.filename",array('type'=>'file','label'=>'Want to replace this one? Use this below!')); ?>
						<?php echo $this->Form->input("MainImage.$i.id"); ?>
						<?php echo $this->Form->input("MainImage.$i.caption"); ?>
						<?php echo $this->Form->hidden("MainImage.$i.type"); ?>
						<?php echo $this->Form->hidden("MainImage.$i.class"); ?>
					<div class="image-delete">Wanna delete? Check this box! <input class="image-delete-check" type="checkbox" name="data[todelete][<?php echo $this->data['MainImage'][$i]['id']; ?>]" /></div>
					</div>
		<?php	}
			}
					
			endif; 
			echo "</div>";
			echo '<div id="additional"></div>';	
			echo '<a id="add-images">Add Image</a>';
			echo '<script type="text/javascript"> 
					$("#add-images").click(function(){
						var children = $("#additional").children().length;
						var next = 1 + children + '.$num_uploads.';
						$("#additional").append(\'<div class="input file"><input type="file" name="data[MainImage][\' + next + \'][filename]" id="MainImage\' + next + \'Filename"><input type="hidden" name="data[MainImage][\' + next + \'][class]" value="'.$this->name.'" id="MainImage\' + next + \'Class"><input type="hidden" name="data[MainImage][\' + next + \'][type]" value="mainimage" id="MainImage\' + next + \'Type"></div>\');
					});
				 </script>';



	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!-- <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Section.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Section.id'))); ?></li> -->
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index'));?></li>
	</ul>
</div>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$("#assetssortables").sortable({
			items: 'div.sizzortable',
			update: function(event, ui) {
				var result = $('#assetssortables').sortable('serialize');
				$.get('/sections/update_order?' + result);
			}
		});
		
		$('.image-delete-check').change(function(){
			if ($(this).is(':checked')){
				var r=confirm("Are you really trying to delete this picture? OK if yes.");
				if (!r){
					alert("Aight. I unchecked that box for you.");
					$(this).attr('checked',false);
				}
			}
		});
		
	});
</script>

