<div class="platillos form">
<br>
<br>
<br>
<?php echo $this->Form->create('Platillo'); ?>
	<fieldset>
		<legend><?php echo __('Add Platillo'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('descripcion',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('precio',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('categoria_platillo_id',array(
						'class'=>'form-control'
						));
		echo $this->Form->input('Cocinero',array(
						'class'=>'form-control'
						));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
	</ul>
</div>
