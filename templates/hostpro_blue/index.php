<?php
if (!defined('_VALID_BBC'))
  exit('No direct script access allowed');

$admin = 'navbar-fixed-top fluid-navbar navbar-style1';
$is_admin = _ADMIN != '' ? true : false;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $sys->meta(); ?>
</head>

<body>
  <div id="page" class="site row">
    <main id="contents" class="site-contnts">
      <header id="header" class="site-header">
        <nav style="box-shadow: none;" class="navbar navbar-default <?php echo $is_admin ? '' : $admin ?>">
          <div class="container-fluid">
            <div class="navbar-header">
              <?php echo $sys->block_show('logo'); ?>
            </div>
            <div class="collapse navbar-collapse" id="main-nav">
              <?php echo $sys->block_show('top'); ?>
            </div>
          </div>
        </nav>
      </header>

      <?php echo $sys->block_show('header'); ?>
      <?php echo $sys->block_show('intro'); ?>
      <?php echo trim($Bbc->content); ?>
      <?php echo $sys->block_show('content_top'); ?>
      <?php echo $sys->block_show('content_bottom'); ?>
      <?php echo $sys->block_show('bottom'); ?>
    </main>
    <footer>
      <section class="row site-footer-bottom">
        <div class="container">
          <div class="row">
            <?php echo $sys->block_show('footer'); ?>
          </div>
        </div>
      </section>
    </footer>
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