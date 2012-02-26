<style type="text/css" media="screen">
	.sectionheader{
		width:800px;
		height:400px;
		/*background:url(/img/homepage-1.jpg) no-repeat;*/
		color:white;
		position:relative;
	}
	.sectionheader #homeslider ul{margin:0;}


	#homeslider { 

	           background: #000 url('orbit/loading.gif') no-repeat center center; overflow: hidden; },  
	     #homeslider img { display: none; }

</style>
<script type="text/javascript">
     $(window).load(function() {
         $('#homeslider').orbit({timer:true,bullets:true,directionalNav:false,advanceSpeed:6000});
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
		<h1>Perfect Sound's Grand Re-Opening</h1>
		<h4>After $10.5 million in renovations, the new studio is unveiled to LA. See what's new</h4> 
	</div>

	<div id="homepage_news">
		<div id="newsheader"><a href="/perfect-sound-news">NEWS</a></div>
		<?php $i=1; ?>
		<?php foreach ($news as $post): ?>
			<div class="section-news-post">
				<?php echo $i."."; $i++; ?>
				<h1><?php echo $post['News']['title']; ?></h1>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div>
<div id="home-dotted"></div>
<div id="home-solid"></div>
	
</div>