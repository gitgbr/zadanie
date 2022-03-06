<?php

namespace App\Interfaces;

interface DataInterface
{
    /**
     * @return HandlerInterface
     */
    public function getPostHandler():HandlerInterface;
}
