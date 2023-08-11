<?php
// +------------------------------------------------------------------------+
// | @author Mustafa Öztürk (mstfoztrk)
// | @author_url 1: http://www.duhovit.com
// | @author_url 2: http://codecanyon.net/user/mstfoztrk
// | @author_email: socialmaterial@hotmail.com
// +------------------------------------------------------------------------+
// | dizzy Support Creators Content Script
// | Copyright (c) 2021 mstfoztrk. All rights reserved.
// +------------------------------------------------------------------------+
// Database Configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ralph');
define('DB_PASSWORD', 'RA2014boy!@#');
define('DB_DATABASE', 'data_fitsyn');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
mysqli_query($db, 'set character_set_results="utf8mb4"');
mysqli_query($db, "SET SESSION SQL_MODE=REPLACE(@@SQL_MODE, 'ONLY_FULL_GROUP_BY', '') ");
mysqli_query($db, "SET @@global.sql_mode= 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'; ");
$base_url = 'http://ec2-3-25-253-249.ap-southeast-2.compute.amazonaws.com/';
$serverDocumentRoot = $_SERVER['DOCUMENT_ROOT'];
$uploadFile = $serverDocumentRoot . '/uploads/files/';
$xVideos = $serverDocumentRoot . '/uploads/xvideos/';
$xImages = $serverDocumentRoot . '/uploads/pixel/';
$uploadCover = $serverDocumentRoot . '/uploads/covers/';
$uploadAvatar = $serverDocumentRoot . '/uploads/avatars/';
$uploadIconLogo = $serverDocumentRoot . '/img/logo/';
$uploadAdsImage = $serverDocumentRoot . '/uploads/spImages/';
$metaBaseUrl = $base_url;
$cookieName = 'fitsyn';
?>