<?php  if ( ! defined('_VALID_BBC')) exit('No direct script access allowed');

include_once _ROOT.'modules/content/_config.php';
_func('array');
_func('content');
$q = "SELECT c.id, c.par_id, c.type_id, t.title FROM bbc_content_cat AS c
LEFT JOIN bbc_content_cat_text AS t ON (t.cat_id=c.id AND t.lang_id=".lang_id().")
WHERE 1 ORDER BY c.par_id, t.title";
$r = $db->getAll($q);
$r_cat = array();
foreach($r AS $d)
{
	if(empty($r_cat[$d['type_id']]))
	{	
		$r_cat[$d['type_id']][] = array('id' => '-1', 'par_id' => '0', 'title' => '-- most popular --');
		$r_cat[$d['type_id']][] = array('id' => '-2', 'par_id' => '0', 'title' => '-- latest content --');
	}
	$r_cat[$d['type_id']][] = $d;
}
foreach($r_cat AS $i => $cat)
{
	$r_cat[$i] = array_path($cat);
}
$rr_type = $db->getAll("SELECT id, title FROM bbc_content_type ORDER BY id ASC");
$r_type = array_merge(
	array(
		array('id' => -2 ,'title' => '-- Insert IDs --'),
		array('id' => -1 ,'title' => '-- Related Content --')
		),
	$rr_type
	);
$cfg		= config_decode($data['config']);
$cat_id = 0;
if(!empty($cfg['cat_id']))
{
	$cat_id = $cfg['cat_id'];
	if($cfg['cat_id'] > 0 && empty($cfg['type_id']))
	{
		$type_id = intval($db->getOne("SELECT type_id FROM bbc_content_cat WHERE 'ID' In (".$cfg['cat_id'].")"));
	}else
	if(!empty($cfg['type_id']))
	{
		$type_id = $cfg['type_id'];
	}
}
if(empty($type_id))
{
	$type_id= $rr_type[0]['id'];
}
$kinds = array( -1 => 'All');
$r = content_kind();
foreach($r AS $i => $j)
{
	$kinds[$i] = $j;
}
$_setting = array(
	'kind_id'	=> array(
		'text'		=> 'Select Content',
		'type'		=> 'radio', 	
		'option'	=> $kinds,
		'default'	=> -1
		),
	'type_id'	=> array(
		'text'		=> 'Content Type',
		'type'		=> 'select',
		'attr'		=> 'onchange="z_set(this);" rel="content_type"',
		'option'	=> $r_type ,
		'default'	=> $type_id
		),	
	'cat_id'	=> array(
		'text'      => 'category',
		'tips'      => 'text to display under the input in small font-size',
		'add'       => 'additional text after the input',
		'help'      => 'popup tips to display right after the title',
		'type'      => 'checkbox',
		'option'    => (array)@$r_cat[$type_id],
		'default'   => 1,
		'attr'			=> 'onchange="z_cat(this);" rel="content_cat"',
		'mandatory' => 0, // is this field must be filled in (compulsory). Eg. 1 or 0
		'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
		),
	'ids'	=> array(
		'text'		=> 'Content IDs',
		'type'		=> 'text',
		'help'		=> 'Insert multiple content IDs separate by comma'
		),
	'popular'	=> array(
		'text'		=> 'Popular Whithin',
		'type'		=> 'text',
		'help'		=> 'Insert time duration to limit popular content within certain time (Eg. 2 MONTHS / 3 WEEKS / 1 YEAR) or leave it blank for most popular for all contents'
		),
	'limit_title'=> array(
		'text'		=> 'Limit Title',
		'type'		=> 'text',
		'default'	=> '75',
		'add'			=> 'chars/words',
		'help'		=> 'Limit the character to show to fix position in template, leave it zero to make it unlimited character'
		),
	'limit_title_by'=> array(
		'text'		=> 'Limit Title By',
		'type'		=> 'select',
		'option'	=> array('word', 'char'),
		'default'	=> 'char',
		'help'		=> 'please select betwen characters or words to limit'
		)
	);
pr($type_id);

$r = content_config_list();
unset($r['config']['template']);
$r['config']['tot_list']['default'] = 5;
$r['config']['intro']['text']		= 'Text';
$r['config']['intro']['option'] = array('intro', 'content', 'blank');
$r['config']['intro']['default']= 'intro';
$r['config']['intro']['tips']		= 'Select which field will use as description';
$_setting =  array_merge($_setting, $r['config']);
$rids = array_json($r_cat);
if(empty($rids))
{
	$rids = '{}';
}
?>
<script type="text/javascript">
var rids = (<?php echo $rids;?>);
var s_b = <?php echo $cat_id;?>;
function z_set(x)
{
	var $ = BS3;
	var o = $(x).closest('form');
	var a = $("[name='config\\[type_id\\]']", o).get(0);
	var b = $("[name='config\\[cat_id\\]\\[\\]']", o).get(); 
	var c = $("[name='config\\[ids\\]']", o).get(0);
	var d = $("[name='config\\[template\\]']", o).get(0);
	var e = $("[name='config\\[popular\\]']", o).get(0);
	z_b(e).hide();
	if($(a).val() == -2) {	// Insert IDs
		z_b(b).hide();
		z_b(c).fadeIn();
	}else
	if($(a).val() == -1) {	// Related Content
		z_b(b).fadeOut();
		z_b(c).fadeOut();
	} else { 								// Content Type
		b.options.length = 0;
		var d = rids[$(a).val()];
		var i = 0;
		for(f in d) {
			b.options[i] = new Option(d[f],f);
			if(f == s_b) {
				b.options[i].selected = true;
			}
			i++;
		}
		z_b(b).fadeIn();
		if ($(b).val()=='-1') {
			z_b(e).fadeIn();
		}else{
			z_b(e).hide();
		}
		z_b(c).hide();
	}
	function z_b(a)
	{
		return $(a).parent();
	};
};
function z_cat(a) {
	var $ = BS3;
	var o = $(a).closest('form');
	var b = $("[name='config\\[popular\\]']", o).get(0);
	var c = $("[name='config\\[type_id\\]']", o).get(0);
	if ($(a).val()== -1 && z_b(a).is(":visible") && $(c).val() > 0) {
		z_b(b).fadeIn();
	}else{
		z_b(b).fadeOut();
	}
	function z_b(a)
	{
		return $(a).parent();
	};
}
_Bbc(function($){
	$("[rel='content_type']").trigger("change").removeAttr("rel");
	$("[rel='content_cat']").trigger("change").removeAttr("rel");
});
</script>