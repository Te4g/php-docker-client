<?php

namespace Vendor\Library\Generated\Model;

class DeviceInfo
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
     * The origin device driver.
     *
     * @var string
     */
    protected $source;
    /**
    * The unique identifier for the device within its source driver.
    For CDI devices, this would be an FQDN like "vendor.com/gpu=0".
    
    *
    * @var string
    */
    protected $iD;
    /**
     * The origin device driver.
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * The origin device driver.
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
    * The unique identifier for the device within its source driver.
    For CDI devices, this would be an FQDN like "vendor.com/gpu=0".
    
    *
    * @return string
    */
    public function getID(): string
    {
        return $this->iD;
    }
    /**
    * The unique identifier for the device within its source driver.
    For CDI devices, this would be an FQDN like "vendor.com/gpu=0".
    
    *
    * @param string $iD
    *
    * @return self
    */
    public function setID(string $iD): self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
}