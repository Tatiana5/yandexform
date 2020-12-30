<?php
/**
*
* @package yandexform
* @copyright (c) 2019 Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\yandexform\migrations;

class v_1_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['yandexform_version']) && version_compare($this->config['qr_version'], '1.0.1', '>=');
	}

	public static function depends_on()
	{
			return ['\tatiana5\yandexform\migrations\v_0_0_1'];
	}

	public function update_data()
	{
		return array(
			// Update existing configs
			['config.update', ['yandexform_version', '1.0.1']],
		);
	}
}
