# URLaraShort

Simple URL shortener with Laravel Framework
=================================================
by Onkar Sagare <omkarsagare184@gmail.com>

Setup

You need to have Apache server and MySQL server installed on your system.
Apache version
1. Clone this repository or download zip.
2. Import database file 
   Database file: ROOT/Docs/tinylinks.sql
3. Download the database file and import it in your server
4. Open ROOT/local/app/config/database.php to setup mysql database
   Edit Code for database setup:
```php
    'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'YOUR_DATABASE_NAME',
			'username'  => 'YOUR_USERNAME',
			'password'  => 'YOUR_PASSWORD',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
5. Open the url of the project. 
   For ex: http://localhost/URLaraShort

