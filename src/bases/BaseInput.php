<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Bases;

use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;
use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
abstract class BaseInput
{
    /**
     * Data input request.
     * @var null|Data 
     */
    protected null|Data $data;

    /**
     * Objek dari class 'MObject'.
     * @var null|\MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject 
     */
    protected null|MObject $object;

    public function __construct(MObject $object)
    {
        $this->object = $object;
        return;
    }
 
    /**
     * Mengecek apakah property $this->data sudah diset.
     * @return boolean
     */
    public function isSetDataInput() :bool
    {
        return !$this->object->isPropertyNotSet($this, 'data');
    }

    abstract public function setDataInput() :void;

    abstract public function getDataInput() :null|Data;
}