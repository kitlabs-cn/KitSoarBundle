<?php
namespace Kit\SoarBundle\Service;

class SoarService
{
    private $clients;
    
    /**
     * 
     * @param array $clients
     */
    public function __construct($clients)
    {
        $this->clients = $clients;
    }
}