<?php

namespace Vendor\Library\Generated\Endpoint;

class ContainerPause extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Use the freezer cgroup to suspend all processes in a container.
    
    Traditionally, when suspending a process the `SIGSTOP` signal is used,
    which is observable by the process being suspended. With the freezer
    cgroup the process is unaware, and unable to capture, that it is being
    suspended, and subsequently resumed.
    
    *
    * @param string $id ID or name of the container
    */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/pause');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\ContainerPauseNotFoundException
     * @throws \Vendor\Library\Generated\Exception\ContainerPauseInternalServerErrorException
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
        if (404 === $status) {
            throw new \Vendor\Library\Generated\Exception\ContainerPauseNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\ContainerPauseInternalServerErrorException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}