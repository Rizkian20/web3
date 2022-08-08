<?php
require 'C:\xampp\htdocs\websiteblockchain\config\connectionnode2.php';
require 'C:\xampp\htdocs\websiteblockchain\contract\contract.php';

use Web3\Contract;

// $tz = 'Asia/Jakarta';
// $dt = new DateTime("now", new DateTimeZone($tz));
// $timestamp = $dt->format('Y-m-d H:i:s.v');
// echo ($timestamp . " \n");

$eth = $web3->eth;
$contract = new Contract($link, $abi_sm2);
$fromAccount = '0x01a5f82f9c3d1bafe6cf1903aa44fb8dcc1eeb86'; // address node 2
$contractAddress = $address_sm2new;

$contract->at($contractAddress)->call('getsensorsuhuruang', [
    'from' => $fromAccount,
    'gas' => '0x200b20'
], function ($err, $result) {
    if ($err !== null) {
        echo 'error';
    }
    if (isset($result)) {
        echo   str_replace("°C", '', $result[0]) . " °C";
        echo "\n";
    }
    $transactionId = $result;
});

$contract->at($contractAddress)->call('getsensorsuhuair', [
    'from' => $fromAccount,
    'gas' => '0x200b20'
], function ($err, $result) {
    if ($err !== null) {
        echo 'error';
    }
    if (isset($result)) {
        echo   str_replace("°C", '', $result[0]) . " °C";
        echo "\n";;
    }
    $transactionId = $result;
});

// $web3->eth()->blockNumber();

// echo (" \n");
// $az = 'Asia/Jakarta';
// $time = new DateTime("now", new DateTimeZone($az));
// $timestampnew = $time->format('Y-m-d H:i:s.v');
// echo ($timestampnew . " \n");
