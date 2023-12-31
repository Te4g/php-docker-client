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

class VolumeListResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\VolumeListResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\VolumeListResponse';
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
        $object = new \Vendor\Library\Generated\Model\VolumeListResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Volumes', $data)) {
            $values = array();
            foreach ($data['Volumes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Vendor\\Library\\Generated\\Model\\Volume', 'json', $context);
            }
            $object->setVolumes($values);
        }
        if (\array_key_exists('Warnings', $data)) {
            $values_1 = array();
            foreach ($data['Warnings'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWarnings($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
            $values = array();
            foreach ($object->getVolumes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Volumes'] = $values;
        }
        if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
            $values_1 = array();
            foreach ($object->getWarnings() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Warnings'] = $values_1;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array('Vendor\\Library\\Generated\\Model\\VolumeListResponse' => false);
    }
}
