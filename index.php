<?php
require_once 'vendor/autoload.php';


$waybill = new \Appe\SuGT\WaybillGenerator(
        new \Appe\SuGT\SuGT(),
        new \Appe\SuGT\DPD()
        );

echo "ok 123";
print_r($waybill->generate(555));