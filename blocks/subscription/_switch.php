<?php  if ( ! defined('_VALID_BBC')) exit('No direct script access allowed');
$output = array();
include _ROOT.'modules/news/mailchimp.php';
include tpl(@$config['template'].'.html.php', 'statistic.html.php');
