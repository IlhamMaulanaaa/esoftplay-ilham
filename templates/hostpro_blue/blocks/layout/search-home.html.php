<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$placeholder           = lang($config['caption']);
$value                        = '';
$parts                        = explode('|', $placeholder);
$is_admin                 = ($Bbc->mod['name'] == 'content' && $Bbc->mod['task'] == 'search') ? true :  false;  
$teks_tanpa_pipa  = str_replace('|', '', $placeholder);
$isBold                       = false;
if ($is_admin) {
  if (!empty($_SESSION['currSearch'])) {
    $placeholder = $_SESSION['currSearch'];
    $value = $_SESSION['currSearch'];
  }
}
?>

<form method="post" class="row domain-search bg-pblue" id="block_search<?php echo $block->id ?>" action="" role="form">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php
        if ($is_admin) 
        {
          ?>
          <p>hasil pencarian</p>
          <h2 class="form-title"> <?php echo '<strong>' . $placeholder . '</strong>'; ?></h2>
          <?php
        } else 
        {
          ?>
          <h2 class="form-title"> 
          <?php
          foreach ($parts as $part) 
          {
            if ($isBold) 
            {
              echo '<strong>' . $part . '</strong>'; 
              $isBold = false;
            } else 
            {
              echo $part; 
              $isBold = true;
            }
          }
          ?>
          </h2>
          <?php
        }
        ?>
      </div>
      <div class="col-md-9">
        <div class="input-group">
          <input type="text" class="form-control input-sm form-control-sm" name="keyword" value="<?php echo $value; ?>" placeholder="<?php echo $teks_tanpa_pipa; ?>" />
          <span class="input-group-addon"><input type="submit" value="Search" class="btn btn-primary"></span>
        </div>
      </div>
    </div>
  </div>
</form>

<script type="text/javascript">
  _Bbc(function($) {
    $("#block_search<?php echo $block->id ?>").submit(function(e) {
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