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
    class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BuildCache::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BuildCache::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\BuildCache();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Parent', $data) && $data['Parent'] !== null) {
                $object->setParent($data['Parent']);
            }
            elseif (\array_key_exists('Parent', $data) && $data['Parent'] === null) {
                $object->setParent(null);
            }
            if (\array_key_exists('Parents', $data) && $data['Parents'] !== null) {
                $values = [];
                foreach ($data['Parents'] as $value) {
                    $values[] = $value;
                }
                $object->setParents($values);
            }
            elseif (\array_key_exists('Parents', $data) && $data['Parents'] === null) {
                $object->setParents(null);
            }
            if (\array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
            }
            if (\array_key_exists('InUse', $data)) {
                $object->setInUse($data['InUse']);
            }
            if (\array_key_exists('Shared', $data)) {
                $object->setShared($data['Shared']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] !== null) {
                $object->setLastUsedAt($data['LastUsedAt']);
            }
            elseif (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] === null) {
                $object->setLastUsedAt(null);
            }
            if (\array_key_exists('UsageCount', $data)) {
                $object->setUsageCount($data['UsageCount']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('parents') && null !== $object->getParents()) {
                $values = [];
                foreach ($object->getParents() as $value) {
                    $values[] = $value;
                }
                $data['Parents'] = $values;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('inUse') && null !== $object->getInUse()) {
                $data['InUse'] = $object->getInUse();
            }
            if ($object->isInitialized('shared') && null !== $object->getShared()) {
                $data['Shared'] = $object->getShared();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('lastUsedAt') && null !== $object->getLastUsedAt()) {
                $data['LastUsedAt'] = $object->getLastUsedAt();
            }
            if ($object->isInitialized('usageCount') && null !== $object->getUsageCount()) {
                $data['UsageCount'] = $object->getUsageCount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BuildCache::class => false];
        }
    }
} else {
    class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BuildCache::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BuildCache::class;
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
            $object = new \Vendor\Library\Generated\Model\BuildCache();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Parent', $data) && $data['Parent'] !== null) {
                $object->setParent($data['Parent']);
            }
            elseif (\array_key_exists('Parent', $data) && $data['Parent'] === null) {
                $object->setParent(null);
            }
            if (\array_key_exists('Parents', $data) && $data['Parents'] !== null) {
                $values = [];
                foreach ($data['Parents'] as $value) {
                    $values[] = $value;
                }
                $object->setParents($values);
            }
            elseif (\array_key_exists('Parents', $data) && $data['Parents'] === null) {
                $object->setParents(null);
            }
            if (\array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
            }
            if (\array_key_exists('InUse', $data)) {
                $object->setInUse($data['InUse']);
            }
            if (\array_key_exists('Shared', $data)) {
                $object->setShared($data['Shared']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] !== null) {
                $object->setLastUsedAt($data['LastUsedAt']);
            }
            elseif (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] === null) {
                $object->setLastUsedAt(null);
            }
            if (\array_key_exists('UsageCount', $data)) {
                $object->setUsageCount($data['UsageCount']);
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
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('parents') && null !== $object->getParents()) {
                $values = [];
                foreach ($object->getParents() as $value) {
                    $values[] = $value;
                }
                $data['Parents'] = $values;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('inUse') && null !== $object->getInUse()) {
                $data['InUse'] = $object->getInUse();
            }
            if ($object->isInitialized('shared') && null !== $object->getShared()) {
                $data['Shared'] = $object->getShared();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('lastUsedAt') && null !== $object->getLastUsedAt()) {
                $data['LastUsedAt'] = $object->getLastUsedAt();
            }
            if ($object->isInitialized('usageCount') && null !== $object->getUsageCount()) {
                $data['UsageCount'] = $object->getUsageCount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BuildCache::class => false];
        }
    }
}