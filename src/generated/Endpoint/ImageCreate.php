<?php

namespace Vendor\Library\Generated\Endpoint;

class ImageCreate extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    /**
    * Create an image by either pulling it from a registry or importing it.
    *
    * @param string $inputImage Image content if the value `-` has been specified in fromSrc query parameter
    * @param array $queryParameters {
    *     @var string $fromImage Name of the image to pull. The name may include a tag or digest. This parameter may only be used when pulling an image. The pull is cancelled if the HTTP connection is closed.
    *     @var string $fromSrc Source to import. The value may be a URL from which the image can be retrieved or `-` to read the image from the request body. This parameter may only be used when importing an image.
    *     @var string $repo Repository name given to an image when it is imported. The repo may include a tag. This parameter may only be used when importing an image.
    *     @var string $tag Tag or digest. If empty when pulling an image, this causes all tags for the given image to be pulled.
    *     @var string $message Set commit message for imported image.
    *     @var array $changes Apply `Dockerfile` instructions to the image that is created,
    for example: `changes=ENV DEBUG=true`.
    Note that `ENV DEBUG=true` should be URI component encoded.

    Supported `Dockerfile` instructions:
    `CMD`|`ENTRYPOINT`|`ENV`|`EXPOSE`|`ONBUILD`|`USER`|`VOLUME`|`WORKDIR`

    *     @var string $platform Platform in the format os[/arch[/variant]].

    When used in combination with the `fromImage` option, the daemon checks
    if the given image is present in the local image cache with the given
    OS and Architecture, and otherwise attempts to pull the image. If the
    option is not set, the host's native OS and Architecture are used.
    If the given image does not exist in the local image cache, the daemon
    attempts to pull the image with the host's native OS and Architecture.
    If the given image does exists in the local image cache, but its OS or
    architecture does not match, a warning is produced.

    When used with the `fromSrc` option to import an image from an archive,
    this option sets the platform information for the imported image. If
    the option is not set, the host's native OS and Architecture are used
    for the imported image.

    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64url-encoded auth configuration.

    Refer to the [authentication section](#section/Authentication) for
    details.

    * }
    */
    public function __construct(string $inputImage, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->body = $inputImage;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/images/create';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), $this->body);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('fromImage', 'fromSrc', 'repo', 'tag', 'message', 'changes', 'platform'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('platform' => ''));
        $optionsResolver->addAllowedTypes('fromImage', array('string'));
        $optionsResolver->addAllowedTypes('fromSrc', array('string'));
        $optionsResolver->addAllowedTypes('repo', array('string'));
        $optionsResolver->addAllowedTypes('tag', array('string'));
        $optionsResolver->addAllowedTypes('message', array('string'));
        $optionsResolver->addAllowedTypes('changes', array('array'));
        $optionsResolver->addAllowedTypes('platform', array('string'));
        return $optionsResolver;
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
     * @throws \Vendor\Library\Generated\Exception\ImageCreateNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ImageCreateInternalServerErrorException
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
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageCreateNotFoundException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageCreateInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
