<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$config = $output['config'];
$arr		= $output['data']; ?>
<section class="row " id="hosting-services-tabs-section-trim">
	<div class="container">
		<div class="row section-title text-center ">
			<?php
			foreach ((array)$arr as $data) { ?>

				<div class="column">
					<?php echo (!empty($config['thumbnail']) && !empty($data['image'])) ? content_src($data['image'], ' class="img-thumbnail pull-top" title="' . $data['title'] . '"') : '';
					if ($config['rating']) {
					?>
						<div class=" no-both " id="rating-content-trim-hostpro">
							<?php echo rating($data['rating']); ?>
						</div>
				</div>
			<?php
					}
			?>
			<?php
				$link = content_link($data['id'], $data['title']);
			?>
			<?php
				if ($config['title']) {
					if ($config['title_link']) {
			?>
					<h2><a href="<?php echo $link; ?>" title="<?php echo $data['title']; ?>" id="title-link-trim-content"><?php echo $data['title']; ?></a></h2>
				<?php
					} else {
				?>
					<h2><?php echo $data['title']; ?></h2>
			<?php
					}
				}
			?>
			<p>
				<?php echo $data['content']; ?>
				<?php echo ($config['read_more']) ? '<a href="' . $link . '" class="readmore">' . lang('Read more') . '</a>' : ''; ?>
			</p>
			<?php

				if ($config['rating'] || $config['modified']) {

					if ($config['created'] || $config['author']) {
			?>

					<div class="row">
						<hr>
						<?php echo ($config['author']) ? '<div class="col-md-3"><span>' . lang('author') . $data['created_by_alias'] . '</span></div>' : ''; ?>
						<?php echo ($config['created']) ? '<div class="col-md-3 text-right"><span>' . lang('created') . content_date($data['created']) . '</span></div>' : ''; ?>
					<?php
					}

					?>

					<?php

					if (empty($data['revised'])) {
						$config['modified'] = 0;
					}
					if (!empty($config['modified'])) {
					?>
						<div class="col-md-3 no-left text-right">
							<em class="text-right pull-right"><?php echo lang('modified') . content_date($data['modified']); ?></em>
						</div>
					<?php
					}
					if ($config['tag']) {
						$r = content_category($data['id'], $config['tag_link']);
						echo '<div col-md-3>' . lang('Tags') . implode(' ', $r) . '</div>';
					}
					?>
					<div class="clearfix"></div>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</section>