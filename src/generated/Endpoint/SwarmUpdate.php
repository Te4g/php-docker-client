<?php

namespace Vendor\Library\Generated\Endpoint;

class SwarmUpdate extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    /**
    *
    *
    * @param \Vendor\Library\Generated\Model\SwarmSpec $body
    * @param array $queryParameters {
    *     @var int $version The version number of the swarm object being updated. This is
    required to avoid conflicting writes.

    *     @var bool $rotateWorkerToken Rotate the worker join token.
    *     @var bool $rotateManagerToken Rotate the manager join token.
    *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
    * }
    */
    public function __construct(\Vendor\Library\Generated\Model\SwarmSpec $body, array $queryParameters = array())
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/swarm/update';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('version', 'rotateWorkerToken', 'rotateManagerToken', 'rotateManagerUnlockKey'));
        $optionsResolver->setRequired(array('version'));
        $optionsResolver->setDefaults(array('rotateWorkerToken' => false, 'rotateManagerToken' => false, 'rotateManagerUnlockKey' => false));
        $optionsResolver->addAllowedTypes('version', array('int'));
        $optionsResolver->addAllowedTypes('rotateWorkerToken', array('bool'));
        $optionsResolver->addAllowedTypes('rotateManagerToken', array('bool'));
        $optionsResolver->addAllowedTypes('rotateManagerUnlockKey', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\SwarmUpdateBadRequestException
     * @throws \Vendor\Library\Generated\Exception\SwarmUpdateInternalServerErrorException
     * @throws \Vendor\Library\Generated\Exception\SwarmUpdateServiceUnavailableException
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
        if (400 === $status) {
            throw new \Vendor\Library\Generated\Exception\SwarmUpdateBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\SwarmUpdateInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Vendor\Library\Generated\Exception\SwarmUpdateServiceUnavailableException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
