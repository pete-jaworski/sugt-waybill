<?php
namespace Appe\SuGT;

/**
 * DPD
 *
 * @author Piotr Jaworski
 */
class DPD implements \Appe\SuGT\CourierInterface
{
    /**
     * @var \Appe\SuGT\DatabaseInterface
     */
    protected $db;

    /**
     * Constructor
     * @param \Appe\SuGT\DatabaseInterface $db
     */
    public function __construct(\Appe\SuGT\DatabaseInterface $db)
    {
        $this->db = $db;
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
