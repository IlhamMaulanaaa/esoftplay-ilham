<?php
function hostpro_menu_footer($menus, $level = -1, $id = '')
{
  $output = '';

  if (!empty($menus)) {
    $highlight = menu_parent_ids(@$_GET['menu_id'], $menus);
    if ($level == -1) {
      $output = call_user_func(__FUNCTION__, menu_parse($menus), ++$level);
    } else
      if (empty($level)) {
        global $Bbc;
        if (empty($Bbc)) {
          $Bbc = new stdClass;
        }
        if (empty($Bbc->menu_vertical)) {
          $Bbc->menu_vertical = 1;
        } else {
          $Bbc->menu_vertical++;
        }
        $id = 'menu_v' . $Bbc->menu_vertical;
        $out = '';
        foreach ($menus as $menu) {
          $sub = call_user_func(__FUNCTION__, $menu['child'], ++$level, $id);
          $act = in_array($menu['id'], $highlight) ? ' active' : '';
          $alt = trim(strip_tags($menu['title']));
          if (!empty($sub)) {
            $out .= '<li class="list_menu_footer"><a href="#' . $id . $level . '" class="' . $act . '" data-toggle="collapse" data-parent="#' . $id . '" title="' . $alt . '">' . $menu['title'] . ' <span class="caret down"></span></a></li>';
            $out .= $sub;
          } else {
            $out .= '<li class="list_menu_footer"><a href="' . $menu['link'] . '" class="' . $act . '"data-parent="#' . $id . '" title="' . $alt . '">' . $menu['title'] . '</a></li>';
          }
        }
        $output = '<ul id="' . $id . '" class="menu">' . $out . '</ul>';
      } else {
        $id .= $level;
        $out = '';
        $in = '';
        foreach ($menus as $menu) {
          $sub = call_user_func(__FUNCTION__, $menu['child'], ++$level, $id);
          $act = in_array($menu['id'], $highlight) ? ' active' : '';
          $alt = trim(strip_tags($menu['title']));
          if ($act) {
            $in = ' in';
          }
          if (!empty($sub)) {
            $out .= '<li class="list_menu_footer"><a href="#' . $id . $level . '" class="' . $act . '" data-parent="#' . $id . '" ' . $menu['title'] . ' <span class="caret down"></span></a></li>';
            $out .= $sub;
          } else {
            $out .= '<li class="list_menu_footer"><a href="' . $menu['link'] . '" class="' . $act . '" data-parent="#' . $id . '" title="' . $alt . '">' . $menu['title'] . '</a></li>';
          }
        }
        $output = '<ul id="' . $id . '" class="collapse' . $in . ' -submenu">' . $out . '</ul>';
      }
  }
  return $output;
}

function hostpro_menu_home($menus, $y = '', $x = '', $level = -1)
{
  $output = '';
  if (!empty($menus)) {
    $highlight = menu_parent_ids(@$_GET['menu_id'], $menus);
    if ($level == -1) {
      $output = call_user_func(__FUNCTION__, menu_parse($menus), $y, $x, ++$level);
    } elseif (empty($level)) {
      $cls = !empty($y) ? ' nav-' . $y : '';
      $cls .= !empty($x) ? ' nav-' . $x : '';
      $out = '';
      foreach ($menus as $menu) {
        $sub = call_user_func(__FUNCTION__, $menu['child'], $y, $x, ++$level);
        if (!empty($sub)) {
          $act = in_array($menu['id'], $highlight) ? ' active' : '';
          $out .= '<li class="dropdown ' . $act . '"><a  role="button" data-toggle="dropdown" tabindex="-1" href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . ' </a>' . $sub . '</li>';
        } else {
          $act = in_array($menu['id'], $highlight) ? ' class="active"' : '';
          $out .= '<li' . $act . '><a href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . '</a></li>';
        }
      }
      $output = '<ul class="nav navbar-nav navbar-right' . $cls . '">' . $out . '</ul>';
    } else {
      $out = '';
      foreach ($menus as $menu) {
        $sub = call_user_func(__FUNCTION__, $menu['child'], $y, $x, ++$level);
        if (!empty($sub)) {
          $act = in_array($menu['id'], $highlight) ? ' active' : '';
          $out .= '<li class="dropdown-submenu ' . $act . '"><a id="hovermet" tabindex="-1" href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . '</a>' . $sub . '</li>';
        } else {
          $act = in_array($menu['id'], $highlight) ? ' class="active"' : '';
          $out .= '<li' . $act . '><a href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . '</a></li>';
        }
      }
      $output = '<ul class="dropdown-menu" role="menu">' . $out . '</ul>';
    }
  }
  return $output;
}