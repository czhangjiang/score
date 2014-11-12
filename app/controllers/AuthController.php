<?php

use \View;
use \Input;
use \User;
use \Redirect;
use \Auth;
use \Response;
class AuthController extends BaseController {

	/**
	 * 展示登录页面
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		if (Auth::check()){
			if (Auth::user()->role != User::ROLE_ADMIN) {
				Auth::logout();
				return Redirect::to('auth/login');
			} else {
				return Redirect::to('/');
			}
		}
		return View::make('pages.login');
	}


	/**
	 * 执行登录操作
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		$user = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'status'   => User::STATUS_OK,
			'role'     => User::ROLE_ADMIN
		);
		if (Auth::attempt($user, Input::get('remeber'))) {
			return Response::json(array(
				'login_status' => 'success',
				'redirect_url' => url('/')
			));
		}

		return Response::json(array(
			'login_status' => 'invalid'
		));
	}


	/**
	 * 登出
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('auth/login')->with('message', '您已成功退出');
	}
}
