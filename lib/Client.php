<?php

namespace Pingster;

use Pingster\Api\WppconnectApi;
use Pingster\Configuration;
use GuzzleHttp\Client as GuzzleClient;

class Client
{
    private $wppconnectApi;

    public function __construct(array $config = [])
    {
        $configuration = new Configuration();

        if (isset($config['base_url'])) {
            $configuration->setHost($config['base_url']);
        }
        if (isset($config['client_id'])) {
            $configuration->setClientId($config['client_id']);
        }
        if (isset($config['secret_id'])) {
            $configuration->setSecretId($config['secret_id']);
        }
        if (isset($config['access_token'])) {
            $configuration->setAccessToken($config['access_token']);
        }

        $this->wppconnectApi = new WppconnectApi(new GuzzleClient(), $configuration);
    }

    public function sendMessage(string $sessionId, array $data)
    {
        return $this->wppconnectApi->sendMessage($sessionId, $data);
    }

    // Tambahkan method lain sesuai kebutuhan
}