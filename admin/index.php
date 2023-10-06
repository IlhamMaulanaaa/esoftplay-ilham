<?php
$Bbc = new stdClass();
define( '_VALID_BBC', 1 );
define( '_ADMIN', 'admin/' );
include_once '../config.php';
define( 'bbcAuth', 'bbcAuthAdmin' );
if(!empty($_POST))
{
	if(preg_match('~^demo\.~is', @$_SERVER['HTTP_HOST']))
	{
		if(count($_POST) > 1 && empty($_POST['login']))
		{
			_class('images')->delete(_ROOT.'images/cache/tmp.html');
		}
	}
}
include_once(_ROOT.'includes/includes.php');
