<?php
/**
 *
 * @package       yandexform
 * @copyright (c) 2018 yandexform
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace tatiana5\yandexform\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/**
	 * Constructor
	 *
	 */
	public function __construct()
	{
	}

	/**
	 * Assign functions defined in this class to event listeners in the core.
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		// We set lower priority for some events for the case if another extension wants to use those events.
		return array(
			'core.user_setup'                    => 'load_language_on_setup',
		);
	}

	/**
	 * Load language file.
	 *
	 * @param object $event The event object
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'tatiana5/yandexform',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
