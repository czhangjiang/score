<?php
use \View;
class BaseController extends Controller {


	public function __construct()
	{
		View::share('menus', $this->getMenu());
	}
	/**
	 * 获取菜单
	 *
	 * @return array
	 */
	public function getMenu()
	{
		$menu = Config::get('menu');

		return $menu;
	}
}
