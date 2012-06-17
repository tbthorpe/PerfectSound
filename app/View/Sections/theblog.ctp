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
         $('#homeslider').orbit({timer:true,bullets:true,directionalNav:false,advanceSpeed:8000});
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

	
</div>
<div>
	<div id="allposts">
		<?php
		foreach ($news as $post): ?>
			<div class="news-post">
				<h3><a href="/news/view/<?php echo h($post['News']['slug']); ?>"><?php echo h($post['News']['title']); ?></a></h3>	
				<p class="news-date"><?php echo date('m-d-Y',strtotime($post['News']['displaydate'])); ?></p>
				<p class="news-copy"><?php echo $this->BlogImage->imageifyPost($post['News']['copy'],$post['Images']); ?></p>
			</div>

		<?php endforeach; ?>

		<p>
		<?php
		echo $this->Paginator->counter(array(
						'format' => __('Page {:page} of {:pages}, showing {:current} posts of {:count}, starting on {:start}, ending on {:end}')
						));
		?>	</p>

		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
	
</div>