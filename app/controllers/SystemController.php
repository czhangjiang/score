<?php

class SystemController extends BaseController
{
	/**
	 * 管理员列表
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('pages.system.index');
	}

}