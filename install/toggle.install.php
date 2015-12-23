<?php

// let only monstra allow to use this script
defined('MONSTRA_ACCESS') or die('No direct script access.');

// Add Options
Option::add('toggle_duration', '400');
Option::add('toggle_easing', 'swing');