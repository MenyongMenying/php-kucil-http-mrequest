<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Types;

use MenyongMenying\MLibrary\Kucil\Http\Request\Types\Configs\JsonInputConfig;
use MenyongMenying\MLibrary\Kucil\Http\Request\Types\Contracts\InputInterface;
use MenyongMenying\MLibrary\Kucil\Http\Request\Types\Helpers\JsonInputHelper;
use MenyongMenying\MLibrary\Kucil\Http\Request\Types\Input;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;
use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;
use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;
use MenyongMenying\MLibrary\Kucil\Utilities\Json\Json;
use MenyongMenying\MLibrary\Kucil\Systems\File\File;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class JsonInput extends Input implements InputInterface
{
    use JsonInputHelper;

    /**
     * Objek dari class 'MString'.
     * @var MString 
     */
    private MString $string;

    /**
     * Objek dari class 'Json'.
     * @var Json 
     */
    private Json $json;

    /**
     * Objek dari class 'File'.
     * @var File 
     */
    private File $file;

    public function __construct(MString $string, MObject $object, Json $json, File $file)
    {
        parent::__construct($object);
        $this->string = $string;
        $this->json = $json;
        $this->file = $file;
        $this->setDataInput();
        return;
    }

    public function setDataInput() :void
    {
        $this->data = $this->getDecodedDataInput($this->getRawDataInput(JsonInputConfig::SOURCE));        
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