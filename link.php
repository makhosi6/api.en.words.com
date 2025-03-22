<?php
$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/static';
symlink($targetFolder,$linkFolder);
echo 'Symlink completed ' . phpversion();
