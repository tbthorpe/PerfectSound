
<style type="text/css" media="screen">

	#homeslider { background: #000 url('orbit/loading.gif') no-repeat center center; overflow: hidden; },  
	#homeslider img { display: none; }
</style>
<script type="text/javascript">
     $(window).load(function() {
         $('#homeslider').orbit({timer:false,bullets:true,directionalNav:false});
     });
</script>
<div class="sectionheader">
	<div id="homesliderbg"></div>
	<div id="homeslider" style="height:400px;width:800px;margin:0;padding:0;">
		<?php foreach($section['MainImage'] as $img): ?>
			<img src="/img/Assets/<?php echo $img['filename']; ?>">
		<?php endforeach; ?>
	</div>
	<div class="sectionname">
		<h1><?php echo $section['Section']['name']; ?></h1>
	</div>
	
</div>
<div id="section-content">
	<div class="section-copy">
		<!-- <h1><?php echo $section['Section']['name']; ?></h1> -->
		<p><?php echo $section['Section']['copy']; ?></p>
	</div>
	<div class="section-other">
		<div id="section_news">
			<div id="newsheader">NEWS</div>
			<?php foreach ($news as $post): ?>
				<div class="section-news-post">
					<h1><?php echo $post['News']['title']; ?></h1>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<br style="clear:both;">
</div>
<div>
</div>

