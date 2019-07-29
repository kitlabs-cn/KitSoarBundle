<?php
namespace Kit\SoarBundle\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class SoarDataCollector extends DataCollector
{
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data = [
            'method' => $request->getMethod(),
            'acceptable_content_types' => $request->getAcceptableContentTypes(),
        ];
    }
    
    public function reset()
    {
        $this->data = [];
    }
    
    public function getName()
    {
        return 'kit_soar.soar_collector';
    }
    
    // ...
}