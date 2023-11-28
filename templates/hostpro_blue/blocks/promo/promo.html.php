<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<div class="container promotion">
	<ul class="nav nav-tabs nav-justified hstab" role="tablist">
		<?php
		foreach ($cat['list'] as $index => $item) 
		{
			?>
			<li role="presentation" class="<?php echo $index == 0 ? 'active' : '' ?>"><a href="#hst-<?php echo $item['id'] ?>"
					aria-controls="hst-1" role="tab" data-toggle="tab" aria-expanded="false">
					<?php echo substr($item['title'], 0, 18) ?>
				</a></li>
			<?php
		}
		?>
	</ul>
	<div class="tab-content hst-contents">
		<?php
		foreach ($cat['list'] as $index => $item) 
		{
			?>
			<div role="tabpanel" class="tab-pane <?php echo $index == 0 ? 'active' : '' ?>" id="hst-<?php echo $item['id'] ?>">
				<div class="row">
					<div class="col-md-7">
						<h3 class="au-title"><strong>
								<?php echo $item['title'] ?>
							</strong></h3>
						<p>
							<?php echo $item["intro"] ?>
						</p>
						<a href="<?php echo content_link($item['id'], $item['title']); ?>" class="more-link"><?php echo $item['title'] ?> <i class="fa fa-angle-double-right"></i>
						</a>
						<div class="media service-quote">
							<div class="media-right">
								<span class="media-object"></span>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-plan">
						<div class="hst-plan row">
							<ul class="plan-list nav">
								<h3 class="text-center">comment</h3>
							<?php
							if(!empty($item['output_data']))
							{
								foreach ($item['output_data'] as $testimony) 
								{
									?>
									<li class="testimonials">
										<div class="media-left">
											<a href="#" class="media-object"><img src="<?php echo content_src($comment['image'], $is_imgsrc = false, $is_large_image = false); ?>" alt="HostPro Client image" class="img-circle"></a>
										</div>
										<div class="media-body">
											<p>
												<em>
													<?php echo $testimony['message'] ?>
												</em>
											</p>
											<h4>
												<?php echo $testimony['name'] ?>
											</h4>
											<h5>
												<?php echo $testimony['email'] ?>
											</h5>
										</div>
									</li>
									<?php
								}
							}else
							{
								echo '<h4 class="text-center" style="margin-top:40px;">No comments</h4>';
							}
							?>
							</ul>
							<div class="media hst-plan-price">
								<div class="media-center">
									<a href="<?php echo content_link($item['id'], $item['title']); ?>" class="btn btn-default col-md-12">
										<?php echo lang('more details'); ?>
									</a>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>