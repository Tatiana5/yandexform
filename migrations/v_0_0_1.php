<?php
/**
*
* @package yandexform
* @copyright (c) 2019 Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\yandexform\migrations;

class v_0_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['yandexform_version']) && version_compare($this->config['qr_version'], '0.0.1', '>=');
	}

	public static function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('yandexform_receiver', '')),
			array('config.add', array('yandexform_target', 'Поддержать проект')),

			// Current version
			array('config.add', array('yandexform_version', '0.0.1')),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_YANDEXFORM')),
			array('module.add', array('acp', 'ACP_YANDEXFORM', array(
					'module_basename'	=> '\tatiana5\yandexform\acp\yandexform_module',
					'module_langname'	=> 'ACP_YANDEXFORM_EXPLAIN',
					'module_mode'		=> 'config_yandexform',
					'module_auth'		=> 'ext_tatiana5/yandexform && acl_a_board',
			))),
		);
	}
}
