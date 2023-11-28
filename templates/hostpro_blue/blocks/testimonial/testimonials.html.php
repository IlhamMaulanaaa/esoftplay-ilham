<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
if (!empty($output['data']) && is_array($output['data'])) {
	?>
	<section class="row customer-testimonial-section">
		<div class="container">
			<div class="row section-title text-center">
				<h2>Customer Testimonial</h2>
			</div>
			<div id="customer-testimonial" class="customer-testimonial carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators ct-indicator imgv">
					<?php
					foreach ($output['data'] as $key => $data) {
						$cls = $key === 0 ? ' active' : '';
						?>
						<li data-target="#customer-testimonial" data-slide-to="<?php echo $key ?>" class="<?php $cls ?>"><img
								src="<?php echo 'https://gravatar.com/avatar/' . md5($data['email']) ?>" alt="Customer Image"></li>
						<?php
					}
					?>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php
					foreach ($output['data'] as $key => $data) {
						$cls = $key === 0 ? ' active' : '';
						?>
						<div class="item carousel-item<?php echo $cls ?>" data-slide-no="<?php echo $key ?>">
							<p>
								<em>
									<?php echo $data['message'] ?>
								</em>
							</p>
							<h3 class="ct-customer-name">
								<?php echo $data['name'] ?>
							</h3>
							<h5 class="ct-customer-title">
								<?php echo $data['date'] ?>
							</h5>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<!-- Indicators -->
			<ul class="carousel-indicators ct-indicator dotv">
				<?php
				foreach ($output['data'] as $key => $data) {
					$cls = $key === 0 ? ' active' : '';
					?>
					<li data-target="#customer-testimonial" data-slide-to="<?php echo $key ?>" class="myCarousel-target<?php echo $cls ?>"></li>
					<?php
				}
				?>
			</ul>
		</div>
	</section>
	<?php
}