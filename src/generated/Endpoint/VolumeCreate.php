<?php

namespace Vendor\Library\Generated\Endpoint;

class VolumeCreate extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param \Vendor\Library\Generated\Model\VolumeCreateOptions $volumeConfig Volume configuration
     */
    public function __construct(\Vendor\Library\Generated\Model\VolumeCreateOptions $volumeConfig)
    {
        $this->body = $volumeConfig;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/volumes/create';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\Volume
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\Volume', 'json');
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\VolumeCreateInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
