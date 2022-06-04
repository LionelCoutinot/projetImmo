<?php
require'model/error.php';
require'model/BienManager.php';
require'model/PhotosManager.php';
$id=$_GET['id'];

$bien = BienManager::getBienById($id);
$photos_list =PhotosManager::getImageById($id);

 require 'views/singleView.php';
