<?php
require '../contract/contract.php';
require '../config/connectionnode1.php';

use Web3\Contract;

$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d H:i:s.v');
echo ($timestamp . " \n");
$eth = $web3->eth;
if (isset($_GET['sensorU1']) && isset($_GET['sensorU2']) && isset($_GET['sensorU3']) && isset($_GET['sensorU4'])) {

    $sensorU1 = $_GET['sensorU1'];
    $sensorU2 = $_GET['sensorU2'];
    $sensorU3 = $_GET['sensorU3'];
    $sensorU4 = $_GET['sensorU4'];
    $a = 49;
    echo $size_a = ("Tinggi tanaman 1 : " . $sensorU1 . " ukuran data : ") . ($a + strlen(($sensorU1))) . " byte" . "\n";
    echo $size_b = ("Tinggi tanaman 2 : " . $sensorU2 . " ukuran data : ") . ($a + strlen(($sensorU2))) . " byte" . "\n";
    echo $size_c = ("Tinggi tanaman 3 : " . $sensorU3 . " ukuran data : ") . ($a + strlen(($sensorU3))) . " byte" . "\n";
    echo $size_d = ("Tinggi tanaman 4 : " . $sensorU4 . " ukuran data : ") . ($a + strlen(($sensorU4))) . " byte" . "\n";

    $contract = new Contract($link, $abi_sm1);
    $fromAccount = '0x4f3ff57bf1ecff4c3c75ecff80a2e09b8afa7fbc'; // address node 1 
    $contractAddress = $addresspoa_sm1new;

    $contract->at($contractAddress)->send('setsensorU1', $sensorU1, [
        'from' => $fromAccount,
        'gas' => '0x200b20'
    ], function ($err, $result) {
        if ($err !== null) {
            echo 'error';
        }
        if ($result) {

            echo  "\n" . 'Data Tinggi I Berhasil Disimpan : ';
            echo  "\n" . "Hash Transaksi : " . $result;
        }
        $transactionId = $result;
    });

    $contract->at($contractAddress)->send('setsensorU2', $sensorU2, [
        'from' => $fromAccount,
        'gas' => '0x200b20'
    ], function ($err, $result) {
        if ($err !== null) {
            echo 'error';
        }
        if ($result) {

            echo  "\n" . 'Data Tinggi II Berhasil Disimpan : ';
            echo  "\n" . "Hash Transaksi : " . $result;
        }
        $transactionId = $result;
    });

    $contract->at($contractAddress)->send('setsensorU3', $sensorU3, [
        'from' => $fromAccount,
        'gas' => '0x200b20'
    ], function ($err, $result) {
        if ($err !== null) {
            echo 'error';
        }
        if ($result) {

            echo  "\n" . 'Data Tinggi III Berhasil Disimpan : ';
            echo  "\n" . "Hash Transaksi : " . $result;
        }
        $transactionId = $result;
    });

    $contract->at($contractAddress)->send('setsensorU4', $sensorU4, [
        'from' => $fromAccount,
        'gas' => '0x200b20'
    ], function ($err, $result) {
        if ($err !== null) {
            echo 'error';
        }
        if ($result) {

            echo  "\n" . 'Data Tinggi IV Berhasil Disimpan : ';
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
