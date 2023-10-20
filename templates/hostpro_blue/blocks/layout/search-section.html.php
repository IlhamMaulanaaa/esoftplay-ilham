<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$placeholder = lang($config['caption']);
$value = '';
$parts = explode('|', lang($config['caption']));
$isBold = false;
$teks = "Ini adalah | contoh | string dengan | karakter | pipa";
$teks_tanpa_pipa = str_replace('|', '', $placeholder);

if ($Bbc->mod['name'] == 'content' && $Bbc->mod['task'] == 'search') {
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
        if ($Bbc->mod['name'] == 'content' && $Bbc->mod['task'] == 'search') {
        ?>
          <h2 class="form-title"> <?php echo '<strong>' . $placeholder . '</strong>'; ?></h2>
          <?php
        } else {
          foreach ($parts as $part) {
            if ($isBold) {
          ?>
              <h2 class="form-title"> <?php echo '<strong>' . $part . '</strong>'; ?></h2>
            <?php
              $isBold = false;
            } else {
            ?>
              <h2 class="form-title"> <?php echo $part; ?></h2>
        <?php
              $isBold = true;
            }
          }
        }
        ?>
        <?php
        if ($Bbc->mod['name'] == 'content' && $Bbc->mod['task'] == 'search') {
        ?>
          <p>hasil pencarian</p>
        <?php
        }
        ?>
      </div>
      <div class="col-md-9">
        <div class="input-group">
          <input type="text" class="form-control input-sm form-control-sm" name="keyword" value="<?php echo $value; ?>" placeholder="<?php echo $teks_tanpa_pipa; ?>" />
          <span class="input-group-addon"><input type="submit" value="Search" class="btn btn-primary">
          </span>
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