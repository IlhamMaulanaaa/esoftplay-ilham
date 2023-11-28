<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');?>
<section class="row client-logos">
  <div class="container">
    <div class="row section-title text-center">
      <h2>
        <?php echo lang('Client Logos'); ?>
      </h2>
    </div>
    <div class="row">
      <?php
      $cat["list"] = array_reverse($cat["list"]);
      foreach ($cat['list'] as $item) 
      {
        ?>
        <div class="col-sm-2 client-logo">
          <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>" data-toggle="tooltip"
            data-placement="top" title="" data-original-title="<?php echo $item['title'] ?>">
            <img class="logos" src="<?php echo $item['image'] ?>" alt="<?php echo $item['title'] ?>">
          </a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>