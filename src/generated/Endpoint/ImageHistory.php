<?php

namespace Vendor\Library\Generated\Endpoint;

class ImageHistory extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $name;
    /**
    * Return parent layers of an image.
    *
    * @param string $name Image name or ID
    * @param array $queryParameters {
    *     @var string $platform JSON-encoded OCI platform to select the platform-variant.
    If omitted, it defaults to any locally available platform,
    prioritizing the daemon's host platform.
    
    If the daemon provides a multi-platform image store, this selects
    the platform-variant to show the history for. If the image is
    a single-platform image, or if the multi-platform image does not
    provide a variant matching the given platform, an error is returned.
    
    Example: `{"os": "linux", "architecture": "arm", "variant": "v5"}`
    
    * }
    */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/images/{name}/history');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('platform', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ImageHistoryNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ImageHistoryInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\ImagesNameHistoryGetResponse200Item[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ImagesNameHistoryGetResponse200Item[]', 'json');
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageHistoryNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageHistoryInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}