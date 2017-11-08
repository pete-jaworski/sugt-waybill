<?php
namespace Appe\SuGT;

/**
 * DPD
 *
 * @author Piotr Jaworski
 */
class DPD implements \Appe\SuGT\CourierInterface
{
    
    
    public function __construct()
    {
        
    }
    /**
     * Connects to Courier API
     * 
     * @param array $invoiceData
     * @return array|null
     * @throws \Exception
     */
    public function send(array $invoiceData)
    {
        return $invoiceData;
    }
}
