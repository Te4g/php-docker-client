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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Swarm::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Swarm::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Swarm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Vendor\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('UpdatedAt', $data)) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Vendor\Library\Generated\Model\SwarmSpec::class, 'json', $context));
            }
            if (\array_key_exists('TLSInfo', $data)) {
                $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Vendor\Library\Generated\Model\TLSInfo::class, 'json', $context));
            }
            if (\array_key_exists('RootRotationInProgress', $data)) {
                $object->setRootRotationInProgress($data['RootRotationInProgress']);
            }
            if (\array_key_exists('DataPathPort', $data)) {
                $object->setDataPathPort($data['DataPathPort']);
            }
            if (\array_key_exists('DefaultAddrPool', $data)) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
            }
            if (\array_key_exists('SubnetSize', $data)) {
                $object->setSubnetSize($data['SubnetSize']);
            }
            if (\array_key_exists('JoinTokens', $data)) {
                $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], \Vendor\Library\Generated\Model\JoinTokens::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
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
            if ($object->isInitialized('tLSInfo') && null !== $object->getTLSInfo()) {
                $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
            }
            if ($object->isInitialized('rootRotationInProgress') && null !== $object->getRootRotationInProgress()) {
                $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('joinTokens') && null !== $object->getJoinTokens()) {
                $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Swarm::class => false];
        }
    }
} else {
    class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Swarm::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Swarm::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Swarm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Vendor\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('UpdatedAt', $data)) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Vendor\Library\Generated\Model\SwarmSpec::class, 'json', $context));
            }
            if (\array_key_exists('TLSInfo', $data)) {
                $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Vendor\Library\Generated\Model\TLSInfo::class, 'json', $context));
            }
            if (\array_key_exists('RootRotationInProgress', $data)) {
                $object->setRootRotationInProgress($data['RootRotationInProgress']);
            }
            if (\array_key_exists('DataPathPort', $data)) {
                $object->setDataPathPort($data['DataPathPort']);
            }
            if (\array_key_exists('DefaultAddrPool', $data)) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
            }
            if (\array_key_exists('SubnetSize', $data)) {
                $object->setSubnetSize($data['SubnetSize']);
            }
            if (\array_key_exists('JoinTokens', $data)) {
                $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], \Vendor\Library\Generated\Model\JoinTokens::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
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
            if ($object->isInitialized('tLSInfo') && null !== $object->getTLSInfo()) {
                $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
            }
            if ($object->isInitialized('rootRotationInProgress') && null !== $object->getRootRotationInProgress()) {
                $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('joinTokens') && null !== $object->getJoinTokens()) {
                $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Swarm::class => false];
        }
    }
}