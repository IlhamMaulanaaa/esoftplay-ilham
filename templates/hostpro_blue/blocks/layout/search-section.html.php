<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$placeholder = lang($config['caption']);
$value       = '';
if (!empty($_SESSION['currSearch'])) {
	$placeholder = $_SESSION['currSearch'];
	$value       = $_SESSION['currSearch'];
}	
?>
<form method="post" class="row domain-search bg-pblue" id="block_search<?php echo $block->id ?>" action="" role="form">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2 class="form-title"> <strong><?php echo $placeholder; ?></strong></h2>
				<p>Search for your dream domain now</p>
			</div>	
			<div class="col-md-9">
				<div class="input-group">
					<input type="text" class="form-control input-sm  form-control-sm" name="keyword" value="<?php echo $value; ?>" placeholder="<?php echo $placeholder; ?>" />
					<span class="input-group-addon"><input type="submit" value="Search" class="btn btn-primary">
						<!-- <button class="btn btn-default btn-secondary input-sm form-control-sm" type="submit"><?php echo icon('search'); ?></button> -->
					</span>
				</div>
				<p>.com <strong>$8.95</strong>.net <strong>$7.95</strong>.org <strong>$9.95</strong>.club <strong>$0.99</strong></p>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	_Bbc(function($) {
		$("#block_search<?php echo $block->id ?>").submit(function(e) {
			e.preventDefault();
			var a = $('input[name="keyword"]');
			if (a.val() == "") {
				alert("<?php echo lang('Please Insert Keyword!'); ?>");
				a.focus();
			} else {
				var b = _URL + 'search.htm';
				var c = encodeURIComponent(a.val());
				if (c.length > 12) {
					b += '?id=';
				} else {
					b += '/';
				}
				b += c;
				document.location.href = b;
			}
		})
	});
</script>