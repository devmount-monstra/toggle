<?php

// let only monstra allow to use this script
defined('MONSTRA_ACCESS') or die('No direct script access.');

/**
 *	Toggle plugin
 *  http://api.jquery.com/slidetoggle
 *
 *  Generates content, that slide-toggles further content on click.
 *
 *	@package    Monstra
 *  @subpackage Plugins
 *	@author     Andreas Müller | devmount <mail@devmount.de>
 *	@license    MIT
 *  @link       https://github.com/devmount-monstra/toggle
 *
 */


// Register plugin
Plugin::register(
    __FILE__,
    __('Toggle', 'toggle'),
    __('Toggle plugin for Monstra.', 'toggle'),
    '1.3',
    'devmount',
    'http://devmount.de'
);

// Include plugin admin
if (Session::exists('user_role') && in_array(Session::get('user_role'), array('admin', 'editor'))) {
    Plugin::Admin('toggle');
}


// Shortcode: {toggle click="some link text" toggle="some toggle content"}
Shortcode::add('toggle', 'Toggle::_shortcode');


// Add CSS and JavaScript
Action::add('theme_footer', 'Toggle::_insertJS');
Action::add('theme_header', 'Toggle::_insertCSS');


/**
 * Toggle class
 *
 * Usage: <?php Toggle::show('What is life, the universe and everything?', '42'); ?>
 *
 */
class Toggle
{
    /**
     * _shortcode
     *
     * @param  array $attributes given
     *
     * @return void generated content
     */
    public static function _shortcode($attributes)
    {
        return Toggle::show($attributes['click'], $attributes['toggle']);
    }

    /**
     * _insertJS
     *
     * @return JavaScript to insert
     */
    public static function _insertJS()
    {
        echo
        '<script type="text/javascript">
            $(".click").click(function(event){
                $(this).children(".toggle").slideToggle(
                    ' . Option::get('toggle_duration') . ',
                    "' . Option::get('toggle_easing') . '"
                );
            });
        </script>';
    }


    /**
     * _insertCSS
     *
     * @return JavaScript to insert
     */
    public static function _insertCSS()
    {
        echo '<link rel="stylesheet" type="text/css" href="' . Option::get('siteurl') . '/plugins/toggle/css/toggle.css" />';
    }

    /**
     * show
     *
     * @param  string $click text to click
     * @param  string $toggle text to toggle on click
     *
     * @return rendered view
     */
    public function show($click, $toggle)
    {
        return View::factory('toggle/views/frontend/index')
            ->assign('click', $click)
            ->assign('toggle', $toggle)
            ->render();
    }

}
