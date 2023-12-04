<?php

namespace Vendor\Library\Generated\Endpoint;

class NetworkCreate extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param \Vendor\Library\Generated\Model\NetworksCreatePostBody $networkConfig Network configuration
     */
    public function __construct(\Vendor\Library\Generated\Model\NetworksCreatePostBody $networkConfig)
    {
        $this->body = $networkConfig;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/networks/create';
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
     * @throws \Vendor\Library\Generated\Exception\NetworkCreateForbiddenException
     * @throws \Vendor\Library\Generated\Exception\NetworkCreateNotFoundException
     * @throws \Vendor\Library\Generated\Exception\NetworkCreateInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\NetworksCreatePostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\NetworksCreatePostResponse201', 'json');
        }
        if (403 === $status) {
            throw new \Vendor\Library\Generated\Exception\NetworkCreateForbiddenException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\NetworkCreateNotFoundException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\NetworkCreateInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
