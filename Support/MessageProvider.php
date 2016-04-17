<?php

namespace Nuclear\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Nuclear\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
