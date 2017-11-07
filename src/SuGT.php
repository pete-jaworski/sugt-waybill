<?php
namespace Appe\SuGT;

/**
 * SuGT
 *
 * @author Piotr Jaworski
 */
class SuGT implements \Appe\SuGT\ERPInterface
{
    /**
     * Gets Invocie data
     * 
     * @param int $invoiceId
     * @return array|null
     * @throws \Exception
     */    
    public function getInvoiceData($invoiceId)
    {
        return array($invoiceId);
    }
}
