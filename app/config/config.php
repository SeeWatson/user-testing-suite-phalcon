<?php
if($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1'){
  $database = array(
      'adapter'     => 'Mysql',
      'host'        => 'localhost',
      'username'    => 'root',
      'password'    => 'mysql',
      'dbname'      => 'phalcon',
  );
} else {
  $database = array(
      'adapter'     => 'Mysql',
      'host'        => 'localhost',
      'username'    => 'root',
      'password'    => 'mysql',
      'dbname'      => 'phalcon',
  );
}

return new \Phalcon\Config(array(
    'database' => $database,
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/dev/phalcon/',
    )
));
