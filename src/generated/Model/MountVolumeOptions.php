<?php

namespace Vendor\Library\Generated\Model;

class MountVolumeOptions
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
     * Populate volume with data from the target.
     *
     * @var bool
     */
    protected $noCopy = false;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * Map of driver specific options
     *
     * @var MountVolumeOptionsDriverConfig
     */
    protected $driverConfig;
    /**
     * Source path inside the volume. Must be relative without any back traversals.
     *
     * @var string
     */
    protected $subpath;
    /**
     * Populate volume with data from the target.
     *
     * @return bool
     */
    public function getNoCopy(): bool
    {
        return $this->noCopy;
    }
    /**
     * Populate volume with data from the target.
     *
     * @param bool $noCopy
     *
     * @return self
     */
    public function setNoCopy(bool $noCopy): self
    {
        $this->initialized['noCopy'] = true;
        $this->noCopy = $noCopy;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * Map of driver specific options
     *
     * @return MountVolumeOptionsDriverConfig
     */
    public function getDriverConfig(): MountVolumeOptionsDriverConfig
    {
        return $this->driverConfig;
    }
    /**
     * Map of driver specific options
     *
     * @param MountVolumeOptionsDriverConfig $driverConfig
     *
     * @return self
     */
    public function setDriverConfig(MountVolumeOptionsDriverConfig $driverConfig): self
    {
        $this->initialized['driverConfig'] = true;
        $this->driverConfig = $driverConfig;
        return $this;
    }
    /**
     * Source path inside the volume. Must be relative without any back traversals.
     *
     * @return string
     */
    public function getSubpath(): string
    {
        return $this->subpath;
    }
    /**
     * Source path inside the volume. Must be relative without any back traversals.
     *
     * @param string $subpath
     *
     * @return self
     */
    public function setSubpath(string $subpath): self
    {
        $this->initialized['subpath'] = true;
        $this->subpath = $subpath;
        return $this;
    }
}