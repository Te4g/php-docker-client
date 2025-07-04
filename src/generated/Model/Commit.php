<?php

namespace Vendor\Library\Generated\Model;

class Commit
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
     * Actual commit ID of external tool.
     *
     * @var string
     */
    protected $iD;
    /**
     * Actual commit ID of external tool.
     *
     * @return string
     */
    public function getID(): string
    {
        return $this->iD;
    }
    /**
     * Actual commit ID of external tool.
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