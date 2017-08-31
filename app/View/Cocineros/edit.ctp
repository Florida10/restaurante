<div class="cocineros form">
<br>
<br>
<br>
<?php echo $this->Form->create('Cocinero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cocinero'); ?></legend>
	<?php
		echo $this->Form->input('id',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('nombre',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('apellido',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('Platillo',array(
						'class'=>'form-control'
						));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cocinero.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Cocinero.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Cocineros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
