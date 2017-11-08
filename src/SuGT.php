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
     * @var \COM 
     */
    protected $subiektInstance;

    
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
        $this->com      = $com;
        $this->logger   = $logger;
        $this->com->Autentykacja       = 0; 
        $this->com->Serwer             = getenv('ECOMM_DB_SERVER');
        $this->com->Uzytkownik         = getenv('ECOMM_USER') ;
        $this->com->UzytkownikHaslo    = getenv('ECOMM_PASSWORD');
        $this->com->Baza               = getenv('ECOMM_DB_DB');
        $this->com->Operator           = getenv('ECOMM_OPERATOR_USERNAME');
        $this->com->OperatorHaslo      = getenv('ECOMM_OPERATOR_PASSWORD');
        $this->subiektInstance          = $this->com->Uruchom(0, 4);                
        $this->subiektInstance->MagazynId = getenv('ECOMM_WAREHOUSE_ID');        
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
        if(!$invoiceId){
            return null;
        }
        
        try {
            
            $fs = $this->subiektInstance->Dokumenty->Wczytaj($invoiceId);
            $items = array();
            
            
            
            foreach($fs->Pozycje as $pozycja){
                $items[] = array(
                    'TowarNazwa'        => (string)$pozycja->TowarNazwa,
                    'Ilosc'             => (string)$pozycja->Ilosc,
                );
            }
            
            $odbiorca = $this->subiektInstance->Kontrahenci->Wczytaj($fs->OdbiorcaId);
            
            return array(
                'ObiektId'          => $fs->ObiektId,
                'NumerPelny'        => $fs->NumerPelny,
                'Pozycje'           => $items,
                'Odbiorca'          => array(
                    'OdbiorcaId'        => (string)$fs->OdbiorcaId,
                    'Dostawa'    => array(
                        'AdrDostNazwa'          => $odbiorca->AdrDostNazwa,
                        'AdrDostMiejscowosc'    => $odbiorca->AdrDostMiejscowosc,
                        'AdrDostKodPocztowy'    => $odbiorca->AdrDostKodPocztowy,
                        'AdrDostUlica'          => $odbiorca->AdrDostUlica,
                        'AdrDostNrDomu'         => $odbiorca->AdrDostNrDomu,
                        'AdrDostNrLokalu'       => $odbiorca->AdrDostNrLokalu,   
                        'AdrDostPanstwo'        => $odbiorca->AdrDostPanstwo,  
                        'AdrDostWojewodztwo'    => $odbiorca->AdrDostWojewodztwo
                    )
                ),
                
               
            );
            
        } catch (\Exception $ex) {
            $this->logger->log("Invoice could not be get: ".$ex->getMessage());
        }
    }
}

