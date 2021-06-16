<?php

namespace ItkDev\CertificateLocator;

use InvalidArgumentException;

/**
 * Class FilesystemCertificateLocator
 */
class FilesystemCertificateLocator extends AbstractCertificateLocator implements CertificateLocatorInterface
{
    private $pathToCertificate;

    /**
     * FilesystemCertificateLocator constructor.
     *
     * @param string $pathToCertificate the absolute path to the certificate.
     * @param string $passphrase
     *
     * @throws InvalidArgumentException
     */
    public function __construct(string $pathToCertificate, string $passphrase = '')
    {
        $this->setPathToCertificate($pathToCertificate);
        parent::__construct($passphrase);
    }

    /**
     * @param string $pathToCertificate the absolute path to the certificate.
     *
     * @throws InvalidArgumentException
     */
    private function setPathToCertificate(string $pathToCertificate)
    {
        if (realpath($pathToCertificate) !== $pathToCertificate) {
            throw new InvalidArgumentException('The provided path is not absolute.');
        }

        if (!is_file($pathToCertificate)) {
            throw new InvalidArgumentException('No file exist at the provided path!');
        }

        $this->pathToCertificate = $pathToCertificate;
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePathToCertificate(): string
    {
        return $this->pathToCertificate;
    }
}
