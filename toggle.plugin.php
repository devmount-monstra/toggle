<?php

/**
 *	Toggle plugin
 *  http://api.jquery.com/slidetoggle
 *
 *  Generates content, that slide-toggles further content on click.
 *
 *	@package    Monstra
 *  @subpackage Plugins
 *	@author     Andreas Müller | DEVMOUNT <mail@devmount.de>
 *	@license    MIT
 *	@version    0.1.2015-09-08
 *  @link       https://github.com/devmount/toggle
 *
 */


// Register plugin
Plugin::register(
    __FILE__,                    
    __('Toggle'),
    __('Toggle plugin for Monstra.'),  
    '0.1.2015-09-08',
    'devmount',                 
    'http://devmount.de'
);

/**
 * Shorcode: {toggle click="some link text" toggle="some toggle content"}
 */
Shortcode::add('toggle', 'Toggle::_shortcode');


/**
 * Toggle class
 * 
 * Usage: <?php Toggle::show('What is life, the universe and everything?', '42'); ?>
 * 
 */
class Toggle
{
    /**
     * _shortcode function
     * 
     * @param  array $attributes given
     * @return void generated content
     * 
     */
    public static function _shortcode($attributes)
    {
        return Toggle::show($attributes['click'], $attributes['toggle']);
    }
     
    /**
     * Math Headers
     */
    public static function show($click, $toggle)
    {
        View::factory('toggle/views/frontend/index')
            ->assign('click', $click)
            ->assign('toggle', $toggle)
            // ->render();
            ->display();
    }

}
