<?php
require_once 'vendor/autoload.php';


$waybill = new \Appe\SuGT\WaybillGenerator(
        new \Appe\SuGT\SuGT(),
        new \Appe\SuGT\DPD()
        );


print_r($waybill->generate(555));