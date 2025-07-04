<?php

namespace Vendor\Library\Generated\Endpoint;

class ContainerUpdate extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Change various configuration options of a container without having to
    recreate it.
    
    *
    * @param string $id ID or name of the container
    * @param \Vendor\Library\Generated\Model\ContainersIdUpdatePostBody $update 
    */
    public function __construct(string $id, \Vendor\Library\Generated\Model\ContainersIdUpdatePostBody $update)
    {
        $this->id = $id;
        $this->body = $update;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/update');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ContainerUpdateNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ContainerUpdateInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\ContainerUpdateResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ContainerUpdateResponse', 'json');
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ContainerUpdateNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ContainerUpdateInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}