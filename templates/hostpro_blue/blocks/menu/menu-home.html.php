<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
_func('news');
$r = explode(' ', $config['submenu']);
$y = @$r[0] == 'top' ? 'top' : '';
$x = @$r[1] == 'left' ? 'left' : '';

echo hostpro_menu_home($menus, $y, $x);
