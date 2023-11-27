<?php
foreach ($cat['list'] as $item) 
{
  ?>
  <section class="row site-footer-top">
    <div class="container">
      <div class="row">
        <div class="media">
          <div class="col-sm-3 media-left">
            <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>" class="media-object"><img
                class="logoTOF" src="<?php echo $item['image'] ?>" alt="HostPro Logo">
              <?php echo lang('©');
              echo substr($item['created'], 0, 4); ?>
            </a>
          </div>
          <div class="col-sm-9 media-body">
            <p>
              <?php echo $item['intro'] ?> <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>">
                <?php echo $item['content'] ?>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
}
?>