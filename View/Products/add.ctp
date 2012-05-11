<div class="products form">
<?php echo $this->Form->create('Product');?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('sku');
		echo $this->Form->input('description');
		echo $this->Form->input('cost');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->link(__('Cancel'), array('action' => 'index'));?>
<?php echo $this->Form->end();?>
</div>
<div class="actions">
	<?php echo $this->element('tr_menu'); ?></div>
