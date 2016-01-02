Toggle
======

A content toggle by click plugin for Monstra.

### Usage
Shortcode for content pages:

    {toggle click="some link text" toggle="some toggle content"}

Codesnippet for templates:

    <?php Toggle::show('The answer to life, the universe and everything?', '42'); ?>

### Options
* __Slide duration__: How many milliseconds the sliding animation should take [integer]
* __Slide easing__: Easing type for the sliding animation [swing or linear]

### License
This Plugin is distributed under [MIT-License](http://opensource.org/licenses/mit-license.html).

### Sources
This plugin is based on the [.slideToggle()](http://api.jquery.com/slidetoggle/) method of jQuery and developed by [devmount](http://devmount.de).