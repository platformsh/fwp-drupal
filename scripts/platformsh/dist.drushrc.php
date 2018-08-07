<?php
/**
 * Example Drush configuration file for a Platform.sh Drupal site.
 */

if (PHP_SAPI === 'cli' && getenv('PLATFORM_APP_DIR')) {
  require getenv('PLATFORM_APP_DIR') . '/drush/platformsh_drush.inc';
  if ($siteUrl = _platformsh_drush_site_url()) {
    $options['uri'] = $siteUrl;
  }
}
