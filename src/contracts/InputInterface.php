<?php

namespace MenyongMenying\MLibrary\Kucil\Http\Request\Contracts;

use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface InputInterface
{
    /**
     * Set data input request.
     * @return void
     */
    public function setDataInput() :void;

    /**
     * Meneruskan data input request.
     * @return null|Data
     */
    public function getDataInput() :null|Data;
}