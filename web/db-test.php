<?php

/**
 * Database Connection Tester
 * A quick-and-dirty standalone script for checking PHP’s connection to a
 * MySQL (or MariaDB) or PostgreSQL database.
 *
 * To use, enter the settings below and run the following from your terminal:
 * ```
 * php -f db-test.php
 * ```
 */

$driver = 'mysql'; // 'mysql' or 'pgsql'
$database = 'aethon';
$username = 'nitro';
$password = 'nitro';
$host = 'mysql-5.7-3306.database.nitro';
$port = $driver === 'mysql' ? 3306 : 5432;

/**
 * Ignore the stuff below this line.
 */
$numTables = 0;

echo "------------------------------------------------\n";
echo "Database Connection Test\n";
echo "PHP ".PHP_VERSION."\n";
echo "DB driver: $driver\n";
echo "------------------------------------------------\n";

if ($driver === 'mysql') {
	$connection = mysqli_connect($host, $username, $password, null, $port)
		or die("🚫 Unable to Connect to '$host'.\n\n");
	mysqli_select_db($connection, $database)
		or die("🚫 Connected but could not open db '$database'.\n\n");
	$result = mysqli_query($connection, "SHOW TABLES FROM $database");

	if ($result === false) {
		die("🚫 Couldn’t query '$database'.\n\n");
	}

	while($table = mysqli_fetch_array($result)) {
		$numTables++;
		//echo $table[0]."\n";
	}
} elseif ($driver === 'pgsql') {
	$connection = pg_connect("host=$host dbname=$database user=$username password=$password port=$port")
		or die("🚫 Unable to Connect to '$host'.\n\n");
	$result = pg_query(
		$connection,
		"SELECT table_schema || '.' || table_name
			   FROM information_schema.tables
			   WHERE table_type = 'BASE TABLE'
			   AND table_schema NOT IN ('pg_catalog', 'information_schema');
		"
	);

	if ($result === false) {
		die("🚫 Couldn’t query '$database'.\n\n");
	}

	while($table = pg_fetch_array($result)) {
		$numTables++;
		//echo $table[0]."\n";
	}
} else {
	die("⛔ Invalid driver `$driver`; must be `mysql` or `pgsql`.\n\n");
}

if (!$numTables) {
	echo "🤷‍️ Connected but no tables found.\n\n";
} else {
	echo "👍 Connected and found $numTables tables.\n\n";
}