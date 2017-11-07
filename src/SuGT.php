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
     * @var \Dotenv\Dotenv
     */
    protected $dotenv;

    /**
     * Constructor
     * 
     * @param \COM $com
     * @param \Appe\LoggerInterface $logger
     * @param \Dotenv\Dotenv $dotenv
     */
    public function __construct(
            \COM $com, 
            \Appe\LoggerInterface $logger, 
            \Dotenv\Dotenv $dotenv
    )
    {
        $this->com = $com;
        $this->dotenv = $dotenv;
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
