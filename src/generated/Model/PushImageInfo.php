<?php

namespace Vendor\Library\Generated\Model;

class PushImageInfo
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
    * errors encountered during the operation.
    
    
    > **Deprecated**: This field is deprecated since API v1.4, and will be omitted in a future API version. Use the information in errorDetail instead.
    *
    * @var string|null
    */
    protected $error;
    /**
     * 
     *
     * @var ErrorDetail
     */
    protected $errorDetail;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
    * Progress is a pre-formatted presentation of progressDetail.
    
    
    > **Deprecated**: This field is deprecated since API v1.8, and will be omitted in a future API version. Use the information in progressDetail instead.
    *
    * @var string|null
    */
    protected $progress;
    /**
     * 
     *
     * @var ProgressDetail
     */
    protected $progressDetail;
    /**
    * errors encountered during the operation.
    
    
    > **Deprecated**: This field is deprecated since API v1.4, and will be omitted in a future API version. Use the information in errorDetail instead.
    *
    * @return string|null
    */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
    * errors encountered during the operation.
    
    
    > **Deprecated**: This field is deprecated since API v1.4, and will be omitted in a future API version. Use the information in errorDetail instead.
    *
    * @param string|null $error
    *
    * @return self
    */
    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return ErrorDetail
     */
    public function getErrorDetail(): ErrorDetail
    {
        return $this->errorDetail;
    }
    /**
     * 
     *
     * @param ErrorDetail $errorDetail
     *
     * @return self
     */
    public function setErrorDetail(ErrorDetail $errorDetail): self
    {
        $this->initialized['errorDetail'] = true;
        $this->errorDetail = $errorDetail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
    * Progress is a pre-formatted presentation of progressDetail.
    
    
    > **Deprecated**: This field is deprecated since API v1.8, and will be omitted in a future API version. Use the information in progressDetail instead.
    *
    * @return string|null
    */
    public function getProgress(): ?string
    {
        return $this->progress;
    }
    /**
    * Progress is a pre-formatted presentation of progressDetail.
    
    
    > **Deprecated**: This field is deprecated since API v1.8, and will be omitted in a future API version. Use the information in progressDetail instead.
    *
    * @param string|null $progress
    *
    * @return self
    */
    public function setProgress(?string $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
    /**
     * 
     *
     * @return ProgressDetail
     */
    public function getProgressDetail(): ProgressDetail
    {
        return $this->progressDetail;
    }
    /**
     * 
     *
     * @param ProgressDetail $progressDetail
     *
     * @return self
     */
    public function setProgressDetail(ProgressDetail $progressDetail): self
    {
        $this->initialized['progressDetail'] = true;
        $this->progressDetail = $progressDetail;
        return $this;
    }
}