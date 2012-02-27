<?php
App::uses('AppModel', 'Model');
/**
 * Section Model
 *
 */
class News extends AppModel {

	public $hasMany = array(
		'Images'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Images.class'=>'News','Images.type'=>'blogimg'),
			)
		);
		
	public $hasOne = array(
		'BlogThumb'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('BlogThumb.class'=>'News','BlogThumb.type'=>'blogthumb'),
			)
		);
		
	public function getSomeHeadlines($num){
		$news = $this->find('all',array(
			'fields'=>array('News.title','BlogThumb.filename'),
			'recursive'=>0,
			'order'=>array('News.created'=>'DESC'),
			'limit'=>$num
		));
		return $news;
	}

}
