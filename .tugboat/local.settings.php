<?php
/**
 * @file
 * Local development override configuration feature.
 */

use Drupal\Component\Assertion\Handle;

global $_acsf_site_name;
$db_name = 'drupal8';
if (isset($_acsf_site_name)) {
  $db_name .= '_' . $_acsf_site_name;
}
/**
 * Database configuration.
 */
$databases = [
  'default' =>
  [
    'default' =>
    [
      [
        'database' => 'drupal8',
        'username' => 'drupal8',
        'password' => 'drupal8',
        'host' => 'database',
        'port' => '3306',
        'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
        'driver' => 'mysql',
        'prefix' => '',
      ],
    ],
  ],
];

$dir = dirname(DRUPAL_ROOT);

// Use development service parameters.
