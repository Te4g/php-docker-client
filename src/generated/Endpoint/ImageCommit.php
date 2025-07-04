<?php

namespace Vendor\Library\Generated\Endpoint;

class ImageCommit extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Vendor\Library\Generated\Model\ContainerConfig $containerConfig The container configuration
     * @param array $queryParameters {
     *     @var string $container The ID or name of the container to commit
     *     @var string $repo Repository name for the created image
     *     @var string $tag Tag name for the create image
     *     @var string $comment Commit message
     *     @var string $author Author of the image (e.g., `John Hannibal Smith <hannibal@a-team.com>`)
     *     @var bool $pause Whether to pause the container before committing
     *     @var string $changes `Dockerfile` instructions to apply while committing
     * }
     */
    public function __construct(\Vendor\Library\Generated\Model\ContainerConfig $containerConfig, array $queryParameters = [])
    {
        $this->body = $containerConfig;
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/commit';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['container', 'repo', 'tag', 'comment', 'author', 'pause', 'changes']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['pause' => true]);
        $optionsResolver->addAllowedTypes('container', ['string']);
        $optionsResolver->addAllowedTypes('repo', ['string']);
        $optionsResolver->addAllowedTypes('tag', ['string']);
        $optionsResolver->addAllowedTypes('comment', ['string']);
        $optionsResolver->addAllowedTypes('author', ['string']);
        $optionsResolver->addAllowedTypes('pause', ['bool']);
        $optionsResolver->addAllowedTypes('changes', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ImageCommitNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ImageCommitInternalServerErrorException
     *
     * @return null|\Vendor\Library\Generated\Model\IDResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\IDResponse', 'json');
        }
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageCommitNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ImageCommitInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}