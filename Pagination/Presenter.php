<?php

namespace Nuclear\Contracts\Pagination;

interface Presenter
{
    /**
     * Render the given paginator.
     *
     * @return \Nuclear\Contracts\Support\Htmlable|string
     */
    public function render();

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages();
}
