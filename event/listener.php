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
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string phpBB phpbb_root path */	
	protected $phpbb_root_path;

	/** @var string phpEx */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config                             $config
	 * @param \phpbb\template\template                         $template
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, $phpbb_root_path, $php_ext)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
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
			'core.page_header'                   => 'template_vars',
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

	public function template_vars()
	{
		if (!function_exists('get_username_string'))
		{
			include($this->phpbb_root_path . 'includes/functions_content.' . $this->php_ext);
		}

		$this->template->assign_vars(array(
			'YANDEXFORM_RECEIVER'	=> $this->config['yandexform_receiver'],
			'YANDEXFORM_TARGET'		=> $this->config['yandexform_target'],
			'YANDEXFORM_NICKNAME'	=> str_replace('"', '&quot;', get_username_string('username', $this->user->data['user_id'], $this->user->data['username'], $this->user->data['user_colour'])),
		));
	}
}
