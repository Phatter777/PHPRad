<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * port_category_option_list Model Action
     * @return array
     */
	function port_category_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT name AS value,name AS label FROM users ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * port_author_option_list Model Action
     * @return array
     */
	function port_author_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT name AS value,name AS label FROM users ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

}
