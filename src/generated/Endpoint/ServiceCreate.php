<?php

namespace Vendor\Library\Generated\Endpoint;

class ServiceCreate extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    /**
    *
    *
    * @param \Vendor\Library\Generated\Model\ServicesCreatePostBody $body
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64url-encoded auth configuration for pulling from private
    registries.

    Refer to the [authentication section](#section/Authentication) for
    details.

    * }
    */
    public function __construct(\Vendor\Library\Generated\Model\ServicesCreatePostBody $body, array $headerParameters = array())
    {
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/services/create';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Registry-Auth'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('X-Registry-Auth', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ServiceCreateBadRequestException
     * @throws \Vendor\Library\Generated\Exception\ServiceCreateForbiddenException
     * @throws \Vendor\Library\Generated\Exception\ServiceCreateConflictException
     * @throws \Vendor\Library\Generated\Exception\ServiceCreateInternalServerErrorException
     * @throws \Vendor\Library\Generated\Exception\ServiceCreateServiceUnavailableException
     *
     * @return null|\Vendor\Library\Generated\Model\ServicesCreatePostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ServicesCreatePostResponse201', 'json');
        }
        if (400 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceCreateBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceCreateForbiddenException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (409 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceCreateConflictException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceCreateInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceCreateServiceUnavailableException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
