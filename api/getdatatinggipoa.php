<?php
require 'C:\xampp\htdocs\websiteblockchain\config\connectionnode1.php';
require 'C:\xampp\htdocs\websiteblockchain\contract\contract.php';

use Web3\Contract;

// $tz = 'Asia/Jakarta';
// $dt = new DateTime("now", new DateTimeZone($tz));
// $timestamp = $dt->format('Y-m-d H:i:s.v');
// echo ($timestamp . " \n");

$eth = $web3->eth;
$contract = new Contract($link, $abi_sm1);
$fromAccount = '0x4f3ff57bf1ecff4c3c75ecff80a2e09b8afa7fbc'; // address node 1
$contractAddress = $addresspoa_sm1new;

$contract->at($contractAddress)->call('getsensorU1', [
    'from' => $fromAccount,
    'gas' => '0x200b20'
], function ($err, $result) {
    if ($err !== null) {
        echo 'error';
    }
    if (isset($result)) {
        echo   str_replace("cm", '', $result[0]) . " cm";
        echo "\n";
    }
    $transactionId = $result;
});

$contract->at($contractAddress)->call('getsensorU2', [
    'from' => $fromAccount,
    'gas' => '0x200b20'
], function ($err, $result) {
    if ($err !== null) {
        echo 'error';
    }
    if (isset($result)) {
        echo   str_replace("cm", '', $result[0]) . " cm";
        echo "\n";
    }
    $transactionId = $result;
});

$contract->at($contractAddress)->call('getsensorU3', [
    'from' => $fromAccount,
    'gas' => '0x200b20'
], function ($err, $result) {
    if ($err !== null) {
        echo 'error';
    }
    if (isset($result)) {
        echo   str_replace("cm", '', $result[0]) . " cm";
        echo "\n";
    }
    $transactionId = $result;
});

$contract->at($contractAddress)->call('getsensorU4', [
    'from' => $fromAccount,
    'gas' => '0x200b20'
], function ($err, $result) {
    if ($err !== null) {
        echo 'error';
    }
    if (isset($result)) {
        echo   str_replace("cm", '', $result[0]) . " cm" . "\n";
        echo "\n";
    }
    $transactionId = $result;
});

// echo (" \n");
// $az = 'Asia/Jakarta';
// $time = new DateTime("now", new DateTimeZone($az));
// $timestampnew = $time->format('Y-m-d H:i:s.v');
// echo ($timestampnew . " \n");
