<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$Content = _class('content');
$cat = array('publish' => 1);

if (!isset($config['cat_id'])) 
{
	$config['cat_id'] = -2;
}
if (!isset($config['type_id'])) 
{
	$config['type_id'] = intval($config['type_id']);
}
$add_sql = '';

if ($config['type_id'] > 0) 
{
	$add_sql = 'AND c.type_id=' . $config['type_id'];
}

if (@$config['kind_id'] > -1) 
{
	switch ($config['kind_id']) 
	{
		case '0':
		case '1':
		case '2':
		case '3':
		case '4':
			$add_sql .= empty($add_sql) ? '' : ' ';
			$add_sql .= 'AND c.kind_id=' . $config['kind_id'];
			break;
	}
}

$limit = $config['tot_list'] ? 'LIMIT 0, ' . $config['tot_list'] : '';

if ($config['type_id'] == -1) 
{
	$cat['publish'] = 0;
	if (@$_GET['mod'] == 'content.detail') 
	{
		$data = content_related(@$_GET['id'], $config['tot_list'], $add_sql);
		$cat = [
			'publish' => ($data['total'] > 0 ? 1 : 0),
			'list' => $data['list'],
			'total' => $data['total'],
			'total_page' => 1,
		];
	}
} elseif ($config['type_id'] == -2) 
{
	$ids = $config['ids'];
	ids($ids);
	$q = "SELECT c.*, t.title, t.intro, t.content FROM bbc_content AS c
        LEFT JOIN bbc_content_text AS t ON (c.id=t.content_id AND t.lang_id=" . lang_id() . ")
        WHERE c.publish=1 AND c.id IN($ids) ORDER BY c.id DESC $limit";
	$arr = $db->cacheGetAssoc($q);
	$cat['list'] = [];

	if (!empty($ids)) 
	{
		foreach (explode(',', $ids) as $i) 
		{
			$data = !empty($arr[$i]) ? $arr[$i] : content_fetch($i);
			if (!empty($data)) 
			{
				$cat['list'][] = $data;
			}
		}
	}

	$cat['total'] = count($cat['list']);
	$cat['total_page'] = 1;
} elseif ($config['type_id'] == -3) 
{
	$cat['list'] = content_frontpage();
	$cat['total'] = count($cat['list']);
	$cat['total_page'] = 1;
} elseif ($config['cat_id'] == -1) 
{
	if (empty($config['popular'])) 
	{
		$config['popular'] = '2 MONTHS';
	}
	$timestamp = strtotime('-' . $config['popular']);
	if ($timestamp > 0) 
	{
		$date = date('Y-m-d', $timestamp);
		$add_sql .= " AND (c.`modified` >'{$date}' || c.`created` > '{$date}')";
	}
	$q = "SELECT c.*, t.title, t.intro, t.content FROM bbc_content AS c
        LEFT JOIN bbc_content_text AS t ON (c.id=t.content_id AND t.lang_id=" . lang_id() . ")
        WHERE c.publish=1 {$add_sql} ORDER BY hits DESC {$limit}";
	$cat['list'] = $db->cacheGetAll($q);
	$cat['total'] = count($cat['list']);
	$cat['total_page'] = 1;
} elseif ($config['cat_id'] == -2) 
{
	$q = "SELECT SQL_CALC_FOUND_ROWS c.*, t.title, t.intro, t.content FROM bbc_content AS c
        LEFT JOIN bbc_content_text AS t ON (c.id=t.content_id AND t.lang_id=" . lang_id() . ")
        WHERE c.publish=1 {$add_sql} ORDER BY c.id DESC $limit";
	$cat['list'] = $db->cacheGetAll($q);
	$cat['total'] = $db->cacheGetOne("SELECT FOUND_ROWS(), 'latest'");
	$cat['total_page'] = ceil($cat['total'] / $config['tot_list']);
} elseif (is_numeric($config['cat_id'])) 
{
	$config['add_sql'] = $add_sql;
	$cat = content_cat_list($config['cat_id'], 0, $config);
} else 
{
	$cat['publish'] = false;
}
if (!empty($cat['publish']) && !empty($cat['list'])) 
{
	foreach ($cat['list'] as $i => $d) 
	{
		// Check if the necessary fields are present
		if (empty($d['title'])) 
		{
			unset($cat['list'][$i]);
		} else 
		{
			$contentId = $d['id']; // Assuming content ID is stored in 'id' field
			$q = 'SELECT * FROM `bbc_content_comment` WHERE `content_id` = ' . $contentId;	
			$r_list = $db->getAll($q);
			if (!empty($r_list)) {
				$limit = $config['limit_comment'];
				foreach ($r_list as $index =>$comment) {
					$cat['list'][$i]['output_data'][] = [
						'email' 	=> $comment['email'],
						'name' 		=> $comment['name'],
						'date' 		=> $comment['date'],
						'message' => $comment['content']
					];
					if($index + 1 == $limit){
						break;
					}
				}
			}
			$cat['list'][$i]['label'] = content_title($d['title'], intval($config['limit_title']), $config['limit_title_by']);
		}
	}
	include tpl($config['template'] . '.html.php', 'default.html.php');
}
?>