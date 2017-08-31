<div class="categoriaPlatillos form">
<br>
<br>
<br>
<?php echo $this->Form->create('CategoriaPlatillo'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria Platillo'); ?></legend>
	<?php
		echo $this->Form->input('categoria',array(
						'class'=>'form-control'
						));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
