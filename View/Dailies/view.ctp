<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Daily');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($daily['Daily']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($daily['Daily']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($daily['Daily']['description']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Daily')), array('action' => 'edit', $daily['Daily']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Daily')), array('action' => 'delete', $daily['Daily']['id']), null, __('Are you sure you want to delete # %s?', $daily['Daily']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Dailies')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Daily')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

