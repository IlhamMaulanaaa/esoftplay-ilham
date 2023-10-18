<?php
$r = explode(' ', $config['submenu']);
$y = @$r[0]=='top' ? 'top' : '';
$x = @$r[1]=='left' ? 'left' : '';

function home_menu($menus, $y='', $x='', $level = -1){
	$output = '';
	if (!empty($menus))
	{
		$highlight = menu_parent_ids(@$_GET['menu_id'], $menus);
		if ($level == -1)
		{
			$output = call_user_func(__FUNCTION__, menu_parse($menus), $y,$x,++$level);
		}else
		if (empty($level))
		{
			$cls = !empty($y) ? ' nav-'.$y : '';
			$cls.= !empty($x) ? ' nav-'.$x : '';
			$out = '';
			foreach ($menus as $menu)
			{
				$sub = call_user_func(__FUNCTION__, $menu['child'], $y,$x,++$level);
				if (!empty($sub))
				{
					$act = in_array($menu['id'], $highlight) ? ' active' : '';
					$out .= '<li class="'.$act.'"><a  href="'.$menu['link'].'" title="'.$menu['title'].'">'.$menu['title'].' </a>'.$sub.'</li>';
				}else{
					$act = in_array($menu['id'], $highlight) ? ' class="active"' : '';
					$out.= '<li'.$act.'><a href="'.$menu['link'].'" title="'.$menu['title'].'">'.$menu['title'].'</a></li>';
				}
			}
			$output = '<ul class="nav navbar-nav'.$cls.'">'.$out.'</ul>';
		}else {
			$out = '';
			foreach ($menus as $menu)
			{
				$sub = call_user_func(__FUNCTION__, $menu['child'], $y,$x,++$level);
				if (!empty($sub))
				{
					$act = in_array($menu['id'], $highlight) ? ' active' : '';
					$out .= '<li class="dropdown-submenu'.$act.'"><a tabindex="-1" href="'.$menu['link'].'" title="'.$menu['title'].'">'.$menu['title'].'</a>'.$sub.'</li>';
				}else{
					$act = in_array($menu['id'], $highlight) ? ' class="active"' : '';
					$out.= '<li'.$act.'><a href="'.$menu['link'].'" title="'.$menu['title'].'">'.$menu['title'].'</a></li>';
				}
			}
			$output = '<ul class="dropdown-menu" role="menu">'.$out.'</ul>';
		}
	}
    return $output;
}
echo home_menu($menus, $y, $x);