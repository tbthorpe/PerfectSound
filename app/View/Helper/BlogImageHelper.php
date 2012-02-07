<?php
/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');

class BlogImageHelper extends AppHelper {
    function imageifyPost($copy,$images) {
		$imageified = $copy;
		foreach ($images as $x => $y){
			$imageified = preg_replace('/::'.$x.'::/', '<br/><img src="/img/Assets/'.$images[$x]['filename'].'" width="250px"><br/>', $imageified);
		}

		return $imageified;
    }
}