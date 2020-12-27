<?php
/**
*
* @package yandexform
* @copyright (c) 2019 Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\yandexform\acp;

class yandexform_info
{
	public function module()
	{
		return [
			'filename'	=> '\tatiana5\yandexform\acp\yandexform_module',
			'title'		=> 'ACP_YANDEXFORM',
			'version'	=> '0.0.1',
			'modes'		=> [
				'config_yandexform'		=> ['title' => 'ACP_YANDEXFORM_EXPLAIN', 'auth' => 'ext_tatiana5/yandexform && acl_a_board', 'cat' => ['ACP_YANDEXFORM_EXPLAIN']],
			],
		];
	}
}
