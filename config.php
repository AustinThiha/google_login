<?php 


// Database configuration
define('DB_HOST', 'MySQL_Database_Host');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
define('DB_USER_TBL', 'users');

// Google API configuration
// define('GOOGLE_CLIENT_ID', 'Insert_Google_Client_ID');
// define('GOOGLE_CLIENT_SECRET', 'Insert_Google_Client_Secret');
// define('GOOGLE_REDIRECT_URL', 'Callback_URL');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'Google/Google_Client.php';
require_once 'Google/contrib/Google_Oauth2Service.php';
 $google_client = new google_client();
 $google_client->setClientId('http://340981938997-copi0jr0t9phif6ldlbicegh7jnpfli1.apps.googleusercontent.com/');
 $google_client->setClientSecret('tbYT1P0YNzrkVpXm_jTrPmPV');
 $google_client->setRedirectUri('http://localhost/login_test/index.php');
 $google_oauthV2 = new Google_Oauth2Service($google_client);


 ?>