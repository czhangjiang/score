<?php
//左侧菜单
return array(

	/**
	 * ------------------
	 * 控制面板首页
	 * ------------------
	 */
	array(
		'name'    => '首页',
		'icon'    => 'entypo-gauge',
		'url'     => '/',
		'pattern' => array('/'),
		'submenu' => array()
	),


	/**
	 * ------------------
	 * 职员管理
	 * ------------------
	 */	
	array(
		'name'    => '职员管理',
		'icon'    => 'entypo-user',
		'pattern' => array('user/*'),
		'submenu' => array()
	),	

	/**
	 * ------------------
	 * 系统管理
	 * ------------------
	 */
	array(
		'name'    => '系统管理',
		'icon'    => 'entypo-cog',
		'url'     => 'system',
		'pattern' => array('system/*'),
		'submenu' => array(
			array(
				'name' => '管理员列表',
				'url'  => 'system/index',
			)
		)
	),	
);