<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require('C:\xampp\htdocs\websiteblockchain\vendor\autoload.php');

use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Contract;

$timeout = 10;
$link = new HttpProvider(new HttpRequestManager("http://192.168.1.13:8545", $timeout));
$web3 = new Web3($link);
