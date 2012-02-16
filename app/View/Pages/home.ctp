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
	#section_news{
		height:130px;width:300px;
		border:1px solid white;
		position:absolute;
		bottom:0px;right:0px;
		background:red;
		z-index:1001;
	}
	#section_news #newsheader{
		height:30px;
		color:white;
		font-weight:bold;
		font-size:20px;
		background:rgb(85,85,85);
	}
	#section_news .section-news-post{
		height:40px;
		background:#777777;
		padding-left:20px;
		border-bottom:1px solid white;
	}
	#section_news .section-news-post h1{
		color:white;
		font-size:16px;
		font-weight:bold;
	}
	#homeslider { 

	           background: #000 url('orbit/loading.gif') no-repeat center center; overflow: hidden; },  
	     #homeslider img { display: none; }
</style>
<script type="text/javascript">
     $(window).load(function() {
         $('#homeslider').orbit({timer:false});
     });
</script>
<div class="sectionheader">
	<div id="homeslider" style="height:400px;width:800px;margin:0;padding:0;">
		<img src="/img/homepage-1.jpg">
		<img src="/img/homepage-2.jpg">
		<img src="/img/homepage-3.jpg">
	</div>

	<div class="sectionname">
		<h1>Perfect Sound Studios</h1>
	</div>

		<div id="section_news">
			<div id="newsheader">NEWS</div>
			<?php foreach ($news as $post): ?>
				<div class="section-news-post">
					<h1><?php echo $post['News']['title']; ?></h1>
				</div>
			<?php endforeach; ?>
		</div>
</div>
<div>
THIS IS WHERE STUFF MIGHT GO!
	
</div>