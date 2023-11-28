<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
foreach ($cat['list'] as $index => $item) 
{
  ?>
  <div class="col-sm-3 widget-footer">
    <h4 class="widget-title">
      <?php echo $item['title'] ?>
    </h4>
    <div class="row widget-content">
      <p>
        <?php echo $item['intro'] ?>
      </p>
      <?php echo $item['content'] ?>
    </div>
  </div>
  <?php
}