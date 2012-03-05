<div class="widgets view">
<h2><?php  echo __('Widget');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkurl'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['linkurl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Videoembed'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['videoembed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Widget'), array('action' => 'edit', $widget['Widget']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Widget'), array('action' => 'delete', $widget['Widget']['id']), null, __('Are you sure you want to delete # %s?', $widget['Widget']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Widget'), array('action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Assets');?></h3>
	<?php if (!empty($widget['image'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $widget['image']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Filename');?></dt>
		<dd>
	<?php echo $widget['image']['filename'];?>
&nbsp;</dd>
		<dt><?php echo __('Class');?></dt>
		<dd>
	<?php echo $widget['image']['class'];?>
&nbsp;</dd>
		<dt><?php echo __('Type');?></dt>
		<dd>
	<?php echo $widget['image']['type'];?>
&nbsp;</dd>
		<dt><?php echo __('Foreign Id');?></dt>
		<dd>
	<?php echo $widget['image']['foreign_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Created');?></dt>
		<dd>
	<?php echo $widget['image']['created'];?>
&nbsp;</dd>
		<dt><?php echo __('Modified');?></dt>
		<dd>
	<?php echo $widget['image']['modified'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Image'), array('controller' => 'assets', 'action' => 'edit', $widget['image']['id'])); ?></li>
			</ul>
		</div>
	</div>
	