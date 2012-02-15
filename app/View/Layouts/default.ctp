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
		echo $scripts_for_layout;
	?>
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