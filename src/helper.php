<?php
if (!function_exists('encrypt')) {
	/**
	 * 获取加密后的字符串
	 * @param string $string 要加密的字符串
	 * @param string $key 加密key
	 * @return string 返回加密后字符串
	 */
	function encrypt($string, $key = '') {
		return \willphp\crypt\Crypt::encrypt($string, $key);
	}
}
if (!function_exists('decrypt')) {
	/**
	 * 获取解密后的字符串
	 * @param string $string 要解密的字符串
	 * @param string $key 加密key
	 * @return string 返回解密后字符串
	 */
	function decrypt($string, $key = '') {
		return \willphp\crypt\Crypt::decrypt($string, $key);
	}
}