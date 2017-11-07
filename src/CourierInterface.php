<?php
namespace Appe\SuGT;

interface CourierInterface
{
    /**
     * Connects to Courier API
     * 
     * @param array $invoiceData
     * @return array|null
     * @throws \Exception
     */
    public function send(array $invoiceData);
}
