<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\Service';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\Service';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vendor\Library\Generated\Model\Service();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], 'Vendor\\Library\\Generated\\Model\\ObjectVersion', 'json', $context));
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->setUpdatedAt($data['UpdatedAt']);
        }
        if (\array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Vendor\\Library\\Generated\\Model\\ServiceSpec', 'json', $context));
        }
        if (\array_key_exists('Endpoint', $data)) {
            $object->setEndpoint($this->denormalizer->denormalize($data['Endpoint'], 'Vendor\\Library\\Generated\\Model\\ServiceEndpoint', 'json', $context));
        }
        if (\array_key_exists('UpdateStatus', $data)) {
            $object->setUpdateStatus($this->denormalizer->denormalize($data['UpdateStatus'], 'Vendor\\Library\\Generated\\Model\\ServiceUpdateStatus', 'json', $context));
        }
        if (\array_key_exists('ServiceStatus', $data)) {
            $object->setServiceStatus($this->denormalizer->denormalize($data['ServiceStatus'], 'Vendor\\Library\\Generated\\Model\\ServiceServiceStatus', 'json', $context));
        }
        if (\array_key_exists('JobStatus', $data)) {
            $object->setJobStatus($this->denormalizer->denormalize($data['JobStatus'], 'Vendor\\Library\\Generated\\Model\\ServiceJobStatus', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('iD') && null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if ($object->isInitialized('version') && null !== $object->getVersion()) {
            $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['UpdatedAt'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('spec') && null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if ($object->isInitialized('endpoint') && null !== $object->getEndpoint()) {
            $data['Endpoint'] = $this->normalizer->normalize($object->getEndpoint(), 'json', $context);
        }
        if ($object->isInitialized('updateStatus') && null !== $object->getUpdateStatus()) {
            $data['UpdateStatus'] = $this->normalizer->normalize($object->getUpdateStatus(), 'json', $context);
        }
        if ($object->isInitialized('serviceStatus') && null !== $object->getServiceStatus()) {
            $data['ServiceStatus'] = $this->normalizer->normalize($object->getServiceStatus(), 'json', $context);
        }
        if ($object->isInitialized('jobStatus') && null !== $object->getJobStatus()) {
            $data['JobStatus'] = $this->normalizer->normalize($object->getJobStatus(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array('Vendor\\Library\\Generated\\Model\\Service' => false);
    }
}
