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
	//'YA_TARGET'                 => 'Поддержать проект',
	'YA_MONEY'					=> 'ЮMoney',
	'YA_CARD'					=> 'Банковской картой',
	'YA_MOBILE'					=> 'Со счёта мобильного',
	'YA_RUB'					=> 'рублей',
	'YA_SEND'					=> 'Перевести',
]);
