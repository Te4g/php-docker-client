<?php

namespace Vendor\Library\Generated\Endpoint;

class TaskList extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
    process on the tasks list.
    
    Available filters:
    
    - `desired-state=(running | shutdown | accepted)`
    - `id=<task id>`
    - `label=key` or `label="key=value"`
    - `name=<task name>`
    - `node=<node id or name>`
    - `service=<service name>`
    
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/tasks';
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
        $optionsResolver->setDefined(['filters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filters', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\TaskListInternalServerErrorException
     * @throws \Vendor\Library\Generated\Exception\TaskListServiceUnavailableException
     *
     * @return null|\Vendor\Library\Generated\Model\Task[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\Task[]', 'json');
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\TaskListInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Vendor\Library\Generated\Exception\TaskListServiceUnavailableException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}