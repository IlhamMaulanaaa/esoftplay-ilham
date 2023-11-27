<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
$placeholder = lang($config['caption']);
$value = '';
$parts = explode('|', $placeholder);
$is_search = ($Bbc->mod['name'] == 'content' && $Bbc->mod['task'] == 'search') ? true : false;

if ($is_search) 
{
  if (!empty($_SESSION['currSearch'])) 
  {
    $placeholder = $_SESSION['currSearch'];
    $value = $_SESSION['currSearch'];
  }
}
?>
<div class="col-sm-5 widget-footer">
  <h4 class="widget-title">
    <?php echo $config['template'] ?>
  </h4>
  <div class="row widget-content">
    <p>
      <?php echo $config['caption'] ?>
    </p>
    <form action="" class="input-group footer-subscribe-form" id="block_search_footer<?php echo $block->id ?>"
      role="form">
      <input type="text" name="footer" class="form-control">
      <span class="input-group-addon"><button type="submit" class="btn btn-primary">subscribe</button></span>
    </form>
  </div>
</div>
<script type="text/javascript">
  _Bbc(function ($) {
    $("#block_search_footer<?php echo $block->id ?>").submit(function (e) {
      e.preventDefault();
      var a = $('input[name="footer"]');
      if (a.val() == "") {
        alert("<?php echo lang('Please Insert Keyword!'); ?>");
        a.focus();
      } else {
        var b = _URL + 'search.htm';
        var c = encodeURIComponent(a.val());
        if (c.length > 12) {
          b += '?id=';
        } else {
          b += '/';
        }
        b += c;
        document.location.href = b;
      }
    })
  });
</script>