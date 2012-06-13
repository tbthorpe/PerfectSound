<div class="blogtitle">
	<h1><?php echo $news['News']['title']; ?></h1>
	<p class="news-date"><?php echo date('m-d-Y',strtotime($news['News']['displaydate'])); ?></p>
	<div style="clear:both"></div>
</div>
<div class="blogcopy">
	<div class="section-other" style="float:right;">
		<div id="section_news">
			<div id="newsheader">NEWS</div>
			<?php $i=1; ?>
			<?php foreach ($headlines as $post): ?>
				<div class="section-news-post">
					<h2><?php echo $i."."; $i++; ?></h2>
					<img class="newsthumb" src="/img/Assets/<?php echo $post['BlogThumb']['filename']; ?>">
					<h1><a href="/news/view/<?php echo $post['News']['slug']; ?>"><?php echo $post['News']['title']; ?></a></h1>
					<div style="clear:both;"></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<p>
		<img src="/img/Assets/<?php echo $news['BlogThumb']['filename']; ?>" width="300px">
	</p>
	<p class="news-copy"><?php echo $this->BlogImage->imageifyPost($news['News']['copy'],$news['Images']); ?></p>
</div>

<br style="clear:both;">


