<?php

$dir = $_SERVER['DOCUMENT_ROOT'] . "/PWD2021/TP_QR/View/image/";
 
$path = (isset($_GET['path']) ? $_GET['path'] : false);
 
if (!preg_match('/^[a-z0-9]+.[a-z]{2,3}$/i', $path)) {
    $path = false;
} else {
    $file = $dir.$path;
}
 
if (!file_exists($file)) {
    $_SESSION['error'] = "The file is not here: ".$file;
    header('Location:index.php');
    exit;
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-type: Application/octet-stream");
    header("Content-Disposition: attachment; filename= ".$path);
    header("Content-Length: ".filesize($file));
    header("Content-Transfer-Encoding: binary");
    if (ob_get_level() > 0) {
        ob_end_flush();
    }
    readfile($file);
    exit;
} 
