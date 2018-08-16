Toggle
======

A content toggle by click plugin for Monstra.

## Version
#### [**v1.3**](https://github.com/devmount-monstra/toggle/releases/tag/v1.3) - 2016-05-02

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

If you like this plugin and want to give some love back, feel free to...

<p align="center">
  <a href="https://www.buymeacoffee.com/devmount" target="_blank">
  <img alt="Buy me a coffee" src="https://user-images.githubusercontent.com/5441654/44213163-60a91100-a16d-11e8-9d5d-7d862cae7b7c.png">
  </a>
</p>
