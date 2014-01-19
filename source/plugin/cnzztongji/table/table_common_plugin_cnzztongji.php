<?php
/**
* [Discuz!] (C)2001-2099 Comsenz Inc.
* This is NOT a freeware, use is subject to license terms
* $Id: table_commmon_plugin_cnzztongji.php 2013-03-19 cnzztongji $
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );
class table_common_plugin_cnzztongji {
	public $table = 'common_plugin_cnzztongji';
	static private $_instance; 
	private $cacheInfo = '';

	public static function getstance(){
		if( false == (self::$_instance instanceof self) ){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 *获取数据库内存放的info
	 *@return array
	 */
	public function getInfo($sql){
		return DB::fetch_first($sql);
	}

	/**
	 *获取表名
	 *@return array
	 */
	public function getTable($table=''){
		if(!$table){
			$table = $this->table;
		}
		$therealtable = DB::table($table);
		if(!$this->tableIsExists($therealtable)){
			showmessage("table ".$therealtable." not exists\n");
			exit;
		}
		return $therealtable;
	}
	
	/**
	 *表是否存在
	 *@param $table 表名
	 *return bool
	 */
	public function tableIsExists($table){
		$result = $this->getInfo("SHOW TABLES LIKE '".$table."'");
		if(is_array($result) && count($result) > 0){
			return true;
		}
		return false;
	}

	public function insertData($data, $table){
		$sql = "insert into `$table` set ";
		$vals = "";
		foreach($data as $k => $v){
			$vals .= "`{$k}`='{$v}',";
		}
		$sql .= rtrim($vals, ',');
		return DB::query($sql);
	}

	/*
	 *存入系统缓存
	 */
	public function saveSyscache($cname, $data){
		return save_syscache($cname, $data); 
	}

	/*
	 *读取缓存信息
	 */
	public function load_cache($cname){
		global $_G;
		loadcache($cname);
		return $_G['cache'][$cname];
	}
	
	/**
	 *执行sql
	 */

	public function doQuery($sql){
		return DB::query($sql);
	}
	/**
	 *获取错误代码
	 *return int
	 */
	public function getErrorno(){
		return DB::errno();
	}
	/**
	 *获取info信息
	 *分别从类的变量，系统缓存，数据库依次获取
	 *return array
	 */
	public function getIdInfo($cnzz_id){
		if($this->cacheInfo[$cnzz_id]){
			return $this->cacheInfo[$cnzz_id];
		}
		if($cnzz_id == 100){
			$cache_name = 'cnzztongji_info';
			$id = 1;
		}
		else{
			$cnzz_id = 101;
			$cache_name = 'cnzztongjiwap_info';
			$id = 2;
		}

		$IdInfo = $this->load_cache($cache_name);
		
		if( !is_array($IdInfo) || !isset($IdInfo['siteid']) ){
			$therealtable = DB::table($this->table);
			if($this->tableIsExists($therealtable)){
				$IdInfo = $this->getInfo("select siteid from ".$therealtable." where id='".$id."'");
				if(!$IdInfo){
					exit(lang('plugin/cnzztongji', 'tip_error_id'));
				}
			}
			else{
				exit(lang('plugin/cnzztongji', 'tip_error_id'));
			}
			$this->saveSyscache($cache_name, $IdInfo);
		}
		$this->cacheInfo[$cnzz_id] = $IdInfo;
		return $IdInfo;
	}

	/**
	 *返回插件id
	 *@return int;
	 */
	public function getPluginId(){
		$full_common_plugin_table = DB::table('common_plugin');
		$cnzztongji_plugin_array = $this->getInfo(" select pluginid from {$full_common_plugin_table} where identifier = 'cnzztongji' ");
		return $cnzztongji_plugin_array['pluginid'];
	}
}

?>