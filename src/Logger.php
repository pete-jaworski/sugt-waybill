<?php
namespace Appe\SuGT;

class Logger implements \Appe\SuGT\LoggerInterface
{
    public function log($message)
    {
        echo "*** ".$message."\n";
    }
}
