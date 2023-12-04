<?php

namespace Vendor\Library\Generated\Endpoint;

class PluginSet extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;
    /**
    *
    *
    * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
    default if omitted.

    * @param array $body
    */
    public function __construct(string $name, array $body)
    {
        $this->name = $name;
        $this->body = $body;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{name}'), array($this->name), '/plugins/{name}/set');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\PluginSetNotFoundException
     * @throws \Vendor\Library\Generated\Exception\PluginSetInternalServerErrorException
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
            throw new \Vendor\Library\Generated\Exception\PluginSetNotFoundException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Vendor\Library\Generated\Exception\PluginSetInternalServerErrorException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
