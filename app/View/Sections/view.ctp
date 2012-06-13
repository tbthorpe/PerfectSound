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
	<div class="section-copy">
		<!-- <h1><?php echo $section['Section']['name']; ?></h1> -->
		<p><?php echo $section['Section']['copy']; ?></p>
		<?php if ($this->here == '/the-rates'): ?>
			<div id="ratesform" style="margin:20px;">
				<form id="ratesrequestform">
				<label for="rateemail">Email:</label>
				<input type='text' name="rateemail" id="rateemail"><br/>
				<label for="rateemail">Comments/Questions:</label>
				<textarea name="ratecq" id="ratecq"></textarea>
				<input type="button" value="submit" id="ratesubmit" style="width:100px">
				</form>
			</div>
			<div id="ratesthankyou" style="display:none;margin:20px;">
				<h2>We'll be in touch</h2>
			</div>
		<?php endif; ?>
	</div>
	<div class="section-other">
		<div id="section_news" class="allnewsmodule">
			<div id="newsheader">NEWS</div>
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
	<br style="clear:both;">
</div>
<div>
</div>

