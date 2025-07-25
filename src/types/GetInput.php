<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Types;

use MenyongMenying\MLibrary\Kucil\Http\Request\Bases\BaseInput;
use MenyongMenying\MLibrary\Kucil\Http\Request\Traits\Types\GetInputHelper;
use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;
use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class GetInput extends BaseInput
{
    use GetInputHelper;

    public function __construct(MObject $object)
    {
        parent::__construct($object);
        $this->setDataInput();
        return;
    }
    
    public function setDataInput() :void
    {
        if ($this->isSetRequestGetInput()) {
            $this->data = new Data($_GET);
            return;
        }
        $this->data = new Data();
        return;
    }

    public function getDataInput() :null|Data
    {
        if ($this->isSetDataInput()) {
            return $this->data;
        }
        return null;
    }
}