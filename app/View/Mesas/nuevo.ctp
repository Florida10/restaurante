<br>
<br>
<br>
<h2>Crear Mesa</h2>
<?php 
	echo $this->Form->create('Mesa');
	echo $this->Form->input('serie',array(
						'class'=>'form-control'
						));
	echo $this->Form->input('puestos',array(
						'class'=>'form-control'
						));
	echo $this->Form->input('posicion',array('rows'=>3,
										'class'=>'form-control'));
	echo $this->Form->input('mesero_id',array(
						'class'=>'form-control'
						));
	echo $this->Form->end('Crear mesa');

 ?>

 <?php 
echo $this->Html->link('Volver a lista de mesas', array('controller'=>'mesas','action'=>'index'));
  ?>