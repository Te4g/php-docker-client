<?php

namespace Vendor\Library\Generated\Endpoint;

class ImageDelete extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;
    /**
    * Remove an image, along with any untagged parent images that were
    referenced by that image.

    Images can't be removed if they have descendant images, are being
    used by a running container or are being used by a build.

    *
    * @param string $name Image name or ID
    * @param array $queryParameters {
    *     @var bool $force Remove the image even if it is being used by stopped containers or has other tags
    *     @var bool $noprune Do not delete untagged parent images
    * }
    */
    public function __construct(string $name, array $queryParameters = array())
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{name}'), array($this->name), '/images/{name}');
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
        $optionsResolver->setDefined(array('force', 'noprune'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('force' => false, 'noprune' => false));
        $optionsResolver->addAllowedTypes('force', array('bool'));
        $optionsResolver->addAllowedTypes('noprune', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ImageDeleteNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ImageDeleteConflictException
     * @throws \Vendor\Library\Generated\Exception\ImageDeleteInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\ImageDeleteResponseItem[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ImageDeleteResponseItem[]', 'json');
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageDeleteNotFoundException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (409 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageDeleteConflictException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageDeleteInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
