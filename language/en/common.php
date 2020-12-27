<?php
/**
 *
 * @package       yandexform
 * @copyright (c) 2018 yandexform
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	//'YA_TARGET'                 => 'Support the project',
	'YA_MONEY'					=> 'YooMoney',
	'YA_CARD'					=> 'Credit card',
	'YA_MOBILE'					=> 'Mobile account',
	'YA_RUB'					=> 'RUB',
	'YA_SEND'					=> 'Donate',
]);
