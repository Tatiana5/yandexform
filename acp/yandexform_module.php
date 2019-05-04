<?php
/**
*
* @package yandexform
* @copyright (c) 2019 Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\yandexform\acp;

use tatiana5\yandexform\functions\acp_module_helper;

class yandexform_module extends acp_module_helper
{
	public function main($id, $mode)
	{
		$this->ext_name ='tatiana5/yandexform';
		//$this->ext_langname = '';
		$this->tpl_name = 'acp_yandexform';
		$this->form_key = 'config_yandexform_plugins';
		add_form_key($this->form_key);

		parent::main($id, $mode);
	}

	/**
	 * Generates the array of display_vars
	 */
	protected function generate_display_vars()
	{
		$this->display_vars = array(
			'title' => 'ACP_YANDEXFORM_TITLE',
			'vars'  => array(
				'legend1'                    => '',
				'yandexform_receiver'        => array('lang' => 'ACP_YANDEXFORM_RECEIVER', 'validate' => 'string', 'type' => 'text:20:15', 'explain' => false),
				'yandexform_target'          => array('lang' => 'ACP_YANDEXFORM_TARGET', 'validate' => 'string', 'type' => 'text:40:255', 'explain' => false),
				//
				'legend2'                    => 'ACP_SUBMIT_CHANGES',
			),
		);
	}
}
