<?php

require_once(realpath("vendor/autoload.php"));

use App\Model\Product;
use App\DB\Database;


$instanceProduct = new Product();
$instanceDatabase = new Database();