<?php
  function dvla_search_admin_header_html() {
    $path_to_logo = plugins_url( 'DVLA-SEARCH-CLOUD-LOGO.jpg', __FILE__ );
?>
<div class="card">
  <img src="<?= $path_to_logo; ?>" />
  <div>
    The DVLA Search WordPress Plugin is powered by <a href="https://dvlasearch.co.uk/">https://dvlasearch.co.uk/</a>
  </div>
</div>
<?php } ?>
