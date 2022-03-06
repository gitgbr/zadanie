<?php

namespace App\Services;

use App\Interfaces\DataInterface;
use App\Interfaces\HandlerInterface;

class DataService implements DataInterface
{

    /**
     * @var HandlerInterface
     */
    private HandlerInterface $handler;

    /**
     * @param HandlerInterface $handler
     */
    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @return HandlerInterface
     */
    public function getPostHandler(): HandlerInterface
    {
        return $this->handler;
    }
}
