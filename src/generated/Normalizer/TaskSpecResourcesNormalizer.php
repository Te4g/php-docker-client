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

class TaskSpecResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\TaskSpecResources';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\TaskSpecResources';
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
        $object = new \Vendor\Library\Generated\Model\TaskSpecResources();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Limits', $data)) {
            $object->setLimits($this->denormalizer->denormalize($data['Limits'], 'Vendor\\Library\\Generated\\Model\\Limit', 'json', $context));
        }
        if (\array_key_exists('Reservations', $data)) {
            $object->setReservations($this->denormalizer->denormalize($data['Reservations'], 'Vendor\\Library\\Generated\\Model\\ResourceObject', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('limits') && null !== $object->getLimits()) {
            $data['Limits'] = $this->normalizer->normalize($object->getLimits(), 'json', $context);
        }
        if ($object->isInitialized('reservations') && null !== $object->getReservations()) {
            $data['Reservations'] = $this->normalizer->normalize($object->getReservations(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array('Vendor\\Library\\Generated\\Model\\TaskSpecResources' => false);
    }
}
