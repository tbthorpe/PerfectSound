<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Perfect Sound Studios - ".$title_for_layout; ?>
	</title>
	<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('jcarousel');
		echo $this->Html->css('orbit-1.2.3');
		echo $this->Html->css('jquery.fancybox-1.3.4');
		echo $this->Html->script('jquery.bxSlider.min');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jcarousel');
		echo $this->Html->script('jc2');
		echo $this->Html->script('lemmon-slider');
		echo $this->Html->script('jquery.orbit-1.2.3.min');
		echo $this->Html->script('jquery.fancybox-1.3.4');
		echo $scripts_for_layout;
	?>
	<style>
	.slider    { overflow:hidden; position:relative; }
	.slider ul { margin:0; padding:0; }
	.slider li { float:left; margin:0 5px 0 0; list-style:none; color:#444444;}
	/* IE6 issues */
	.slider ul { width:100%; }

	</style>
	<script type="text/javascript">
	     // $(window).load(function() {
	     // 	         $( '#slider1' ).lemmonSlider();
	     // 	     });
	$(document).ready(function(){
		$('#slider1').bxSlider({
		    displaySlideQty: 4,
		    moveSlideQty: 4
		  });
		
		$('.widgetvideo').click(function() {
			$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'none',
					'transitionOut'	: 'none',
					'title'			: this.title,
					'width'		: 680,
					'height'		: 495,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
					   	 'wmode'		: 'transparent',
						'allowfullscreen'	: 'true'
					}
				});

			return false;
		});
		$('#homepage_news #newsheader').toggle(
			function(){
				$('#homepage_news').animate({"height": "196px"}, "slow");
				$('#minimizearrow').html('&darr;');
			},
			function(){
				$('#homepage_news').animate({"height": "31px"}, "slow");
				$('#minimizearrow').html('&uarr;');
			});
		
			$(".widgimg").fancybox({
				'showCloseButton'	: false,
				'titlePosition' 		: 'inside',
				'titleFormat'		: formatTitle
			});
			
		$('.bx-prev').hover(function(){$(this).css('background-image','url(/img/ps_arrow_left-on.png)')},
							function(){$(this).css('background-image','url(/img/ps_arrow_left.png)')});
		$('.bx-next').hover(function(){$(this).css('background-image','url(/img/ps_arrow_right-on.png)')},
							function(){$(this).css('background-image','url(/img/ps_arrow_right.png)')});
		
	});
	function formatTitle(title, currentArray, currentIndex, currentOpts) {
	    return '<div class="widget-fb-title"><span><a href="javascript:;" onclick="$.fancybox.close();"><img src="/img/fancybox/closelabel.gif" /></a></span>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + '</div>';
	}
	</script>
	<script type="text/javascript" src="http://use.typekit.com/dpi1gos.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<div id="wrapper" style="overflow:hidden;">
		
	
		<div id="container">
			<div id="header">
				<a href="/" id="logolink"></a>
				<div id="headernav">
					<ul>
						<li><a href="/the-news">The News</a></li>
						<li><a href="/the-gear">The Gear</a></li>
						<li><a href="/the-rates">The Rates</a></li>
						<li><a href="/the-experience ">The Experience</a></li>
						<li><a href="/the-team">The Team</a></li>
						<li><a href="/the-house">The House</a></li>
						<li><a href="/the-studio">The Studio</a></li>
						<br style="clear:both;">
					</ul>
				</div>
			</div>
			<div id="content">

				<?php echo $this->Session->flash(); ?>

				<?php echo $content_for_layout; ?>

			</div>
		
		</div>
		<div id="abovefooter">
			<div id="abovehead"></div>
			<div id="slider1" class="slider" style="float:left;">
				<?php foreach($widgets as $widget): ?>
					<div class='footerwidget'>
						<?php if (empty($widget['Widget']['videoembed'])): ?>
							<?php if (empty($widget['WidgImg']['filename'])): ?>
								<h4><?php echo $widget['Widget']['title']?></h4>
								<p class="widget-text"><?php echo $widget['Widget']['text']?></p>
								<p><a class="learnmore" href="<?= $widget['Widget']['linkurl']?>">learn more&rarr;</a></p>
							<?php else: ?>
								<a target="_blank" href="<?php echo $widget['Widget']['linkurl']?>"><h4 class="imagetitle"><?php echo $widget['Widget']['title']?></h4></a>
								<div class="imagecontainer" <?php echo (empty($widget['Widget']['title'])) ? "style='height:90px;'" : ""; ?>>
									<a href="/img/Assets/<?php echo $widget['WidgImg']['filename']; ?>" class="widgimg" title="<?php echo htmlspecialchars($widget['Widget']['text']); ?>"><img src="/img/Assets/<?php echo $widget['WidgImg']['filename']; ?>" height="100%"></a>
								</div>
							<?php endif; ?>
						<?php else: ?>
							<div class="vidcontainer">
								<a href="http://www.youtube.com/watch?v=<?php echo $widget['Widget']['videoembed'] ?>" class='widgetvideo'><img src="http://img.youtube.com/vi/<?php echo $widget['Widget']['videoembed'] ?>/2.jpg">
								<img src="/img/playbutton.png" style="cursor:pointer;position: absolute;top: 17px;left: 36px;"></a>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div id="footer">
			<div id="footercontainer">
				<div id="footernav">
					<ul>
						<?php foreach ($footerlinks as $link): ?>
							<li><a href="<?php echo $link['Footerlink']['url']; ?>"><?php echo $link['Footerlink']['text']; ?></a></li>
						<?php endforeach; ?>
						<br style="clear:both;">
					</ul>
					<p class="copyright">&copy; <?= date('Y'); ?> Perfect Sound Studios</p>
				</div>
				<div id="socialicons">
					<a href="#" target="_blank"><img src="/img/twittericon.png"></a>
					<a href="https://www.facebook.com/pages/Perfect-Sound-Studios/190871317666366"><img src="/img/facebookicon.png"></a>
				</div>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>