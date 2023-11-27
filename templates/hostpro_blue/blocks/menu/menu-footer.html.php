<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
_func('hostpro');
?>
<div class="col-sm-4 widget-footer">
	<h4 class="widget-title">Quick Links</h4>
	<div class="row widget-content">
		<?php echo hostpro_menu_footer($menus, $level = -1, $id = ''); ?>
	</div>
</div>