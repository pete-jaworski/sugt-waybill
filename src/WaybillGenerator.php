<?php
namespace Appe\SuGT;

class WaybillGenerator
{
    /**
     * ERP
     * @var \Appe\ERPInterface 
     */
    protected $erp;
    
    /**
     * Courier
     * @var \Appe\CourierInterface 
     */
    protected $courer;

    /**
     * Constructor
     * 
     * @param \Appe\SuGT\ERPInterface $erp
     * @param \Appe\SuGT\CourierInterface $courier
     */
    public function __construct(
        \Appe\SuGT\ERPInterface $erp,
        \Appe\SuGT\CourierInterface $courier
    )
    {
        $this->erp = $erp;
        $this->courer = $courier;
    }
    
    
    /**
     * Generates Waybill
     * 
     * @param int $invoiceId
     * @return array|null
     */
    public function generate($invoiceId)
    {
        if(!$invoiceId){
            return null;
        }
        
        return $this->courer->send($this->erp->getInvoiceData($invoiceId));
        
    }
    
    
    
}
