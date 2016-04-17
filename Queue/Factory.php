<?php

namespace Nuclear\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string  $name
     * @return \Nuclear\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
