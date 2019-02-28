<?php

require 'Model.php';

/**
 * Ropa ORM
 */
class Ropa extends Model {
	
	function __construct() {
		parent::__construct();
		$this->table = 'ropas';
		$this->columns = ['id','descripcion'];
	}

	public function add($values) {
		return parent::add($values);
	}

	public function edit($cols, $condition) {
		return parent::edit($cols, $condition);
	}

	public function findAll() {
		return parent::findAll();
	}

	public function find($cols, $condition) {
		return parent::find($cols, $condition);
	}

	public function remove($condition) {
		return parent::remove($condition);
	}

}

$ropa = new Ropa();
//$ropa->add(['1','Jeans']);
//$ropa->edit(['descripcion' => 'Pantalones'],['id' => '1']);
//var_dump( $ropa->findAll() );
//var_dump( $ropa->find([], ['id' => '3']) );
//var_dump( $ropa->find(['descripcion'], ['id' => '3']) );
//$ropa->remove(['id' => '1']);

?>