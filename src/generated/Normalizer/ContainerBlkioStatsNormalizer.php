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
    class ContainerBlkioStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerBlkioStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerBlkioStats::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerBlkioStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('io_service_bytes_recursive', $data)) {
                $values = [];
                foreach ($data['io_service_bytes_recursive'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoServiceBytesRecursive($values);
            }
            if (\array_key_exists('io_serviced_recursive', $data) && $data['io_serviced_recursive'] !== null) {
                $values_1 = [];
                foreach ($data['io_serviced_recursive'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoServicedRecursive($values_1);
            }
            elseif (\array_key_exists('io_serviced_recursive', $data) && $data['io_serviced_recursive'] === null) {
                $object->setIoServicedRecursive(null);
            }
            if (\array_key_exists('io_queue_recursive', $data) && $data['io_queue_recursive'] !== null) {
                $values_2 = [];
                foreach ($data['io_queue_recursive'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoQueueRecursive($values_2);
            }
            elseif (\array_key_exists('io_queue_recursive', $data) && $data['io_queue_recursive'] === null) {
                $object->setIoQueueRecursive(null);
            }
            if (\array_key_exists('io_service_time_recursive', $data) && $data['io_service_time_recursive'] !== null) {
                $values_3 = [];
                foreach ($data['io_service_time_recursive'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoServiceTimeRecursive($values_3);
            }
            elseif (\array_key_exists('io_service_time_recursive', $data) && $data['io_service_time_recursive'] === null) {
                $object->setIoServiceTimeRecursive(null);
            }
            if (\array_key_exists('io_wait_time_recursive', $data) && $data['io_wait_time_recursive'] !== null) {
                $values_4 = [];
                foreach ($data['io_wait_time_recursive'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoWaitTimeRecursive($values_4);
            }
            elseif (\array_key_exists('io_wait_time_recursive', $data) && $data['io_wait_time_recursive'] === null) {
                $object->setIoWaitTimeRecursive(null);
            }
            if (\array_key_exists('io_merged_recursive', $data) && $data['io_merged_recursive'] !== null) {
                $values_5 = [];
                foreach ($data['io_merged_recursive'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoMergedRecursive($values_5);
            }
            elseif (\array_key_exists('io_merged_recursive', $data) && $data['io_merged_recursive'] === null) {
                $object->setIoMergedRecursive(null);
            }
            if (\array_key_exists('io_time_recursive', $data) && $data['io_time_recursive'] !== null) {
                $values_6 = [];
                foreach ($data['io_time_recursive'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoTimeRecursive($values_6);
            }
            elseif (\array_key_exists('io_time_recursive', $data) && $data['io_time_recursive'] === null) {
                $object->setIoTimeRecursive(null);
            }
            if (\array_key_exists('sectors_recursive', $data) && $data['sectors_recursive'] !== null) {
                $values_7 = [];
                foreach ($data['sectors_recursive'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setSectorsRecursive($values_7);
            }
            elseif (\array_key_exists('sectors_recursive', $data) && $data['sectors_recursive'] === null) {
                $object->setSectorsRecursive(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('ioServiceBytesRecursive') && null !== $object->getIoServiceBytesRecursive()) {
                $values = [];
                foreach ($object->getIoServiceBytesRecursive() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['io_service_bytes_recursive'] = $values;
            }
            if ($object->isInitialized('ioServicedRecursive') && null !== $object->getIoServicedRecursive()) {
                $values_1 = [];
                foreach ($object->getIoServicedRecursive() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['io_serviced_recursive'] = $values_1;
            }
            if ($object->isInitialized('ioQueueRecursive') && null !== $object->getIoQueueRecursive()) {
                $values_2 = [];
                foreach ($object->getIoQueueRecursive() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['io_queue_recursive'] = $values_2;
            }
            if ($object->isInitialized('ioServiceTimeRecursive') && null !== $object->getIoServiceTimeRecursive()) {
                $values_3 = [];
                foreach ($object->getIoServiceTimeRecursive() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['io_service_time_recursive'] = $values_3;
            }
            if ($object->isInitialized('ioWaitTimeRecursive') && null !== $object->getIoWaitTimeRecursive()) {
                $values_4 = [];
                foreach ($object->getIoWaitTimeRecursive() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['io_wait_time_recursive'] = $values_4;
            }
            if ($object->isInitialized('ioMergedRecursive') && null !== $object->getIoMergedRecursive()) {
                $values_5 = [];
                foreach ($object->getIoMergedRecursive() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['io_merged_recursive'] = $values_5;
            }
            if ($object->isInitialized('ioTimeRecursive') && null !== $object->getIoTimeRecursive()) {
                $values_6 = [];
                foreach ($object->getIoTimeRecursive() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['io_time_recursive'] = $values_6;
            }
            if ($object->isInitialized('sectorsRecursive') && null !== $object->getSectorsRecursive()) {
                $values_7 = [];
                foreach ($object->getSectorsRecursive() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['sectors_recursive'] = $values_7;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerBlkioStats::class => false];
        }
    }
} else {
    class ContainerBlkioStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerBlkioStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerBlkioStats::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerBlkioStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('io_service_bytes_recursive', $data)) {
                $values = [];
                foreach ($data['io_service_bytes_recursive'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoServiceBytesRecursive($values);
            }
            if (\array_key_exists('io_serviced_recursive', $data) && $data['io_serviced_recursive'] !== null) {
                $values_1 = [];
                foreach ($data['io_serviced_recursive'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoServicedRecursive($values_1);
            }
            elseif (\array_key_exists('io_serviced_recursive', $data) && $data['io_serviced_recursive'] === null) {
                $object->setIoServicedRecursive(null);
            }
            if (\array_key_exists('io_queue_recursive', $data) && $data['io_queue_recursive'] !== null) {
                $values_2 = [];
                foreach ($data['io_queue_recursive'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoQueueRecursive($values_2);
            }
            elseif (\array_key_exists('io_queue_recursive', $data) && $data['io_queue_recursive'] === null) {
                $object->setIoQueueRecursive(null);
            }
            if (\array_key_exists('io_service_time_recursive', $data) && $data['io_service_time_recursive'] !== null) {
                $values_3 = [];
                foreach ($data['io_service_time_recursive'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoServiceTimeRecursive($values_3);
            }
            elseif (\array_key_exists('io_service_time_recursive', $data) && $data['io_service_time_recursive'] === null) {
                $object->setIoServiceTimeRecursive(null);
            }
            if (\array_key_exists('io_wait_time_recursive', $data) && $data['io_wait_time_recursive'] !== null) {
                $values_4 = [];
                foreach ($data['io_wait_time_recursive'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoWaitTimeRecursive($values_4);
            }
            elseif (\array_key_exists('io_wait_time_recursive', $data) && $data['io_wait_time_recursive'] === null) {
                $object->setIoWaitTimeRecursive(null);
            }
            if (\array_key_exists('io_merged_recursive', $data) && $data['io_merged_recursive'] !== null) {
                $values_5 = [];
                foreach ($data['io_merged_recursive'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoMergedRecursive($values_5);
            }
            elseif (\array_key_exists('io_merged_recursive', $data) && $data['io_merged_recursive'] === null) {
                $object->setIoMergedRecursive(null);
            }
            if (\array_key_exists('io_time_recursive', $data) && $data['io_time_recursive'] !== null) {
                $values_6 = [];
                foreach ($data['io_time_recursive'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setIoTimeRecursive($values_6);
            }
            elseif (\array_key_exists('io_time_recursive', $data) && $data['io_time_recursive'] === null) {
                $object->setIoTimeRecursive(null);
            }
            if (\array_key_exists('sectors_recursive', $data) && $data['sectors_recursive'] !== null) {
                $values_7 = [];
                foreach ($data['sectors_recursive'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $object->setSectorsRecursive($values_7);
            }
            elseif (\array_key_exists('sectors_recursive', $data) && $data['sectors_recursive'] === null) {
                $object->setSectorsRecursive(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('ioServiceBytesRecursive') && null !== $object->getIoServiceBytesRecursive()) {
                $values = [];
                foreach ($object->getIoServiceBytesRecursive() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['io_service_bytes_recursive'] = $values;
            }
            if ($object->isInitialized('ioServicedRecursive') && null !== $object->getIoServicedRecursive()) {
                $values_1 = [];
                foreach ($object->getIoServicedRecursive() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['io_serviced_recursive'] = $values_1;
            }
            if ($object->isInitialized('ioQueueRecursive') && null !== $object->getIoQueueRecursive()) {
                $values_2 = [];
                foreach ($object->getIoQueueRecursive() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['io_queue_recursive'] = $values_2;
            }
            if ($object->isInitialized('ioServiceTimeRecursive') && null !== $object->getIoServiceTimeRecursive()) {
                $values_3 = [];
                foreach ($object->getIoServiceTimeRecursive() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['io_service_time_recursive'] = $values_3;
            }
            if ($object->isInitialized('ioWaitTimeRecursive') && null !== $object->getIoWaitTimeRecursive()) {
                $values_4 = [];
                foreach ($object->getIoWaitTimeRecursive() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['io_wait_time_recursive'] = $values_4;
            }
            if ($object->isInitialized('ioMergedRecursive') && null !== $object->getIoMergedRecursive()) {
                $values_5 = [];
                foreach ($object->getIoMergedRecursive() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['io_merged_recursive'] = $values_5;
            }
            if ($object->isInitialized('ioTimeRecursive') && null !== $object->getIoTimeRecursive()) {
                $values_6 = [];
                foreach ($object->getIoTimeRecursive() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['io_time_recursive'] = $values_6;
            }
            if ($object->isInitialized('sectorsRecursive') && null !== $object->getSectorsRecursive()) {
                $values_7 = [];
                foreach ($object->getSectorsRecursive() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['sectors_recursive'] = $values_7;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerBlkioStats::class => false];
        }
    }
}