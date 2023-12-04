<?php

namespace Te4g\DockerClient;

require __DIR__ . '/../vendor/autoload.php';

use Vendor\Library\Generated\Client as DockerGeneratedClient;
use Symfony\Component\HttpClient\Psr18Client;

final class DockerClient
{
    public static function create(string $baseUri = 'http://localhost', string $socketPath = '/var/run/docker.sock'): DockerGeneratedClient
    {
        $httpClient = (new Psr18Client())->withOptions([
            'base_uri' => $baseUri,
            'bindto' => $socketPath
        ]);

        return DockerGeneratedClient::create(httpClient: $httpClient);
    }
}
