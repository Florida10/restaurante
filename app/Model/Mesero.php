<?php 
class Mesero extends AppModel{

	public $validate = array(
		'dni' => array(
			'notBlank'=> array('rule'=>'notBlank', 'message' => 'Not empty'), 
			'numeric' => array('rule'=> 'numeric', 'message' => 'Solo numeros'),
			'unique'=>array('rule'=>'isUnique', 'message'=>'El DNI ya se encuentra en nuestra base de datos')
			),
		'nombre' => array(
			'notBlank'=>['rule' => 'notBlank', 'message' => 'Not empty']
			),
		'apellido' => array(
			'notBlank'=>['rule' => 'notBlank', 'message' => 'Not empty']
			),
		'telefono' => array(
			'notBlank'=>['rule' => 'notBlank', 'message' => 'Not empty'],
			'numeric' => array('rule'=> 'numeric', 'message' => 'Solo numeros')
			)
		);

	public $hasMany = array(
			'Mesa'=>array(
				'className'=>'Mesa',
				'foreignKey'=>'mesero_id',
				'conditions'=>'',
				'order'=>'Mesa.serie DESC',
				'depend'=>false
			)
		);
}
?>