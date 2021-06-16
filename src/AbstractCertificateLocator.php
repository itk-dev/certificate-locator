<?php

namespace ItkDev\CertificateLocator;

abstract class AbstractCertificateLocator implements CertificateLocatorInterface
{
    private $passphrase;

    /**
     * AbstractCertificateLocator constructor.
     *
     * @param string $passphrases
     */
    public function __construct(string $passphrases = '')
    {
        $this->passphrase = $passphrases;
    }

    /**
     * {@inheritDoc}
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPassphrase(): bool
    {
        return empty($this->passphrase);
    }
}
