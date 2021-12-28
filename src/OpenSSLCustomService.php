<?php

namespace AislanDener\OpenSSLCustom;

class OpenSSLCustomService
{
    private $key;
    private $method;

    public function __construct()
    {
        $this->key = config('open_ssl_custom.key');
        $this->method = config('open_ssl_custom.method');
    }

    /**
     * @param string $payload
     * @return false|string
     */
    public function encrypt(string $payload)
    {
        return @openssl_encrypt($payload, $this->method, $this->key);
    }

    /**
     * decrypt
     *
     * @param string $payload
     * @return string|false — The decrypted string on success or false on failure.
     */
    public function decrypt(string $payload)
    {
        return openssl_decrypt($payload, $this->method, $this->key);
    }
}
