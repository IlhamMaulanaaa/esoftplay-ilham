<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');?>
<div class="col-sm-3 media-left">
  <?php
  if (!empty($config['is_link'])) 
  {
    ?>
    <a href="<?php echo $config['link']?>" class="media-object"><img class="logoTOF" src="<?php echo $config['image']?>" alt="HostPro Logo"></a>
    <?php
  }else
  {
    ?>
    <a href="<?php echo $config['link']?>" class="media-object"><img class="logoTOF" src="<?php echo $config['image']?>" alt="HostPro Logo"></a>
    <?php
  }
  ?>
</div>

