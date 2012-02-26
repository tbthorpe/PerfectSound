<style type="text/css" media="screen">
	.sectionheader{
		width:800px;
		height:400px;
		/*background:url(/img/homepage-1.jpg) no-repeat;*/
		color:white;
		position:relative;
	}
	.sectionheader #homeslider ul{margin:0;}
	.sectionname{
		height:120px;
		background:url(/img/section/namebg.png);
		overflow:hidden;
		position:absolute;
		bottom:0px;
		width:100%;
		z-index:1000;
	}
	.sectionname h1{
		color:white;
		font-size:36px;
		margin:40px 0 0 20px;
		background:none;
	}
	#homepage_news{
		width:300px;
		border-left:1px solid rgb(85,85,85);
		border-right:1px solid rgb(85,85,85);
		position:absolute;
		bottom:0px;right:0px;
		z-index:1001;
		-moz-box-shadow: 0 0 10px 3px rgba(0,0,0,0.5);
		-webkit-box-shadow: 0 0 10px 3px rgba(0,0,0,0.5);
		box-shadow: 0 0 10px 3px rgba(0,0,0,0.5);
	}
	#homepage_news #newsheader{
		height:30px;
		color:white;
		font-weight:bold;
		font-size:20px;
		padding-left:20px;
		background:rgb(85,85,85);
	}
	#homepage_news .section-news-post{
/*		height:40px;*/
		background:#777777;
		padding-left:20px;
		border-bottom:1px solid white;
	}
	#homepage_news .section-news-post:last-child{
		border-bottom:0px;
	}
	#homepage_news .section-news-post h1{
		color:white;
		font-size:16px;
		font-weight:bold;
		margin:0;
	}
	#homeslider { 

	           background: #000 url('orbit/loading.gif') no-repeat center center; overflow: hidden; },  
	     #homeslider img { display: none; }

</style>
<script type="text/javascript">
     $(window).load(function() {
         $('#homeslider').orbit({timer:true,bullets:true,directionalNav:false});
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
		<h1>Perfect Sound Studios</h1>
		<!-- <ul class="orbit-bullets"><li class="">1</li><li class="">2</li><li class="active">3</li></ul> -->
	</div>

	<div id="homepage_news">
		<div id="newsheader">NEWS</div>
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
THIS IS WHERE STUFF MIGHT GO!
	
</div>