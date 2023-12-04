<?php

namespace Vendor\Library\Generated\Endpoint;

class ServiceInspect extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     *
     *
     * @param string $id ID or name of service.
     * @param array $queryParameters {
     *     @var bool $insertDefaults Fill empty fields with default values.
     * }
     */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/services/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('insertDefaults'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('insertDefaults' => false));
        $optionsResolver->addAllowedTypes('insertDefaults', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ServiceInspectNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ServiceInspectInternalServerErrorException
     * @throws \Vendor\Library\Generated\Exception\ServiceInspectServiceUnavailableException
     *
     * @return null|\Vendor\Library\Generated\Model\Service
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\Service', 'json');
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceInspectNotFoundException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceInspectInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Vendor\Library\Generated\Exception\ServiceInspectServiceUnavailableException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
