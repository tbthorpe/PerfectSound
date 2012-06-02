<?php
App::uses('AppModel', 'Model');

class Widget extends AppModel {

	public $displayField = 'title';

	public $hasOne = array(
		'WidgImg'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('WidgImg.class'=>'Widgets','WidgImg.type'=>'wigige'),
			)
		);
		
	private function reorder($order){
		$orders = explode(",",$order);
		foreach ($orders as $item){
			$array = preg_split("/[_]/", $item);
			return $item;
		}
	}
}
