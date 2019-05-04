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
		return array(
			'filename'	=> '\tatiana5\yandexform\acp\yandexform_module',
			'title'		=> 'ACP_YANDEXFORM',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'config_yandexform'		=> array('title' => 'ACP_YANDEXFORM_EXPLAIN', 'auth' => 'ext_tatiana5/yandexform && acl_a_board', 'cat' => array('ACP_YANDEXFORM_EXPLAIN')),
			),
		);
	}
}
