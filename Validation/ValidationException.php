<?php

namespace Nuclear\Contracts\Validation;

use RuntimeException;
use Nuclear\Contracts\Support\MessageProvider;

class ValidationException extends RuntimeException
{
    /**
     * The message provider implementation.
     *
     * @var \Nuclear\Contracts\Support\MessageProvider
     */
    protected $provider;

    /**
     * Create a new validation exception instance.
     *
     * @param  \Nuclear\Contracts\Support\MessageProvider  $provider
     * @return void
     */
    public function __construct(MessageProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Get the validation error message provider.
     *
     * @return \Nuclear\Contracts\Support\MessageBag
     */
    public function errors()
    {
        return $this->provider->getMessageBag();
    }

    /**
     * Get the validation error message provider.
     *
     * @return \Nuclear\Contracts\Support\MessageProvider
     */
    public function getMessageProvider()
    {
        return $this->provider;
    }
}
