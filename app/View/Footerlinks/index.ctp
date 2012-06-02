<div class="footerlinks index">
	<h2><?php echo __('Footerlinks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('text');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('visible');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($footerlinks as $footerlink): ?>
	<tr>
		<td><?php echo h($footerlink['Footerlink']['id']); ?>&nbsp;</td>
		<td><?php echo h($footerlink['Footerlink']['text']); ?>&nbsp;</td>
		<td><?php echo h($footerlink['Footerlink']['url']); ?>&nbsp;</td>
		<td><?php echo h($footerlink['Footerlink']['visible']); ?>&nbsp;</td>
		<td><?php echo h($footerlink['Footerlink']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $footerlink['Footerlink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $footerlink['Footerlink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $footerlink['Footerlink']['id']), null, __('Are you sure you want to delete # %s?', $footerlink['Footerlink']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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
		<li><?php echo $this->Html->link(__('New Footerlink'), array('action' => 'add')); ?></li>
	</ul>
</div>
