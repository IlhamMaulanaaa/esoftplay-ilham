<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $sys->meta(); ?>
</head>

<body>
  <div id="page" class="site row">
    <main id="contents" class="site-contnts">
      <?php echo $sys->block_show('top'); ?>
      <?php echo $sys->block_show('header'); ?>
      <?php echo $sys->block_show('intro'); ?>
      <?php echo trim($Bbc->content); ?>
      <?php echo $sys->block_show('content_top'); ?>
      <?php echo $sys->block_show('content_bottom'); ?>
      <?php echo $sys->block_show('bottom'); ?>
    </main>
    <?php echo $sys->block_show('footer'); ?>
    <?php echo $sys->block_show('debug'); ?>
  </div>

  <script src="<?php echo _URL; ?>templates/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <?php
  $sys->link_js($sys->template_url . 'assets/vendors/owl/owl.carousel.min.js', false);
  $sys->link_js($sys->template_url . 'assets/vendors/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js', false);
  $sys->link_js($sys->template_url . 'assets/vendors/isotope.pkgd.min.js', false);
  $sys->link_js($sys->template_url . 'assets/vendors/imagesloaded.pkgd.min.js', false);
  $sys->link_js($sys->template_url . 'assets/js/hostpro.js', false);
  ?>

</body>

</html>