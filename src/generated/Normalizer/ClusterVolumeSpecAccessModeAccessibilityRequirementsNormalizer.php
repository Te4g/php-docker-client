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

class ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\ClusterVolumeSpecAccessModeAccessibilityRequirements';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\ClusterVolumeSpecAccessModeAccessibilityRequirements';
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
        $object = new \Vendor\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Requisite', $data)) {
            $values = array();
            foreach ($data['Requisite'] as $value) {
                $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setRequisite($values);
        }
        if (\array_key_exists('Preferred', $data)) {
            $values_2 = array();
            foreach ($data['Preferred'] as $value_2) {
                $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_2 as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setPreferred($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('requisite') && null !== $object->getRequisite()) {
            $values = array();
            foreach ($object->getRequisite() as $value) {
                $values_1 = array();
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['Requisite'] = $values;
        }
        if ($object->isInitialized('preferred') && null !== $object->getPreferred()) {
            $values_2 = array();
            foreach ($object->getPreferred() as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data['Preferred'] = $values_2;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array('Vendor\\Library\\Generated\\Model\\ClusterVolumeSpecAccessModeAccessibilityRequirements' => false);
    }
}
