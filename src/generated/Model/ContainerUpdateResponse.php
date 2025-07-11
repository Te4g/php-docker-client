<?php

namespace Vendor\Library\Generated\Model;

class ContainerUpdateResponse
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
     * Warnings encountered when updating the container.
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * Warnings encountered when updating the container.
     *
     * @return list<string>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * Warnings encountered when updating the container.
     *
     * @param list<string> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}