<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \Apple\Apple;

@session_start();

Apple::setup('-----BEGIN PRIVATE KEY-----
MIGTAgEAMBMGByqGSM49AgEGCCqGSM49AwEHBHkwdwIBAQQg2g0XJFNxyIj9J2bJ
k/iALs2QSmdCKurOzJub2wDA0RWgCgYIKoZIzj0DAQehRANCAAQaSURhZrRFxooi
H0srbB9fWYMD6DOxJB4z45XBs40XZ3wS4GQZxMtdOxtFq4w88UvR5lcbNfHMCMvy
PEkrfoEo
-----END PRIVATE KEY-----', 'A6946HLC84', 'UYTCQKEADX', 'com.vonec.siwa.api', 'https://siwa.vonectech.com/socialite/apple/callback', 'https://siwa.vonectech.com/socialite/apple');

try {
    $_POST['code'] = 'cb8d709710ec84f569a60789bcba8c9a2.0.nrxrq.Tu8VE0yKKsm6403I7JaSyg';
    /*if (!isset($_POST['code'])) die('Authorization server returned an invalid code parameter');
    if (!isset($_POST['state']) || !isset($_SESSION['state']) || $_SESSION['state'] != $_POST['state']) die('Authorization server returned an invalid state parameter');
    if (isset($_REQUEST['error'])) die('Authorization server returned an error: ' . htmlspecialchars($_REQUEST['error']));*/

    $response = Apple::get_web_sign_in_callback($_POST['code']);

} catch (\Exception $e) {
    $_SESSION['error'] = $e->getMessage();
    header('Location: ' . Apple::$original_uri);
}

if ($response) {
    echo '<h3>Access Token Response</h3>';
    echo '<pre>';
    print_r($response);
    echo '</pre>';

    $claims = explode('.', $response['id_token'])[1];
    $claims = json_decode(base64_decode($claims), true);

    echo '<pre>';
    print_r($claims);
    echo '</pre>';
} else {
    echo '<h3>Invalid callback data</h3>';
}

