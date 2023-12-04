<?php

namespace Vendor\Library\Generated\Endpoint;

class SystemAuth extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    /**
    * Validate credentials for a registry and, if available, get an identity
    token for accessing the registry without password.

    *
    * @param \Vendor\Library\Generated\Model\AuthConfig $authConfig Authentication to check
    */
    public function __construct(\Vendor\Library\Generated\Model\AuthConfig $authConfig)
    {
        $this->body = $authConfig;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/auth';
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
     * @throws \Vendor\Library\Generated\Exception\SystemAuthUnauthorizedException
     * @throws \Vendor\Library\Generated\Exception\SystemAuthInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\AuthPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AuthPostResponse200', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Vendor\Library\Generated\Exception\SystemAuthUnauthorizedException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\SystemAuthInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
