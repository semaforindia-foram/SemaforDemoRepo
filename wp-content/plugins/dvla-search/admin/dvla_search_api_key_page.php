<?php
function dvla_search_api_key_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <?= dvla_search_admin_header_html(); ?>
        <form action="options.php" method="post">
            <?php
            do_settings_sections('dvla_search_api_key');
            settings_fields( 'dvla_search_settings' );
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <div class="wrap">
        <h2>Account Status</h2>
        <?php if( get_option('dvla_search_api_key') ): ?>
        <?php
          $api_key = get_option('dvla_search_api_key');
          $account_content_json = wp_remote_get('https://dvlasearch.appspot.com/SearchCount?apikey='.$api_key)['body'];
          if( strpos($account_content_json, 'Invalid API Key') !== false ){
            $account_content_json = '{ "totalCredit": 0, "usedCredit": 0, "avgDailyUse": 0, "accountUsage": {} }';
            echo '<b class="error">Invalid API Key</b><br />';
          }
          $account_data = json_decode($account_content_json);
        ?>
        <b>Total Credit:</b> <?= number_format( $account_data->totalCredit ); ?><br />
        <b>Used Credit:</b> <?= number_format( $account_data->usedCredit ); ?><br />
        <b>Average Daily Use:</b> <?= number_format( $account_data->avgDailyUse ); ?><br />

      <?php else: ?>
        Not a DVLA Search user? You can sign up at <a href="https://dvlasearch.co.uk/dvla-api-obtaining-access/">https://dvlasearch.co.uk/dvla-api-obtaining-access/</a>
      <?php endif; ?>
    </div>
    <?php
}
