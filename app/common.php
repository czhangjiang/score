<?php

/**
 * 检查当前url是否属于菜单中定义的模式，完成菜单激活状态
 *
 * @param array $pattern app/config/menu.php中的pattern
 *
 * @return boolean 
 */
function is_current_model(array $pattern)
{
	foreach ($pattern as $ptn) {
		if (Request::is($ptn)) {
			return true;
		}
	}
	return false;
}