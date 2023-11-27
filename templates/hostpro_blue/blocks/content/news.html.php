<section class="row latest-blogs">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Latest from Blog</h2>
    </div>
    <div class="row">
      <?php
      foreach ($cat['list'] as $item) 
      {
        ?>
        <div class="col-sm-4 latest-post">
          <?php
          ?>
          <img src="<?php echo $item['image'] ?>" alt="A galley of type and scrambled it to make a type."
            class="img-responsive">
          <div class="lp-inner row">
            <ul class="lp-meta list-unstyled">
              <li class="lp-cat"><em>
                  <?php echo $item['intro'] ?>
                </em></a></li>
              <li class="lp-date"><a href="#">
                  <?php echo substr($item['created'], 0, 10); ?>
                </a></li>
            </ul>
            <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>">
              <h2 class="lp-title">
                <?php echo $item['title'] ?>
              </h2>
            </a>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>