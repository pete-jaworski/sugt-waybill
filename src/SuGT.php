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
     * @var \COM 
     */
    protected $com;
    
    /**
     * @var \Appe\LoggerInterface 
     */
    protected $logger;

    /**
     * Constructor
     * 
     * @param \COM $com
     * @param \Appe\LoggerInterface $logger
     */
    public function __construct(
            \COM $com, 
            \Appe\SuGT\LoggerInterface $logger
    )
    {
        $this->com = $com;
        $this->logger = $logger;
    }

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
