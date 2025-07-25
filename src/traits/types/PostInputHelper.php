<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Traits\Types;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
trait PostInputHelper
{
    /**
     * Mengecek apakah $_POST telah diset.
     * @return boolean
     */
    private function isSetRequestPostInput() :bool
    {
        return isset($_POST);
    }
}