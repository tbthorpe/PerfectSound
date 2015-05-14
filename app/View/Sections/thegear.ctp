<style type="text/css" media="screen">
	.sectionheader{
		width:800px;
		height:400px;
		overflow:hidden;
		/*background:url(/img/homepage-1.jpg) no-repeat;*/
		color:white;
		position:relative;
	}
	.sectionheader #homeslider ul{margin:0;}


	#homeslider { 

	           background: #000 url('orbit/loading.gif') no-repeat center center; overflow: hidden;},  
	     #homeslider img { display: none; }

</style>
<script type="text/javascript">
     $(window).load(function() {
         $('#homeslider').orbit({timer:true,bullets:true,directionalNav:true,advanceSpeed:8000});
     });
</script>
<div class="sectionheader">
	<div id="homesliderbg"></div>
	<div id="homeslider" style="height:400px;width:800px;margin:0;padding:0;">
		<?php foreach($section['MainImage'] as $img): ?>
			<img src="/img/Assets/<?php echo $img['filename']; ?>">
		<?php endforeach; ?>
	</div>

	<div class="sectionname homepage">
		<h1><?php echo $section['Section']['name']; ?></h1>
		<?php foreach($section['MainImage'] as $img): ?>
			<h4 class="orbit-caption" id="cap<?php echo $img['id']; ?>"><?php echo $img['caption']; ?></h4>
		<?php endforeach; ?>
	</div>

	
</div>
<div id="section-content">
	<div class="section-copy" style="width:475px;">
		<!-- <h1><?php echo $section['Section']['name']; ?></h1> -->
		<p><?php echo $section['Section']['copy']; ?></p>
	</div>
	<div class="section-other" style="width:300px">
		<div id="section_news" class="allnewsmodule" style="margin-left:0px;">
			<div id="newsheader">NEWS</div>
			<?php $i=1; ?>
			<?php foreach ($news as $post): ?>
				<div class="section-news-post">
					<!-- <h2><?php echo $i."."; $i++; ?></h2> -->
                    <div style="height: 40px; float: left; background: url(/img/Assets/<?php echo $post['BlogThumb']['filename']; ?>) no-repeat scroll 50% 50% / contain  transparent; width: 40px;padding-right:6px;" class="imgbg"></div>
					<h1>
						<a href="/news/view/<?php echo $post['News']['slug']; ?>"><?php echo $post['News']['title']; ?></a>
						<span class="newsdate">(<?php echo $post['News']['displaydate']; ?>)</span>	
					</h1>
					<div style="clear:both;"></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<br style="clear:both;">
</div>
<div>
</div>
