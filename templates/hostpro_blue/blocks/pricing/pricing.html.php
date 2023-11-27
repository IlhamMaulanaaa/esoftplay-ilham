<?php
$color = array('green', 'primary', 'blue');
$indexcolor = 0; 
?>

<section class="row pricing-tabs-section">
  <div class="container">
    <div class="row section-title text-center">
      <h2>Pricing</h2>
    </div>
    <ul class="nav nav-tabs pricing-tab" role="tablist">
      <?php
      foreach ($cat_results as $index => $cat) 
      {
        ?>
        <li role="presentation" class="<?php echo $index == 0 ? 'active' : '' ?>">
          <a href="#pricing-tab<?php echo $index + 1 ?>" aria-controls="pricing-tab<?php echo $index + 1 ?>"
            role="tab" data-toggle="tab">
            <?php echo $cat['title'] ?>
          </a>
        </li>
        <?php
      }
      ?>
    </ul>
    <div class="tab-content pricing-tab-contents">
      <?php
      foreach ($cat_results as $index => $cat) 
      {
        ?>
        <div role="tabpanel" class="tab-pane <?php echo $index == 0 ? 'active' : '' ?> fade in"
          id="pricing-tab<?php echo $index + 1 ?>">
          <?php
          foreach ($cat['list'] as $innerIndex => $item) 
          {
            $current_color = $color[$indexcolor % count($color)];
            $indexcolor++;
            ?>
            <div class="col-sm-4 pricing-plan <?php echo $current_color; ?>">
              <div class="pp-inner row">
                <h2 class="h4 pp-title"><?php echo $item['title'] ?></h2>
                <ul class="nav pp-list">
                  <li><?php echo $item['intro'] ?></li>
                </ul>
                <div class="media hst-plan-price">
                  <div class="media-body">
                    <span class="price"><sup>$ </sup>240 <sub>monthly</sub></span>
                  </div>
                  <div class="media-right"><a href="#" class="btn btn-default">choose plan</a></div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>
