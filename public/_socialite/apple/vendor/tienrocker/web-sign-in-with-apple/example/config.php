<?php
echo "test";
exit;
require_once __DIR__ . '/vendor/autoload.php';

use \Apple\Apple;

@session_start();

Apple::setup('-----BEGIN PRIVATE KEY-----
MIGTAgEAMBMGByqGSM49AgEGCCqGSM49AwEHBHkwdwIBAQQg2g0XJFNxyIj9J2bJ
k/iALs2QSmdCKurOzJub2wDA0RWgCgYIKoZIzj0DAQehRANCAAQaSURhZrRFxooi
H0srbB9fWYMD6DOxJB4z45XBs40XZ3wS4GQZxMtdOxtFq4w88UvR5lcbNfHMCMvy
PEkrfoEo
-----END PRIVATE KEY-----', 'A6946HLC84', 'UYTCQKEADX', 'com.vonec.siwa.api', 'https://siwa.vonectech.com/socialite/apple/callback', 'https://siwa.vonectech.com/socialite/apple');
