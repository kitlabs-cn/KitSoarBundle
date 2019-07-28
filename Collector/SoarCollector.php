<?php
namespace Kit\SoarBundle\Collector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class SoarCollector extends DataCollector
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