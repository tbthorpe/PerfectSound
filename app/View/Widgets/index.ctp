<style type="text/css" media="screen">
	.sWidget{paddling-left:20px;min-height:50px;border-bottom:1px solid black;padding:20px}
/*	#sortables ul:nth-child(even) {
		border-bottom:;
	}*/
	#sortables li:nth-child(even) {
		background: #F9F9F9;
	}
	.sWidget SPAN.wTitle{float:none;padding-left:10px;}
	li.sWidget .actions{float:right;clear:right;}
</style>

<div class="widgets index">
	<h2><?php echo __('Widgets');?></h2>
	<!-- <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('text');?></th>
			<th><?php echo $this->Paginator->sort('linkurl');?></th>
			<th><?php echo $this->Paginator->sort('videoembed');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr> -->
	<ul id="sortables">
	<?php
	$i=1;
	foreach ($widgets as $widget): ?>
	<!-- <tr> -->
		<li class="sWidget" id="w_<?php echo $widget['Widget']['id']; ?>">
			<?php if (!empty($widget['WidgImg']['filename'])): ?>
				<img src="/img/Assets/<?php echo $widget['WidgImg']['filename']; ?>" width="75px" style="float:none;margin-bottom:10px;">
			<?php endif; ?>
		 <span class="wTitle"><?php echo h($widget['Widget']['title']); ?>&nbsp;</span>
				<!--<span><?php echo h($widget['Widget']['linkurl']); ?>&nbsp;</span>
				<span><?php echo h($widget['Widget']['videoembed']); ?>&nbsp;</span>
				<span><?php echo h($widget['Widget']['created']); ?>&nbsp;</span>
				<span><?php echo h($widget['Widget']['modified']); ?>&nbsp;</span>-->
				<span class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $widget['Widget']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $widget['Widget']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $widget['Widget']['id']), null, __('Are you sure you want to delete # %s?', $widget['Widget']['id'])); ?>
				</span>
				<div class="clearfix"></div>
	</li>
	<?php $i++; ?>
<?php endforeach; ?>
</ul>
	<!-- </table> -->
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Widget'), array('action' => 'add')); ?></li>
	</ul>
</div>

<script type="text/javascript" charset="utf-8">

$(document).ready(function() {
	$("#sortables").sortable({
		update: function(event, ui) {
			var result = $('#sortables').sortable('serialize');
			$.get('/widgets/update_order?' + result);
		}
	});
});

</script>

