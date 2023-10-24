<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) 
{
  ?>
  <div class="home-slider">
    <?php
    foreach ($output['images'] as $key => $dt) 
    {
      $cls = $key ? '' : ' active';
      ?>
      <div class="item" data-slide="<?php echo $dt['image']; ?>">
        <div class="container">php
          <div class="row">
            <div class="col-sm-11 col-md-8 col-lg-7">
              <h2 class="slide-title"><strong><?php echo $dt['title']; ?></strong></h2>
              <p><?php echo $dt['description']; ?></p>
              <?php
              if ($dt['link']) 
              {
                ?>
                <a href="<?php echo $dt['link']; ?>" class="btn btn-primary"><?php echo lang('Learn More'); ?></a>
                <?php
              }
              ?>
            </div>
          </div>
        </div>  
      </div>
      <?php
    } 
    ?>
  </div>
  <?php
}
