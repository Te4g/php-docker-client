<?php

namespace Vendor\Library\Generated\Endpoint;

class SwarmInspect extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/swarm';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\SwarmInspectNotFoundException
     * @throws \Vendor\Library\Generated\Exception\SwarmInspectInternalServerErrorException
     * @throws \Vendor\Library\Generated\Exception\SwarmInspectServiceUnavailableException
     *
     * @return null|\Vendor\Library\Generated\Model\Swarm
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\Swarm', 'json');
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\SwarmInspectNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\SwarmInspectInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Vendor\Library\Generated\Exception\SwarmInspectServiceUnavailableException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}