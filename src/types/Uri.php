<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Types;

use MenyongMenying\MLibrary\Kucil\Http\Request\Types\Contracts\UriInterface;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;
use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class Uri implements UriInterface
{
    /**
     * Objek dari class 'MString'.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString 
     */
    private MString $string;

    /**
     * Objek dari class 'MObject'.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject 
     */
    private MObject $object;

    /**
     * Request URI.
     * @var string 
     */
    private string $data;

    public function __construct(MString $string, MObject $object)
    {
        $this->string = $string;
        $this->object = $object;
        if ($this->isWebRequest()) {
            $this->data = $this->parseUri($_SERVER['REQUEST_URI']);
        }
        return;    
    }

    public function getUri() :null|string
    {
        if ($this->object->isPropertyNotSet($this, 'data')) {
            return null;
        }    
        return $this->data;
    }

    private function parseUri(string $requestURI)
    {
        return parse_url($requestURI, PHP_URL_PATH);
    }

    private function isWebRequest() :bool
    {
        return isset($_SERVER);
    }
}