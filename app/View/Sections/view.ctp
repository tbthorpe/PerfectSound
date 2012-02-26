
<style type="text/css" media="screen">
	.sectionheader{
		width:800px;
		height:400px;
		background:url(/img/Assets/<?php echo $section['MainImage'][0]['filename']; ?>);
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
		width:300px;
		border:1px solid white;
		/*position:absolute;
				bottom:0px;right:0px;*/
		background:red;
		margin-top:50px;
		float:right;
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
	.section-copy{
		float:left;
		width:390px;
		margin-right:20px;
		color:rgb(193,187,187);
	}
	.section-copy h1{
		margin:50px 30px 0 50px;
		font-weight:bold;
		color:rgb(193,187,187);
		font-size:28px;
	}
	.section-copy p{
		margin:50px 0 0 50px;
	}
	.section-other{
		float:left;
		width:390px;
	}
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
		<h1><?php echo $section['Section']['name']; ?></h1>
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
	
	<!-- <?php $num_uploads = sizeof($section['Slides']);
	if ($num_uploads > 0):
		for ($i=0; $i<$num_uploads; ++$i){
			if(isset($section['Slides'][$i])){ ?>
				<div style='border:1px solid red;padding:10px;'>
					<img src="<?php echo "/img/Assets/".$section['Slides'][$i]['filename']; ?>" width=100 /> 
				</div>
	<?php	}
		}
				
		endif; ?> -->
</div>

