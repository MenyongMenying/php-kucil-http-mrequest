<?php

namespace MenyongMenying\MLibrary\Kucil\Http\MRequest;

use MenyongMenying\MLibrary\Kucil\System\MFile\MFile;
use MenyongMenying\MLibrary\Kucil\Utilities\MData\MData;
use MenyongMenying\MLibrary\Kucil\Utilities\MJson\MJson;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-01
 */
final class MRequestJson
{
    /**
     * Sumber data mentahan.
     */
    private const SOURCE = 'php://input';

    /**
     * Objek dari class 'MString'.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString 
     */
    private MString $mString;

    /**
     * Objek dari class 'MJson'.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MJson\MJson 
     */
    private MJson $mJson;

    /**
     * Objek dari class 'MFile'.
     * @var \MenyongMenying\MLibrary\Kucil\System\MFile\MFile 
     */
    private MFile $mFile;

    /**
     * Data dari request.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MData\MData 
     */
    private null|MData $data;

    /**
     * @param  \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString $mString 
     * @param  \MenyongMenying\MLibrary\Kucil\Utilities\MJson\MJson $mJson 
     * @param  \MenyongMenying\MLibrary\Kucil\System\MFile\MFile $mFile
     * @return void
     */
    public function __construct(MString $mString, MJson $mJson, MFile $mFile)
    {
        $this->mString = $mString;
        $this->mJson = $mJson;
        $this->mFile = $mFile;
        switch(true) {
            case $this->mString->isWhiteSpaceOnly($this->getRawData(self::SOURCE)):
                $this->data = new MData($this->mString);
                break;
            case $this->mJson->isJson($this->getRawData(self::SOURCE)):
                $this->data = new MData($this->mString, $this->mJson->decode($this->getRawData(self::SOURCE)));
                break;
            default:
                $this->data = null;
                break;
        }
        return;
    }

    /**
     * Meneruskan data mentah dari request.
     * @param  string $source Sumber data mentah.
     * @return string         Data mentahan.
     */
    public function getRawData(string $source) :null|string
    {
        return $this->mFile->get($source);
    }

    /**
     * Meneruskan data dari request.
     * @return null|\MenyongMenying\MLibrary\Kucil\Utilities\MData\MData 
     */
    public function getData() :null|MData
    {
        return $this->data;
    }
}