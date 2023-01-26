<?php 

$base = 'php_laracast';

$router->define([
	"{$base}"=>'controllers/index.php',
	"{$base}/about"=>'controllers/about.php',
	"{$base}/about/culture"=>'controllers/about-culture.php',
	"{$base}/contact"=>'controllers/contact.php'
]);