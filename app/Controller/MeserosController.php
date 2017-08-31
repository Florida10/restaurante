<?php 
class MeserosController extends AppController{


public $components = array('RequestHandler');
public $helpers = array('Html','Form', 'Time','Js');

public $paginate = array(
					'limit'=>5,
					'order'=>array(
						'Mesero.id'=>'asc'
						)
					);

public function index(){
	$this->Mesero->recursive=0;

	$this->paginate['Mesero']['limit']=3;
	$this->paginate['Mesero']['order']= array('Mesero.id'=>'asc');
	//$this->paginate['Mesero']['conditions']=> array('Mesero.dni'=>1);
	
	$this->set('meseros',$this->paginate());
	//$this->set('meseros', $this->Mesero->find('all'));
}

public function ver($id=null){

	if(!$id){
		throw new notFoundException('Datos Invalidos');	
	}

	$mesero = $this->Mesero->findById($id);

	if(!$mesero){
		throw new notFoundException('El mesero non existe');
	}
	$this->set('mesero',$mesero);
	
}

public function nuevo(){
	if($this->request->is('post')){
		$this->Mesero->create();
		if($this->Mesero->save($this->request->data)){
			$this->Flash->success('El mesero ha sido creado');
			return $this->redirect(array('action'=>'index'));
		}
		$this->Flash->set('No se pudo crear el Mesero');
	}
}

public function editar($id=null){
	if(!$id){
		throw new notFoundException('Datos Invalidos');	
	}

	$mesero = $this->Mesero->findById($id);
	if(!$mesero){
		throw new notFoundException('El mesero no ha sido encontrado');
	}
	if($this->request->is('post','put')){
		$this->Mesero->id = $id;

		if($this->Mesero->save($this->request->data)){
			$this->Flash->success('El mesero ha sido modificado');

			return $this->redirect(array('action'=>'index'));
		}
		$this->Flash->set('El registro no pudo ser modificado');
	}

	if(!$this->request->data){
		$this->request->data = $mesero;
	}
	
}

public function eliminar($id){
	if($this->request->is('get')){
		throw new MethodNotAllowedException('INCORRECTO');
	}

	if($this->Mesero->delete($id)){
		$this->Flash->success('El mesero ha sido eliminado');
		return $this->redirect(array('action'=>'index'));
	}
}
	
}
?>