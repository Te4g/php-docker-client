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

class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\SwarmInitPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\SwarmInitPostBody';
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
        $object = new \Vendor\Library\Generated\Model\SwarmInitPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ListenAddr', $data)) {
            $object->setListenAddr($data['ListenAddr']);
        }
        if (\array_key_exists('AdvertiseAddr', $data)) {
            $object->setAdvertiseAddr($data['AdvertiseAddr']);
        }
        if (\array_key_exists('DataPathAddr', $data)) {
            $object->setDataPathAddr($data['DataPathAddr']);
        }
        if (\array_key_exists('DataPathPort', $data)) {
            $object->setDataPathPort($data['DataPathPort']);
        }
        if (\array_key_exists('DefaultAddrPool', $data)) {
            $values = array();
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        }
        if (\array_key_exists('ForceNewCluster', $data)) {
            $object->setForceNewCluster($data['ForceNewCluster']);
        }
        if (\array_key_exists('SubnetSize', $data)) {
            $object->setSubnetSize($data['SubnetSize']);
        }
        if (\array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Vendor\\Library\\Generated\\Model\\SwarmSpec', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
            $data['ListenAddr'] = $object->getListenAddr();
        }
        if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
            $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
        }
        if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
            $data['DataPathAddr'] = $object->getDataPathAddr();
        }
        if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
            $data['DataPathPort'] = $object->getDataPathPort();
        }
        if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
            $values = array();
            foreach ($object->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $data['DefaultAddrPool'] = $values;
        }
        if ($object->isInitialized('forceNewCluster') && null !== $object->getForceNewCluster()) {
            $data['ForceNewCluster'] = $object->getForceNewCluster();
        }
        if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
            $data['SubnetSize'] = $object->getSubnetSize();
        }
        if ($object->isInitialized('spec') && null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array('Vendor\\Library\\Generated\\Model\\SwarmInitPostBody' => false);
    }
}
