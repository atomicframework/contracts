<?php

namespace Nuclear\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string  $name
     * @return \Nuclear\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
