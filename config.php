<?php

//figures out where the file is

if ($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs/InfluencerJunk/public_html') {
    define('INCLUDES_FOLDER', dirname($_SERVER['DOCUMENT_ROOT']) . '/includes/');
    define('BASE_URL', 'http://localhost/');
    

} else {
    define('INCLUDES_FOLDER', dirname($_SERVER['DOCUMENT_ROOT']) . '/includes/');
    define('BASE_URL', 'https://influencerjunk.com/');
    

    
}

//commonly reused page elements

define('ELEMENT_HEADER', INCLUDES_FOLDER . 'header.php');
define('URL_STYLESHEET', BASE_URL . 'css/styles.css');


//credentials







