<?php
foreach ($cat['list'] as $item) {
  ?>
  <style>
    .c2a-plan:before {
      background: url(<?php echo $item['image'] ?>) no-repeat fixed center center;
      content: '';
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-size: cover;
      opacity: 0.21;
    }
  </style>
  <section class="row c2a-plan">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6">
          <h2 class="h1 c2ap-title">
            <?php echo $item['title'] ?>
          </h2>
          <?php echo $item['content'] ?>
          <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>" class="btn btn-primary">View Plan</a>
        </div>
      </div>
    </div>
  </section>
  <?php
}
