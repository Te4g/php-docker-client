<?php

namespace Vendor\Library\Generated\Model;

class ContainerSummaryNetworkSettings
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Summary of network-settings for each network the container is
    attached to.
    *
    * @var array<string, EndpointSettings>
    */
    protected $networks;
    /**
    * Summary of network-settings for each network the container is
    attached to.
    *
    * @return array<string, EndpointSettings>
    */
    public function getNetworks(): iterable
    {
        return $this->networks;
    }
    /**
    * Summary of network-settings for each network the container is
    attached to.
    *
    * @param array<string, EndpointSettings> $networks
    *
    * @return self
    */
    public function setNetworks(iterable $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
}