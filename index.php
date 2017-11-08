<?php
require_once 'vendor/autoload.php';

$logger = new Appe\SuGT\Logger();
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

$waybill = new \Appe\SuGT\WaybillGenerator(
        new \Appe\SuGT\SuGT(new \COM("InsERT.gt"), $logger),
        new \Appe\SuGT\DPD(new \Appe\SuGT\MSSQL())
        );


print_r($waybill->generate('FS 5/2017'));