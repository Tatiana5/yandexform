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
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_YANDEXFORM'                       => 'Yandex form',
	'ACP_YANDEXFORM_EXPLAIN'               => 'Yandex form settings',
	'ACP_YANDEXFORM_TITLE'                 => 'Yandex form',
	//'ACP_YANDEXFORM_TITLE_EXPLAIN'         => '',
	'ACP_YANDEXFORM_RECEIVER'              => 'Wallet number',
	'ACP_YANDEXFORM_TARGET'                => 'Reason for collecting money',
));
