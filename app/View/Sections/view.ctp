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
		<h1><?php echo $section['Section']['name']; ?></h1>
	</div>
</div>
<div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['id']); ?>
			&nbsp;
		</dd>
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
</div>

