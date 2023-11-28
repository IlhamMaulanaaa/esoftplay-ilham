<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');?>
<div class="col-sm-5 widget-footer">
  <h4 class="widget-title"><?php echo $config['caption']?></h4>
  <div class="row widget-content">
    <p><?php echo $config['intro']?></p>
    <form method="post" action="" class="input-group footer-subscribe-form">
      <input type="email" name="email" class="form-control">
      <span class="input-group-addon"><button type="submit" class="btn btn-primary"><?php echo lang('subscribe');?></button></span>
    </form>
  </div>
</div>