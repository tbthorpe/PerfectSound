<div class="footerlinks view">
<h2><?php  echo __('Footerlink');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($footerlink['Footerlink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($footerlink['Footerlink']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($footerlink['Footerlink']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($footerlink['Footerlink']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($footerlink['Footerlink']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Footerlink'), array('action' => 'edit', $footerlink['Footerlink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Footerlink'), array('action' => 'delete', $footerlink['Footerlink']['id']), null, __('Are you sure you want to delete # %s?', $footerlink['Footerlink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Footerlinks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Footerlink'), array('action' => 'add')); ?> </li>
	</ul>
</div>
