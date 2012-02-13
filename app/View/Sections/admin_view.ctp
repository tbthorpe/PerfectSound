
<style type="text/css" media="screen">
	.sectionheader{
		width:800px;
		height:400px;
		background:url(/img/Assets/<?php echo $section['MainImage']['filename']; ?>);
		color:white;
		
	}
	.sectionname{
		height:120px;
		background:url(/img/section/namebg.png);
		overflow:hidden;
	}
	.sectionname h1{
		color:white;
		font-size:36px;
		margin:40px 0 0 20px;
		background:none;
	}
</style>
<div class="sectionheader">
	<div class="sectionname">
		<h1>ADMIN<?php echo $section['Section']['name']; ?></h1>
	</div>
</div>
<div>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($section['Section']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copy'); ?></dt>
		<dd>
			<?php echo h($section['Section']['copy']); ?>
			&nbsp;
		</dd>
	</dl>
	<?php $num_uploads = sizeof($section['Slides']);
	if ($num_uploads > 0):
		for ($i=0; $i<$num_uploads; ++$i){
			if(isset($section['Slides'][$i])){ ?>
				<div style='border:1px solid red;padding:10px;'>
					<img src="<?php echo "/img/Assets/".$section['Slides'][$i]['filename']; ?>" width=100 /> 
				</div>
	<?php	}
		}
				
		endif; ?>
</div>

