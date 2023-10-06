<?php  if ( ! defined('_VALID_BBC')) exit('No direct script access allowed');

$Bbc->home = 'user.main'; // ini adalah halaman pertama atau bisa di bilang indexnya
$Bbc->login= 'user.login'; // ini adalah halaman untuk login jika bukan haknya
$Bbc->load=  array(
	'func'	=> array(),
	'class'	=> array(),
	'lib'		=> array(),
	'sys'		=> array('menu.admin')
);
