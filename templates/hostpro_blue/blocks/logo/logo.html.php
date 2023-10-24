<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<div class="navbar-header">
	<?php
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
		<div class="logo_whitout_link">
			<?php echo image($output['image'], $output['size'], 'alt="' . $output['title'] . '" title="' . $output['title'] . '"' . $output['attribute']); ?>
		</div>
		<?php
	}
	?>
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"
		aria-expanded="false">
		<span class="sr-only">Nav Opener</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
</div>