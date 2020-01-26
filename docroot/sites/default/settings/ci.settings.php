<?php
/**
 * Database configuration.
 */
$databases = [
    'default' =>
    [
      'default' =>
      [
        'database' => $db_name,
        'username' => '${drupal.db.username}',
        'password' => '${drupal.db.password}',
        'host' => '${drupal.db.host}',
        'port' => '${drupal.db.port}',
        'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
        'driver' => 'mysql',
        'prefix' => '',
      ],
    ],
  ];