<div id="allposts">
	<h2><?php echo __('What\'s going on at Perfect Sound');?></h2>
	<?php
	foreach ($news as $post): ?>
		<div class="news-post">
			<h3><?php echo h($post['News']['title']); ?></h3>	
			<p class="news-date"><?php echo date('m-d-Y',strtotime($post['News']['created'])); ?></p>
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
