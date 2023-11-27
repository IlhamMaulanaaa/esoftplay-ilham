<div class="container promotion">
  <ul class="nav nav-tabs nav-justified hstab" role="tablist">
    <?php
    foreach ($cat['list'] as $index => $item) 
    {
      ?>
      <li role="presentation" class="<?php echo $index == 0 ? 'active' : '' ?>"><a href="#hst-<?php echo $item['id'] ?>"
          aria-controls="hst-1" role="tab" data-toggle="tab" aria-expanded="false">
          <?php echo substr($item['title'], 0, 18) ?>
        </a></li>
      <?php
    }
    ?>
  </ul>
  <div class="tab-content hst-contents">
    <?php
    foreach ($cat['list'] as $index => $item) 
    {
      ?>
      <div role="tabpanel" class="tab-pane <?php echo $index == 0 ? 'active' : '' ?>" id="hst-<?php echo $item['id'] ?>">
        <div class="row">
          <div class="col-md-7">
            <h3 class="au-title"><strong>
                <?php echo $item['title'] ?>
              </strong></h3>
            <p>
              <?php echo $item["intro"] ?>
            </p>
            <a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>" class="more-link">
              <?php echo $item['title'] ?> <i class="fa fa-angle-double-right"></i>
            </a>
            <div class="media service-quote">
              <?php
              foreach ($item['output_data'] as $testimony) 
              {
                ?>
                <div class="media-left"><a href="#" class="media-object"><img
                      src="<?php echo 'https://gravatar.com/avatar/' . md5($testimony['email']) ?>"
                      alt="HostPro Client image" class="img-circle"></a></div>
                <div class="media-body">
                  <p><em>
                      <?php echo $testimony['message'] ?>
                    </em></p>
                  <h4>
                    <?php echo $testimony['name'] ?>
                  </h4>
                  <h5>
                    <?php echo $testimony['email'] ?>
                  </h5>
                </div>
                <?php
              }
              ?>
              <div class="media-right"><span class="media-object"><img src="<?php echo $item['output_data'] ? $config['image'] : ''?>"></span></div>
            </div>
          </div>
          <div class="col-md-5 col-plan">
            <div class="hst-plan row">
              <ul class="plan-list nav">
                <?php echo $item['content'] ?>
              </ul>
              <div class="media hst-plan-price">
                <div class="media-body">Price starting from'
                  <span class="price">$20/month'</span>
                </div>
                <div class="media-right"><a href="<?php echo 'index.php?mod=content.detail&id=' . $item['id'] ?>"
                    class="btn btn-default">
                    <?php echo lang('choose plan'); ?>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>