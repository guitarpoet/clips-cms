<?php namespace Clips\Cms\Models; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Libraries\DBModelV2;

/**
 * Model to manipulate table articles
 *
 * @author Jack
 * @version 1.0
 * @date Wed Mar 11 10:43:44 2015
 *
 * @Clips\Model
 */
class ArticleModel extends DBModelV2 {
	public function getCategories($aid) {
		$result = $this->select('category_id')->from('category_articles')
			->where(array('article_id' => $aid))->result();
		if($result) {
			return array_map(function($item){return $item->category_id;}, $result);
		}
		return array();
	}

	public function addToCategories($aid, $cats) {
		foreach($cats as $cid) {
			$this->insert('category_articles', array(
				'article_id' => $aid,
				'category_id' => $cid
			));
		}
	}
}
