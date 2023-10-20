<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) {
  $style = !empty($output['config']['fixsize']) ? ' style="width:' . @$output['cat']['width'] . 'px;height:' . @$output['cat']['height'] . 'px;overflow:hidden;"' : '';
?>
  <div id="imageslider<?php echo $block->id; ?>" <?php /*echo $style;*/ ?> class="carousel slide" data-ride="carousel">
    <?php
    if (!empty($output['config']['indicator']) && $count > 1) {
      echo '<ol class="carousel-indicators">';
      foreach ($output['images'] as $key => $value) {
        $cls = $key ? '' : ' class="active"';
        echo '<li data-target="#imageslider' . $block->id . '" data-slide-to="' . $key . '"' . $cls . '></li>';
      }
      echo '</ol>';
    } ?>
    <div class="home-slider" id="imageslider">
      <?php
      foreach ($output['images'] as $key => $dt) {
        $cls = $key ? '' : ' active';
      ?>
        <div class="item" data-slide="<?php echo $dt['image']; ?>">
          <div class="container">
            <div class="row">
              <div class="col-sm-11 col-md-8 col-lg-7">
                <h2 class="slide-title"> <strong><?php echo $dt['title']; ?></strong> </h2>
                <p><?php echo $dt['description']; ?></p>
                <?php if ($dt['link']) { ?>
                  <a href="<?php echo $dt['link']; ?>" class="btn btn-primary"> <?php echo $dt['title'] ?></a>
                <?php
                } else {
                  echo "";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      if (!empty($output['config']['control']) && $count > 1) {
      ?>
        <a class="left carousel-control" href="#imageslider<?php echo $block->id; ?>" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#imageslider<?php echo $block->id; ?>" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      <?php
      }
      ?>
    </div>
  <?php
}
