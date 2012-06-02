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
         $('#homeslider').orbit({timer:true,bullets:true,directionalNav:false,advanceSpeed:8000});
     });
</script>
<div class="sectionheader">
	<div id="homesliderbg"></div>
	<div id="homeslider" style="height:400px;width:800px;margin:0;padding:0;">
		<?php foreach($section['MainImage'] as $img): ?>
			<img src="/img/Assets/<?php echo $img['filename']; ?>" <?php echo (1) ? "data-caption='#cap".$img['id']."'":''?>> <!-- end image tag -->
		<?php endforeach; ?>
	</div>

	<div class="sectionname homepage">
		<h1>Perfect Sound's Grand Re-Opening</h1>
		<?php foreach($section['MainImage'] as $img): ?>
			<h4 class="orbit-caption" id="cap<?php echo $img['id']; ?>"><?php echo $img['caption']; ?></h4>
		<?php endforeach; ?>
		
	</div>

	<div id="homepage_news" class="allnewsmodule">
		<div id="newsheader"><a href="/perfect-sound-news">NEWS</a><span id="minimizearrow" style="float:right;">&uarr;</span></div>
		<?php $i=1; ?>
		<?php foreach ($news as $post): ?>
			<div class="section-news-post">
				<!-- <h2><?php echo $i."."; $i++; ?></h2> -->
				<img class="newsthumb" src="/img/Assets/<?php echo $post['BlogThumb']['filename']; ?>">
				<h1><a href="/news/view/<?php echo $post['News']['slug']; ?>"><?php echo $post['News']['title']; ?></a></h1>
				<div style="clear:both;"></div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div>
<!-- <div id="home-dotted"></div>
<div id="home-solid"></div> -->
	
</div>