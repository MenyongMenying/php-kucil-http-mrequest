<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Types\Contracts;

use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;
use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface UriInterface
{
    /**
     * @param  \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString $string 
     * @param  MObject                                                  $object 
     * @return void                                                             
     */
    public function __construct(MString $string, MObject $object);

    /**
     * Meneruskan request URI.
     * @return null|string Request URI.
     */
    public function getUri() :null|string;
}