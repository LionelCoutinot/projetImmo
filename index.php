<?php
require'model/error.php';
require'model/BienManager.php';


$bien_list= BienManager::getAllBiens();


 require 'views/indexView.php';
