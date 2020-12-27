<?php
/**
*
* @package yandexform
* @copyright (c) 2019 Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_YANDEXFORM'                       => 'Форма ЮMoney',
	'ACP_YANDEXFORM_EXPLAIN'               => 'Настройки формы ЮMoney',
	'ACP_YANDEXFORM_TITLE'                 => 'Форма ЮMoney',
	//'ACP_YANDEXFORM_TITLE_EXPLAIN'         => '',
	'ACP_YANDEXFORM_RECEIVER'              => 'Номер кошелька',
	'ACP_YANDEXFORM_TARGET'                => 'Причина сбора',
]);
