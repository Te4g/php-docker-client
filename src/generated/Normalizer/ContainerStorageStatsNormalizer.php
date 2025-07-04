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
    class ContainerStorageStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerStorageStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerStorageStats::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerStorageStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('read_count_normalized', $data) && $data['read_count_normalized'] !== null) {
                $object->setReadCountNormalized($data['read_count_normalized']);
            }
            elseif (\array_key_exists('read_count_normalized', $data) && $data['read_count_normalized'] === null) {
                $object->setReadCountNormalized(null);
            }
            if (\array_key_exists('read_size_bytes', $data) && $data['read_size_bytes'] !== null) {
                $object->setReadSizeBytes($data['read_size_bytes']);
            }
            elseif (\array_key_exists('read_size_bytes', $data) && $data['read_size_bytes'] === null) {
                $object->setReadSizeBytes(null);
            }
            if (\array_key_exists('write_count_normalized', $data) && $data['write_count_normalized'] !== null) {
                $object->setWriteCountNormalized($data['write_count_normalized']);
            }
            elseif (\array_key_exists('write_count_normalized', $data) && $data['write_count_normalized'] === null) {
                $object->setWriteCountNormalized(null);
            }
            if (\array_key_exists('write_size_bytes', $data) && $data['write_size_bytes'] !== null) {
                $object->setWriteSizeBytes($data['write_size_bytes']);
            }
            elseif (\array_key_exists('write_size_bytes', $data) && $data['write_size_bytes'] === null) {
                $object->setWriteSizeBytes(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('readCountNormalized') && null !== $object->getReadCountNormalized()) {
                $data['read_count_normalized'] = $object->getReadCountNormalized();
            }
            if ($object->isInitialized('readSizeBytes') && null !== $object->getReadSizeBytes()) {
                $data['read_size_bytes'] = $object->getReadSizeBytes();
            }
            if ($object->isInitialized('writeCountNormalized') && null !== $object->getWriteCountNormalized()) {
                $data['write_count_normalized'] = $object->getWriteCountNormalized();
            }
            if ($object->isInitialized('writeSizeBytes') && null !== $object->getWriteSizeBytes()) {
                $data['write_size_bytes'] = $object->getWriteSizeBytes();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerStorageStats::class => false];
        }
    }
} else {
    class ContainerStorageStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerStorageStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerStorageStats::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerStorageStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('read_count_normalized', $data) && $data['read_count_normalized'] !== null) {
                $object->setReadCountNormalized($data['read_count_normalized']);
            }
            elseif (\array_key_exists('read_count_normalized', $data) && $data['read_count_normalized'] === null) {
                $object->setReadCountNormalized(null);
            }
            if (\array_key_exists('read_size_bytes', $data) && $data['read_size_bytes'] !== null) {
                $object->setReadSizeBytes($data['read_size_bytes']);
            }
            elseif (\array_key_exists('read_size_bytes', $data) && $data['read_size_bytes'] === null) {
                $object->setReadSizeBytes(null);
            }
            if (\array_key_exists('write_count_normalized', $data) && $data['write_count_normalized'] !== null) {
                $object->setWriteCountNormalized($data['write_count_normalized']);
            }
            elseif (\array_key_exists('write_count_normalized', $data) && $data['write_count_normalized'] === null) {
                $object->setWriteCountNormalized(null);
            }
            if (\array_key_exists('write_size_bytes', $data) && $data['write_size_bytes'] !== null) {
                $object->setWriteSizeBytes($data['write_size_bytes']);
            }
            elseif (\array_key_exists('write_size_bytes', $data) && $data['write_size_bytes'] === null) {
                $object->setWriteSizeBytes(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('readCountNormalized') && null !== $object->getReadCountNormalized()) {
                $data['read_count_normalized'] = $object->getReadCountNormalized();
            }
            if ($object->isInitialized('readSizeBytes') && null !== $object->getReadSizeBytes()) {
                $data['read_size_bytes'] = $object->getReadSizeBytes();
            }
            if ($object->isInitialized('writeCountNormalized') && null !== $object->getWriteCountNormalized()) {
                $data['write_count_normalized'] = $object->getWriteCountNormalized();
            }
            if ($object->isInitialized('writeSizeBytes') && null !== $object->getWriteSizeBytes()) {
                $data['write_size_bytes'] = $object->getWriteSizeBytes();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerStorageStats::class => false];
        }
    }
}