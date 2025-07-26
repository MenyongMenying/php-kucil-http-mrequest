<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Types\Helpers;

use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
trait JsonInputHelper
{
    /**
     * Meneruskan raw data input request.
     * @param  string $source Sumber raw data input request.
     * @return string
     */
    private function getRawDataInput(string $source) :string
    {
        return $this->file->get($source);
    }

    /**
     * Meneruskan data yang sudah didecode jika valid.
     * @param  string     $rawDataInput Data mentah.
     * @return null|Data
     */
    private function getDecodedDataInput(string $rawDataInput) :null|Data
    {
        if ($this->string->isWhitespaceOnly($rawDataInput)) {
            return new Data();
        }
        if ($this->json->isJson($rawDataInput)) {
            return new Data($this->json->decode($rawDataInput));
        }
        return null;
    }
}