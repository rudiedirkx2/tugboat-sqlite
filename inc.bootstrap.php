<?php

require 'env.php';
require __DIR__ . '/vendor/autoload.php';

// Connect to db
$db = db_sqlite::open(array('database' => DB_DIR . '/tugboat.sqlite3'));
if ( !$db ) {
	header('HTTP/1.1 500 Server error');
	exit("<p>No db...</p>");
}

$db->ensureSchema(require 'inc.schema.php');
db_generic_model::$_db = $db;

// Start UTF-8 everywhere, always
mb_internal_encoding('utf-8');
header('Content-type: text/html; charset=utf-8');
