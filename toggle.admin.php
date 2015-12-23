<?php

// let only monstra allow to use this script
defined('MONSTRA_ACCESS') or die('No direct script access.');

/**
 *	Toggle plugin admin
 *  http://api.jquery.com/slidetoggle
 *
 *  Generates content, that slide-toggles further content on click.
 *
 *	@package    Monstra
 *  @subpackage Plugins
 *	@author     Andreas Müller | devmount <mail@devmount.de>
 *	@license    MIT
 *	@version    0.1.2015-09-08
 *  @link       https://github.com/devmount-monstra/toggle
 *
 */


// Admin Navigation: add new item
Navigation::add(__('Toggle', 'toggle'), 'extends', 'toggle', 10);

/**
 * Toggle class
 * 
 */
class ToggleAdmin extends Backend
{
    /**
     * main toggle admin function
     */
    public static function main()
    {
        if (Request::post('toggle_submitted')) {
            if (Security::check(Request::post('csrf'))) {
                Option::update('toggle_duration', (int) Request::post('toggle_duration'));
                Option::update('toggle_easing', Request::post('toggle_easing'));
                Notification::set('success', __('Configuration has been saved with success!', 'toggle'));
            }
            else {
                Notification::set('error', __('Request was denied. Invalid security token. Please refresh the page and try again.', 'toggle'));
                die();
            }
        }

        // Display view
        View::factory('toggle/views/backend/index')->display();
    }

}
