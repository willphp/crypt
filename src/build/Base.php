<?php
/*--------------------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: www.113344.com
 |--------------------------------------------------------------------------
 | Author: no-mind <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2022, www.113344.com. All Rights Reserved.
 |-------------------------------------------------------------------------*/
namespace willphp\crypt\build;
use willphp\config\Config;
class Base {
	protected $secureKey = 'd0456cc4eb4eec479dba0ceefa6488c143a03299a3c3fed3d8ce7b820f3aca81';
    /**
     * ÉèÖÃÃÜÔ¿
     * @param string $key
     * @return string
     */
	public function key($key = '') {
		$this->secureKey = $key ? $key : Config::get('app.key', $this->secureKey);		
		return base64_decode(hash('sha256', $this->secureKey, true));
	}
    /**
     * ¼ÓÃÜ
     * @param string $input     ¼ÓÃÜ×Ö·û
     * @param string $secureKey ¼ÓÃÜkey
     * @return string
     */
	public function encrypt($input, $secureKey = '') {
		$encrypt = openssl_encrypt(
				$input,
				'aes-256-cbc',
				$this->key($secureKey),
				OPENSSL_RAW_DATA,
				substr($this->secureKey, -16)
				);		
		return base64_encode($encrypt);
	}
    /**
     * ½âÃÜ
     * @param string $input     ½âÃÜ×Ö·û
     * @param string $secureKey ¼ÓÃÜkey
     * @return string
     */
	public function decrypt($input, $secureKey = '') {
		$encrypted = base64_decode($input);
		$decrypted = openssl_decrypt(
				$encrypted,
				'aes-256-cbc',
				$this->key($secureKey),
				OPENSSL_RAW_DATA,
				substr($this->secureKey, -16)
				);		
		return $decrypted;
	}
}