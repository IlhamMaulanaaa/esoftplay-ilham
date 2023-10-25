<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$placeholder  = lang($config['caption']);
$value        = '';
$parts        = explode('|', $placeholder);
$is_search    = ($Bbc->mod['name'] == 'content' && $Bbc->mod['task'] == 'search') ? true : false;

if ($is_search) {
  if (!empty($_SESSION['currSearch'])) {
    $placeholder  = $_SESSION['currSearch'];
    $value        = $_SESSION['currSearch'];
  }
}
?>

<form method="post" class="row domain-search bg-pblue" id="block_search<?php echo $block->id ?>" action="" role="form">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2 class="form-title">
          <?php
          if ($is_search) 
          {
            ?>
            <p>
              <?php echo lang('hasil pencarian') ?>
            </p>
            <?php echo '<strong>' . $placeholder . '</strong>'; ?>
            <?php
          } else 
          {
            foreach ($parts as $key => $part) 
            {
              echo $key % 2 == 0 ? $part : '<strong>' . $part . '</strong>';
            }
          }
          ?>
        </h2>
      </div>
      <div class="col-md-9">
        <div class="input-group">
          <input type="text" class="form-control input-sm form-control-sm" name="keyword" value="<?php echo $value; ?>"
            placeholder="<?php echo str_replace(' | ', ' ', $placeholder); ?>" />
          <span class="input-group-addon"><input type="submit" value="<?php echo lang('Search'); ?>"class="btn btn-primary"></span>
        </div>
      </div>
    </div>
  </div>
</form>

<script type="text/javascript">
  _Bbc(function ($) {
    $("#block_search<?php echo $block->id ?>").submit(function (e) {
      e.preventDefault();
      var a = $('input[name="keyword"]');
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