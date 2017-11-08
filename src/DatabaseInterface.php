<?php
namespace Appe\SuGT;

interface DatabaseInterface
{

    /**
     * Writes to DB
     * @param array $data
     * @return bool true|false
     * @throws \Exception
     */
    public function write(array $data);    
}
