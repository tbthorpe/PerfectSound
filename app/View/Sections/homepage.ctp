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
         var t=setTimeout(function(){
				var h = $('#homepage_news').height();
                var p = h - 31;
				$('#homepage_news').animate({"bottom": "-"+p+"px"}, "slow"); },2000);
                //$('#homepage_news').animate({"bottom": "0px"}, "slow"); },2000);
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
		<?php foreach($section['MainImage'] as $img): ?>
			<div class="orbit-caption" id="cap<?php echo $img['id']; ?>">
				<h1><?php echo $img['headline']; ?></h1>
				<h4><?php echo $img['caption']; ?></h4>
			</div>
		<?php endforeach; ?>
		
	</div>

	<div id="homepage_news" class="allnewsmodule">
		<div id="newsheader"><a href="/perfect-sound-news">NEWS</a><img id="minimizearrow" style="float:right;margin-top:6px;" src="/img/uparrow.png"></div>
		<?php $i=1; ?>
		<?php foreach ($news as $post): ?>
			<div class="section-news-post">
				<!-- <h2><?php echo $i."."; $i++; ?></h2> -->
                <div style="height: 40px; float: left; background: url(/img/Assets/<?php echo $post['BlogThumb']['filename']; ?>) no-repeat scroll 50% 50% / contain  transparent; width: 40px;padding-right:6px;" class="imgbg"></div>
				<h1 class="smaller">
					<a href="/news/view/<?php echo $post['News']['slug']; ?>"><?php echo $post['News']['title']; ?></a>
					<span class="newsdate">(<?php echo $post['News']['displaydate']; ?>)</span>
				</h1>
				<div style="clear:both;"></div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div>
<!-- <div id="home-dotted"></div>
<div id="home-solid"></div> -->
	
</div>
