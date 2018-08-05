<?php

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * IMPORTANT NOTE:
 * This file may have been set to read-only by the Drupal installation program.
 * If you make changes to this file, be sure to protect it again after making
 * your modifications. Failure to remove write permissions to this file is a
 * security risk.
 */

/**
 * Database settings:
 */
 $databases = array();

/**
 * Location of the site configuration files.
 */
$config_directories = array();

/**
 * Settings:
 */

/**
 * The active installation profile.
 */
# $settings['install_profile'] = '';

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'Gu6OVG2veoRHdWhleQS2zehAWj1m9m9Pw6ZZ5GXcsFRJ8pB2-CUSu3Jrr3sfCyHu03w51sjhRA';

/**
 * Deployment identifier.
 */
# $settings['deployment_identifier'] = \Drupal::VERSION;

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * External access proxy settings:
 */
# $settings['http_client_config']['proxy']['http'] = 'http://proxy_user:proxy_pass@example.com:8080';
# $settings['http_client_config']['proxy']['https'] = 'http://proxy_user:proxy_pass@example.com:8080';
# $settings['http_client_config']['proxy']['no'] = ['127.0.0.1', 'localhost'];

/**
 * Reverse Proxy Configuration:
 */
# $settings['reverse_proxy'] = TRUE;

/**
 * Specify every reverse proxy IP address in your environment.
 * This setting is required if $settings['reverse_proxy'] is TRUE.
 */
# $settings['reverse_proxy_addresses'] = array('a.b.c.d', ...);

/**
 * Set this value if your proxy server sends the client IP in a header
 * other than X-Forwarded-For.
 */
# $settings['reverse_proxy_header'] = 'X_CLUSTER_CLIENT_IP';

/**
 * Set this value if your proxy server sends the client protocol in a header
 * other than X-Forwarded-Proto.
 */
# $settings['reverse_proxy_proto_header'] = 'X_FORWARDED_PROTO';

/**
 * Set this value if your proxy server sends the client protocol in a header
 * other than X-Forwarded-Host.
 */
# $settings['reverse_proxy_host_header'] = 'X_FORWARDED_HOST';

/**
 * Set this value if your proxy server sends the client protocol in a header
 * other than X-Forwarded-Port.
 */
# $settings['reverse_proxy_port_header'] = 'X_FORWARDED_PORT';

/**
 * Set this value if your proxy server sends the client protocol in a header
 * other than Forwarded.
 */
# $settings['reverse_proxy_forwarded_header'] = 'FORWARDED';

/**
 * Page caching:
 */
# $settings['omit_vary_cookie'] = TRUE;


/**
 * Cache TTL for client error (4xx) responses.
 */
# $settings['cache_ttl_4xx'] = 3600;


/**
 * Class Loader.
 */
# $settings['class_loader_auto_detect'] = FALSE;

/**
 * Authorized file system operations:
 */
# $settings['allow_authorize_operations'] = FALSE;

/**
 * Default mode for directories and files written by Drupal.
 */
# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;

/**
 * Public file base URL:
 */
# $settings['file_public_base_url'] = 'http://downloads.example.com/files';

/**
 * Public file path:
 */
# $settings['file_public_path'] = 'sites/default/files';

/**
 * Private file path:
 */
# $settings['file_private_path'] = '';

/**
 * Session write interval:
 */
# $settings['session_write_interval'] = 180;

/**
 * String overrides:
 */
# $settings['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );

/**
 * A custom theme for the offline page:
 */
# $settings['maintenance_theme'] = 'bartik';

/**
 * PHP settings:
 */
# ini_set('pcre.backtrack_limit', 200000);
# ini_set('pcre.recursion_limit', 200000);

/**
 * Active configuration settings.
 */
# $settings['bootstrap_config_storage'] = array('Drupal\Core\Config\BootstrapConfigStorageFactory', 'getFileStorage');

/**
 * Configuration overrides.
 */
# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';


# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';


/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * Load local development override configuration, if available.
 *
 * Use settings.local.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */
#
# if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
#   include $app_root . '/' . $site_path . '/settings.local.php';
# }
# note: we may end up making different configuration directories for
# different environments.  This is okay for now.
$config_directories['sync'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => '##DB##',
  'username' => '##USER##',
  'password' => '##PASS##',
  'prefix' => '',
  'host' => '##DBHOST##',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'standard';

$settings['entity_update_batch_size'] = 50;
