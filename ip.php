<?php
{
$file = $_FILES['hidden'];

$fileName = $_FILES['hidden']['img']
$fileTmpName = $_FILES['hidden']['tmp_name']
$fileSize = $_FILES['hidden']['size']
$fileType = $_FILES['hidden']['type']

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','png','jpeg');
if ($fileSize < 50000)
$fileNameNew = uniqid('',true).".".$fileActualExt;
$fileDestination = 'files/'.$fileNameNew;
move_uploaded_file($fileTmpName,$fileDestination);
}