<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Boundary');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($boundary['Boundary']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($boundary['Boundary']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($boundary['Boundary']['description']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Boundary')), array('action' => 'edit', $boundary['Boundary']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Boundary')), array('action' => 'delete', $boundary['Boundary']['id']), null, __('Are you sure you want to delete # %s?', $boundary['Boundary']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Boundaries')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Boundary')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

