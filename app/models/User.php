<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	const STATUS_OK = 0; //正常
	const STATUS_DISABLED = 1;//禁止

	const ROLE_REGULAR_WORKERS = 0; //正式员工
	const ROLE_TEM_WORKERS = 1;//临时员工
	const ROLE_ADMIN = 99; //系统管理员

	public $timestamps = false;
	//软删除
	protected $softDelete = true;

	protected $guarded = array();
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	/**
	 * 是否锁定
	 *
	 * @return string
	 */
	public function locked()
	{
		return $this->status == self::STATUS_DISABLED;
	}

	/**
	 * Get password for the usr
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}
}
