<div class="blogtitle">
	<h1><?php echo $news['News']['title']; ?></h1>
</div>
<div class="blogcopy">
	<p class="news-date"><?php echo date('m-d-Y',strtotime($news['News']['created'])); ?></p>
	<p class="news-copy"><?php echo $this->BlogImage->imageifyPost($news['News']['copy'],$news['Images']); ?></p>
</div>


