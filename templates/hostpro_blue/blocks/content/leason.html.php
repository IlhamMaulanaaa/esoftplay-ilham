<section class="row why-choose-us">
  <div class="container">
    <div class="row section-title text-center">
      <h2>
        <?php echo lang('Why Choose Us'); ?>
      </h2>
      <p>
        <?php echo lang('It has survived not only five centuries, but also the leap into electronic typesetting.'); ?>
      </p>
    </div>
    <div class="row">
      <?php
      $cat["list"] = array_reverse($cat["list"]);
      foreach ($cat['list'] as $index => $item) {
        ?>
        <div class="col-sm-6 col-md-4 why-to-choose">
          <div class="row wtc-inner text-center">
            <div class="row wtc-icon"><img class="img_wtc_icon" src="<?php echo $item['image'] ?>"
                alt="HostPro Service Icon"></div>
            <h2 class="h4 wtc-title">
              <?php echo $item['title'] ?>
            </h2>
            <p>
              <?php echo $item['content'] ?>
            </p>
            <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>" class="wtc-read-more">Read
              More</a>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>