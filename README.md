Toggle
======

A content toggle by click plugin for Monstra.

## Version
* **0.2.2016-02-25**
* 0.1.2016-01-02

Here is a [list of all releases](https://github.com/devmount-monstra/toggle/releases) of `Toggle`

## Installation
1. Download latest version of `Toggle`
2. Log into Monstra backend and go to `Extends > Plugins > Install new`
3. Select downloaded file and first click `Upload`, then click `Install`
4. Go to `Extends > Toggle` and configure options of your choice
5. Now everything is ready to use!

## Usage
Shortcode for content pages:

    {toggle click="some link text" toggle="some toggle content"}

Codesnippet for templates:

    <?php Toggle::show('The answer to life, the universe and everything?', '42'); ?>

## Options
| option         | type     | description                                                 |
|----------------|----------|-------------------------------------------------------------|
| Slide duration | `int`    | How many milliseconds the sliding animation should take     |
| Slide easing   | `string` | Easing type for the sliding animation: `swing` or `linear`  |

## License
This Plugin is distributed under [MIT-License](http://opensource.org/licenses/mit-license.html).

## Sources
This plugin is based on the [.slideToggle()](http://api.jquery.com/slidetoggle/) method of jQuery

---
developed by [devmount ![devmount logo](http://media.devmount.de/devmount_small_dark.png)](http://devmount.de)

