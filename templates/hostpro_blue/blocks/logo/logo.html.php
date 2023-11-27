<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
if (!empty($config['is_link'])) 
{
	?>
	<a class="navbar-brand" href="<?php echo $output['link']; ?>" title="<?php echo $output['title']; ?>" <?php echo $output['attribute']; ?>>
		<?php echo image($output['image'], $output['size'], 'alt="' . $output['title'] . '" title="' . $output['title'] . '" class="logo-img"'); ?>
	</a>
	<?php
} else 
{
	?>
	<div class="navbar-brand">
		<?php echo image($output['image'], $output['size'], 'alt="' . $output['title'] . '" title="' . $output['title'] . '"' . $output['attribute']); ?>
	</div>
	<?php
}
?>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"
	aria-expanded="false">
	<span class="sr-only">
		<?php echo lang('Nav Opener'); ?>
	</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>