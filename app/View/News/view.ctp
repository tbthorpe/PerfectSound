<div class="sectionheader">
	<div class="sectionname">
		<h1><?php echo $news['News']['title']; ?></h1>
	</div>
</div>
<div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($news['News']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($news['News']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copy'); ?></dt>
		<dd>
			<?php echo $this->BlogImage->imageifyPost($news['News']['copy'],$news['Images']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div id="blogimages">
	<?php
	
		if (!empty($news['Images'])):?>		
			<?php $num_uploads = sizeof($news['Images']);
				for ($i=0; $i<$num_uploads; ++$i){
					if(isset($news['Images'][$i])){ ?>
						<div style='border:1px solid red;padding:10px;'>
							<img src="<?php echo "/img/Assets/".$news['Images'][$i]['filename']; ?>" width=250 /> 
						</div>
			<?php	}
				}
		endif;
	
	?>
</div>

