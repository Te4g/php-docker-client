<?php

namespace Vendor\Library\Generated\Endpoint;

class ContainerStart extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * 
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var string $detachKeys Override the key sequence for detaching a container. Format is a
    single character `[a-Z]` or `ctrl-<value>` where `<value>` is one
    of: `a-z`, `@`, `^`, `[`, `,` or `_`.
    
    * }
    */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/start');
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
        $optionsResolver->setDefined(['detachKeys']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('detachKeys', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ContainerStartNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ContainerStartInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ContainerStartNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ContainerStartInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}