<style type="text/css" media="screen">

	#homeslider { background: #000 url('orbit/loading.gif') no-repeat center center; overflow: hidden; },  
	#homeslider img { display: none; }
</style>
<script type="text/javascript">
     $(window).load(function() {
         $('#homeslider').orbit({timer:true,bullets:true,directionalNav:false,advanceSpeed:8000});
     });
	$(document).ready(function(){
		$('#ratesubmit').click(function(){
			var url='/users/requestRates/'+$("#rateemail").val()+'/'+$("#ratecq").val();
			$.post(url, function(data) {
				$('#ratesform').fadeOut('slow',function(){
					$('#ratesthankyou').fadeIn('fast');
				})
			});
		})
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
	<br style="clear:both;">
</div>
<div style="position:relative;">
	<div class="section-copy" style="float:none;">
		<p><?php echo $section['Section']['copy']; ?></p>
	</div>
	<div class="section-other" style="position:absolute;float:none;top:0;right:32px;">
		<div id="section_news" class="allnewsmodule">
			<div id="newsheader">NEWS</div>
			<?php $i=1; ?>
			<?php foreach ($news as $post): ?>
				<div class="section-news-post">
					<!-- <h2><?php echo $i."."; $i++; ?></h2> -->
                    <div style="height: 40px; float: left; background: url(/img/Assets/<?php echo $post['BlogThumb']['filename']; ?>) no-repeat scroll 50% 50% / contain  transparent; width: 40px;padding-right:10px;" class="imgbg"></div>
					<h1>
						<a href="/news/view/<?php echo $post['News']['slug']; ?>"><?php echo $post['News']['title']; ?></a>
						<span class="newsdate">(<?php echo $post['News']['displaydate']; ?>)</span>
					</h1>
					<div style="clear:both;"></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php foreach ($team as $person): ?>
		<div class="biowrapper">
			<h2><?php echo $person['Person']['name']; ?></h2>
			<img src="/img/Assets/<?php echo $person['MugShot']['filename']; ?>" width="150"><br/>
			<h3><?php echo $person['Person']['position']; ?></h3>
			<p><?php echo $person['Person']['bio']; ?></p>
		</div>
	<?php endforeach; ?>
</div>

