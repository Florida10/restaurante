<br>
<br>
<br>
<h2>Crear Mesero</h2>

<?php 
echo $this->Form->create('Mesero');
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
echo $this->Form->end('Crear Mesero');
 ?>

 
<?php 
echo $this->Html->link('Volver a lista de meseros', array('controller'=>'meseros', 'action'=>'index')); ?>