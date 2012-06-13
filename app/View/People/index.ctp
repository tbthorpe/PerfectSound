<style type="text/css" media="screen">
	.sWidget{paddling-left:20px;min-height:50px;border-bottom:1px solid black;padding-top:20px}
/*	#sortables ul:nth-child(even) {
		border-bottom:;
	}*/
	#sortables li:nth-child(even) {
		background: #F9F9F9;
	}
	.sWidget SPAN.wTitle{display:block;float:left;width:380px;padding-left:10px;}
</style>
<div class="footerlinks index">
	<h2><?php echo __('Staff');?></h2>
	<ul id="sortables">
	<?php
	$i=1;
	foreach ($people as $person): ?>
	<!-- <tr> -->
		<li class="sWidget" id="w_<?php echo $person['Person']['id']; ?>">
		 <span class="wTitle"><?php echo h($person['Person']['name']); ?>&nbsp;</span>
				<span class="actions">
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete  %s?', $person['Person']['name'])); ?>
				</span>
	</li>
	<?php $i++; ?>
<?php endforeach; ?>
</ul>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Staff Member'), array('action' => 'add')); ?></li>
	</ul>
</div>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$("#sortables").sortable({
			update: function(event, ui) {
				var result = $('#sortables').sortable('serialize');
				$.get('/people/update_order?' + result);
			}
		});
	});
</script>

