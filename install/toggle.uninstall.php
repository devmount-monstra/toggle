<?php 

// let only monstra allow to use this script
defined('MONSTRA_ACCESS') or die('No direct script access.');

// Delete Options
Option::delete('toggle_duration');
Option::delete('toggle_easing');