<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require('../vendor/autoload.php');

use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Contract;

$timeout = 10;
$link = new HttpProvider(new HttpRequestManager("http://192.168.1.8:8545", $timeout));
$web3 = new Web3($link);
$eth = $web3->eth;

$web3->clientVersion(function ($err, $version) {
    if ($err !== null) {
        return;
    }
    if (isset($version)) {
        echo 'Connected to Node II: ' . $version . " \n";
    }
});
$eth->blockNumber(function ($err, $data) {
    echo "Latest block number is: " . $data;
});
