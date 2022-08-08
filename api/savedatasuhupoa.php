<?php
require '../contract/contract.php';
require '../config/connectionnode2.php';

use Web3\Contract;

$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d H:i:s.v');
echo ($timestamp . " \n");
$eth = $web3->eth;

if (isset($_GET['sensorsuhuruang']) && isset($_GET['sensorsuhuair'])) {

    $sensorsuhuruang = $_GET['sensorsuhuruang'];
    $sensorsuhuair = $_GET['sensorsuhuair'];
    $a = 49;
    echo $size_a = ("Suhu air : " . $sensorsuhuruang . " ukuran data : ") . ($a + strlen(($sensorsuhuruang))) . " byte" . "\n";
    echo $size_b = ("Suhu ruang " . $sensorsuhuair . " ukuran data : ") . ($a + strlen(($sensorsuhuair))) . " byte" . "\n";

    $contract = new Contract($link, $abi_sm2);
    $fromAccount = '0x4f3ff57bf1ecff4c3c75ecff80a2e09b8afa7fbc'; // address node 2
    $contractAddress = $addresspoa_sm2new;

    $contract->at($contractAddress)->send('setsensorsuhuruang', $sensorsuhuruang, [
        'from' => $fromAccount,
        'gas' => '0x200b20'
    ], function ($err, $result) {
        if ($err !== null) {
            echo 'error';
        }
        if ($result) {

            echo  "\n" . 'Data Suhu Ruang Berhasil Disimpan : ';
            echo  "\n" . "Hash Transaksi : " . $result;
        }
        $transactionId = $result;
    });

    $contract->at($contractAddress)->send('setsensorsuhuair', $sensorsuhuair, [
        'from' => $fromAccount,
        'gas' => '0x200b20'
    ], function ($err, $result) {
        if ($err !== null) {
            echo 'error';
        }
        if ($result) {

            echo  "\n" . 'Data Suhu Air Berhasil Disimpan : ';
            echo  "\n" . "Hash Transaksi : " . $result;
        }
        $transactionId = $result;
    });
    echo (" \n");
    $az = 'Asia/Jakarta';
    $time = new DateTime("now", new DateTimeZone($az));
    $timestampnew = $time->format('Y-m-d H:i:s.v');
    echo ($timestampnew . " \n");
}
