<?php
namespace Appe\SuGT;

/**
 * Description of ERPInterface
 *
 * @author Piotr Jaworski
 */
interface ERPInterface
{
    /**
     * Gets Invocie data
     * 
     * @param int $invoiceId
     * @return array|null
     * @throws \Exception
     */
    public function getInvoiceData($invoiceId);
}
