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

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\BuildInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\BuildInfo';
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
        $object = new \Vendor\Library\Generated\Model\BuildInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('stream', $data)) {
            $object->setStream($data['stream']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
        }
        if (\array_key_exists('errorDetail', $data)) {
            $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], 'Vendor\\Library\\Generated\\Model\\ErrorDetail', 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->setProgress($data['progress']);
        }
        if (\array_key_exists('progressDetail', $data)) {
            $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], 'Vendor\\Library\\Generated\\Model\\ProgressDetail', 'json', $context));
        }
        if (\array_key_exists('aux', $data)) {
            $object->setAux($this->denormalizer->denormalize($data['aux'], 'Vendor\\Library\\Generated\\Model\\ImageID', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('stream') && null !== $object->getStream()) {
            $data['stream'] = $object->getStream();
        }
        if ($object->isInitialized('error') && null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if ($object->isInitialized('errorDetail') && null !== $object->getErrorDetail()) {
            $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('progress') && null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        }
        if ($object->isInitialized('progressDetail') && null !== $object->getProgressDetail()) {
            $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
        }
        if ($object->isInitialized('aux') && null !== $object->getAux()) {
            $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array('Vendor\\Library\\Generated\\Model\\BuildInfo' => false);
    }
}
