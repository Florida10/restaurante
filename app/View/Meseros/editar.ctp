<br>
<br>
<br>
<h2>Editar Mesero</h2>

<?php echo $this->Form->create('Mesero');
echo $this->Form->input('dni',array(
						'class'=>'form-control'
						));
echo $this->Form->input('nombre',array(
						'class'=>'form-control'
						));
echo $this->Form->input('apellido',array(
						'class'=>'form-control'
						));
echo $this->Form->input('telefono',array(
						'class'=>'form-control'
						));
echo $this->Form->end('Editar Mesero',array(
						'class'=>'form-control'
						));
 ?>

<?php 
echo $this->Html->link('Volver a lista de meseros', array('controller'=>'meseros', 'action'=>'index')); ?>