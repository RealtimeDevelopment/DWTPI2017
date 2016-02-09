<?php

require_once (dirname(dirname(__FILE__)) . '/config.php');

// Default product category
define('API_ROOT_CATEGORY_ID', 20);
define('StoreAdminUser', 'staffadmin');
define('StoreAdminPassword', 'abcd1234QWERs');

if (preg_match('/prasit/', __FILE__)) {
    define('StoreApiUrl', 'http://localhost/b2b.fbtsports.com/public_html/');
    define('SOAPPushOrderUrl', 'http://localhost');
} else {
    define('StoreApiUrl', 'http://b2b.fbtsports.com/store/');
    define('SOAPPushOrderUrl', 'http://54.251.144.10/fbtifservice/OCService.asmx?WSDL');
}

function nDB () {
    $dbh    = new PDO('mysql:host='. DB_HOSTNAME .';dbname='. DB_USERNAME, DB_USERNAME, DB_PASSWORD, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        ));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $dbh;
    //ทดสอบ
}