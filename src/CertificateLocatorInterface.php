<?php

namespace ItkDev\CertificateLocator;

use ItkDev\Serviceplatformen\Certificate\Exception\CertificateLocatorException;

/**
 * Interface CertificateLocatorInterface
 */
interface CertificateLocatorInterface
{
    /**
     * Returns the absolute path to the certificate.
     *
     * @return string the absolute path to the certificate.
     *
     * @throws CertificateLocatorException
     */
    public function getAbsolutePathToCertificate(): string;

    /**
     * @return string
     */
    public function getPassphrase(): string;

    /**
     * @return bool true if passphrase is present else false.
     */
    public function hasPassphrase(): bool;
}
