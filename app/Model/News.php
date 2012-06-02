<?php
App::uses('AppModel', 'Model');
/**
 * Section Model
 *
 */
class News extends AppModel {
	
	var $actsAs = array(
		'Sluggable' => array(
			'title_field' => 'title',
			'slug_field' => 'slug',
			'slug_max_length' => 64
		)
	);

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
			'fields'=>array('News.title','News.slug','BlogThumb.filename'),
			'recursive'=>0,
			'order'=>array('News.displaydate'=>'DESC'),
			'conditions' => array('News.inwidget'=>1),
			'limit'=>$num
		));
		return $news;
	}
	
	public function findBySlug($slug){
		return $this->find('first',array(
			'conditions'=>array('News.slug'=>$slug)));
	}
	
	// public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) {
	//     // $recursive = -1;
	//     // $group = $fields = array('week', 'away_team_id', 'home_team_id');
	//     return $this->find('all', compact('conditions', 'fields', 'order', 'limit', 'page', 'recursive', 'group'));
	// }
	// 
	// public function paginateCount($conditions = null, $recursive = 0, $extra = array()) {
	//     $sql = "SELECT COUNT(id) FROM news";
	//     $this->recursive = $recursive;
	//     $results = $this->query($sql);
	//     return $results;
	// }

}
