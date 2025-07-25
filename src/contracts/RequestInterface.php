<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Contracts;

use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;
use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;
use MenyongMenying\MLibrary\Kucil\Utilities\Json\Json;
use MenyongMenying\MLibrary\Kucil\Systems\File\File;
use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface RequestInterface
{
    /**
     * @param MString $string
     * @param MObject $object
     * @param Json $json
     * @param File $file
     * @return void
     */
    public function __construct(MString $string, MObject $object, Json $json, File $file);

    /**
     * Data input request 'JSON'.
     * @return null|Data
     */
    public function json() :null|Data;

    /**
     * Data input request 'GET'.
     * @return null|Data
     */
    public function get() :null|Data;

    /**
     * Data input request 'POST'.
     * @return null|Data
     */
    public function post() :null|Data;
}