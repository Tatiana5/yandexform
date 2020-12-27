<?php
/**
*
* @package yandexform
* @copyright (c) 2019 -  Татьяна5
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
	'ACP_YANDEXFORM'                       => 'YooMoney form',
	'ACP_YANDEXFORM_EXPLAIN'               => 'YooMoney form settings',
	'ACP_YANDEXFORM_TITLE'                 => 'YooMoney form',
	//'ACP_YANDEXFORM_TITLE_EXPLAIN'         => '',
	'ACP_YANDEXFORM_RECEIVER'              => 'Wallet number',
	'ACP_YANDEXFORM_TARGET'                => 'Reason for collecting money',
]);
