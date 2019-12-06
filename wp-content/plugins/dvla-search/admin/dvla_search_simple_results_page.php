<?php
function dvla_search_simple_results_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <?= dvla_search_admin_header_html(); ?>
        <div>
          <h3>Configure Results Shown on Default Results Page</h3>
          When you use the widget with default results page, you can configure which fields you want to display here:
        </div>
        <form action="options.php" method="post">
            <?php
            do_settings_sections('dvla_search_field_options');
            settings_fields( 'dvla_search_settings_results_group' ); // $option_group
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <div class="wrap">
        <?php if( get_option('dvla_search_api_key') == '' ): ?>
        Not a DVLA Search user? You can sign up at <a href="https://dvlasearch.co.uk/dvla-api-obtaining-access/">https://dvlasearch.co.uk/dvla-api-obtaining-access/</a>
      <?php endif; ?>
    </div>
    <?php
}
