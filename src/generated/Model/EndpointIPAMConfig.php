<?php

namespace Vendor\Library\Generated\Model;

class EndpointIPAMConfig
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
     * 
     *
     * @var string
     */
    protected $iPv4Address;
    /**
     * 
     *
     * @var string
     */
    protected $iPv6Address;
    /**
     * 
     *
     * @var list<string>
     */
    protected $linkLocalIPs;
    /**
     * 
     *
     * @return string
     */
    public function getIPv4Address(): string
    {
        return $this->iPv4Address;
    }
    /**
     * 
     *
     * @param string $iPv4Address
     *
     * @return self
     */
    public function setIPv4Address(string $iPv4Address): self
    {
        $this->initialized['iPv4Address'] = true;
        $this->iPv4Address = $iPv4Address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIPv6Address(): string
    {
        return $this->iPv6Address;
    }
    /**
     * 
     *
     * @param string $iPv6Address
     *
     * @return self
     */
    public function setIPv6Address(string $iPv6Address): self
    {
        $this->initialized['iPv6Address'] = true;
        $this->iPv6Address = $iPv6Address;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getLinkLocalIPs(): array
    {
        return $this->linkLocalIPs;
    }
    /**
     * 
     *
     * @param list<string> $linkLocalIPs
     *
     * @return self
     */
    public function setLinkLocalIPs(array $linkLocalIPs): self
    {
        $this->initialized['linkLocalIPs'] = true;
        $this->linkLocalIPs = $linkLocalIPs;
        return $this;
    }
}