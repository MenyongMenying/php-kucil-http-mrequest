<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Types\Helpers;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
trait GetInputHelper
{
    /**
     * Mengecek apakah $_GET telah diset.
     * @return boolean
     */
    private function isSetRequestGetInput() :bool
    {
        return isset($_GET);
    }
}