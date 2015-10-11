<?php
/*
this is the main setup for the cody_pw postgres database
*/

'default' => 'pgsql',
'connections' => [
    'pgsql' => array(
        'driver'   => 'pgsql',      
        'host'     => 'localhost',
        'database' => 'cody_pw',
        'username' => 'postgres',
        'password' => '',
        'charset'  => 'utf8',
        'prefix'   => '',
        'schema'   => 'public',
     )
]

/* backup of old version
'postgresql' => [
    'read' => [
        'host' => '127.0.0.1:5432'
    ],
    'write' => [
        'host' => '127.0.0.1:5432'
    ],
    'driver'    => 'psql',
    'database'  => 'cody_pw',
    'username'  => 'postgres',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
],
*/