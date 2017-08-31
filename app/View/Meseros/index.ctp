<?php 
$this->Paginator->options(array(
	'update'=>'#contenedor-meseros',
	'before'=> $this->Js->get('#procesando')->effect('fadeIn', array('buffer'=>false)),
	'complete'=>$this->Js->get('#procesando')->effect('fadeIn', array('buffer'=>false))
	)
	);

 ?>
 

<br>
<br>
<br>
<h2> Lista de meseros </h2>

<?php echo $this->Html->link('Crear Mesero', array('controller' => 'meseros', 'action' => 'nuevo')); ?>
<div class="col-md-12">
<table class="table table-striped">
<thead>
	<tr class="panel panel-info" >
		<td><?php echo $this->Paginator->sort('id') ?></td>
		<td><?php echo $this->Paginator->sort('nombre') ?></td>
		<td><?php echo $this->Paginator->sort('apellido') ?></td>
		<td><?php echo 'Detalle' ?></td>
		<td><?php echo 'Editar' ?></td>
		<td><?php echo 'Eliminar' ?></td>
	</tr>
</thead>
	<?php 
	foreach ($meseros as $mesero): 
	?>
	<tr>
		<td> <?php echo h($mesero['Mesero']['id']); ?> </td>
		<td><?php echo h($mesero['Mesero']['nombre']); ?></td>
		<td><?php echo h($mesero['Mesero']['apellido']); ?></td>
		<td><?php echo $this->Html->link('Detalle', array('controller' => 'meseros', 
		'action' => 'ver', $mesero['Mesero']['id'])); ?></td>
		<td><?php echo $this->Html->link('Editar', array('controller' => 'meseros', 'action' => 'editar', $mesero['Mesero']['id'])); ?></td>
		<td> <?php echo $this->Form->postLink('Eliminar', array('action'=>'eliminar', $mesero['Mesero']['id']),array('confirm'=>'Eliminar a '.$mesero['Mesero']['nombre'])); ?></td>
	</tr>
	<?php 
	endforeach; 
	?>
</table>

</div>

<p>
	<?php 
	echo $this->Paginator->counter(array(
		'format'=>__('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
	 ?>

	 <ul class="pagination">
	 	<li>
	 		<?php echo $this->Paginator->prev('< '. __('previous'),array('tag'=>false),null,array('class'=>'prev disabled')); ?>
	 	</li>
	 	<?php 
	 	echo $this->Paginator->numbers(array('separator'=>'','tag'=>'li','currentTag'=>'a','currentClass'=>'active'));
	 	 ?>
	 	<li>
	 		<?php echo $this->Paginator->next( __('next'). ' >',array('tag'=>false),null,array('class'=>'next disabled')); ?>
	 	</li>

	 </ul>

<?php //echo $this->Js->writeBuffer(); ?>
