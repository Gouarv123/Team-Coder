<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '611693323128-o98gubtsqqa7m76q6rbhkn7p3g6dsa6m.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'UqAbtTHCYrJVUpwysAz_Se4e'; //Google client secret
$redirectURL = 'WEBSITE URL'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>