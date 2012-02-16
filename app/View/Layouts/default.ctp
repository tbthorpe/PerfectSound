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
		echo $this->Html->script('jquery.bxSlider.min');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jcarousel');
		echo $this->Html->script('jc2');
		echo $this->Html->script('lemmon-slider');
		echo $this->Html->script('jquery.orbit-1.2.3.min');
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
	})
	</script>
</head>
<body>
	<div id="container">
		<div id="header">

			<div id="headernav">
				<ul>
					<li><a href="/perfect-sound-blog">The Blog</a></li>
					<li><a href="/the-gear">The Gear</a></li>
					<li><a href="/the-rates">The Rates</a></li>
					<li><a href="/the-experience ">The Experience</a></li>
					<li><a href="/the-team">The Team</a></li>
					<li><a href="/the-studio">The Studio</a></li>
					<li><a href="/the-house">The House</a></li>
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
		
			<div id="slider1" class="slider">
			        <div style="color:black;width:200px;height:80px;">This is something</div>
					<div style="color:black;width:200px;height:80px;">This is something else</div>
					<div style="color:black;width:200px;height:80px;">This is also something</div>
					<div style="width:200px;color:black;height:80px;">So Many things</div>
					<div style="width:200px;height:80px;color:black;">It's getting a little crazy</div>
					<div style="color:black;width:200px;height:80px;">Someone call the cookie cake patrol</div>
					<div style="width:200px;color:black;height:80px;">Two tubs of frosting!</div>
					<div style="width:200px;height:80px;color:black;">Plasitc penguin mask!</div>
					<div style="color:black;width:200px;height:80px;">One art! JUST ONE.</div>
					<div style="width:200px;color:black;height:80px;">We need something to make us slide</div>
					<div style="width:200px;height:80px;color:black;">Butter is best!</div>
					<div style="width:200px;color:black;height:80px;">Dynamite is free!</div>
					<div style="width:200px;height:80px;color:black;">Listen and learn.</div>
			</div>
			<div class="controls">
			    <a href="#" class="prev">Prev Page</a> |
			    <a href="#" class="next">Next Page</a>
			</div>
		
		<div id="sociallinks">
			
		</div>
		<div id="meettheteam">
			
		</div>
		<div style="clear:both;"></div>
	</div>
	<div id="footer">
		<div id="footercontainer">
			<div id="footernav">
				<ul>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Equipment</a></li>
					<li><a href="#">Engineers</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Luxury Housing Rental</a></li>
					<li><a href="#">Rates</a></li>
					<br style="clear:both;">
				</ul>
				<p class="copyright">&copy; <?= date('Y'); ?> Perfect Sound Studios</p>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>