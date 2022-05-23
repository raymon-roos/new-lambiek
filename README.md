# README

## Replacement website for lambiek.net

## Test instructions

Add a user to the MySQL server with the requisite privileges. In this project user
`bit_academy` has been used. 

Host the project from your server's docroot and navigate to it in your browser. 

This project uses an .htaccess with the following rules: 

	RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-f
	# RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php?url=$1 [NC,L,QSA]
	RewriteRule ^([a-z]*)$ index.php [NC,L,QSA]

### Dependencies 

PHP 8 or greater.

Http server with url rewriting support. Apache was used for this project. 

`MariaDB` or similar MySQL server. 

`npm install tailwindcss` (3.0.24 or greater)
