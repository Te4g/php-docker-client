<?php

namespace Vendor\Library\Generated\Endpoint;

class ServiceDelete extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id ID or name of service.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/services/{id}');
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
     * @throws \Vendor\Library\Generated\Exception\ServiceDeleteNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ServiceDeleteInternalServerErrorException
     * @throws \Vendor\Library\Generated\Exception\ServiceDeleteServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceDeleteNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceDeleteInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceDeleteServiceUnavailableException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}