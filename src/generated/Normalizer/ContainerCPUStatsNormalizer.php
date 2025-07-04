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
    class ContainerCPUStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerCPUStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerCPUStats::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerCPUStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cpu_usage', $data) && $data['cpu_usage'] !== null) {
                $object->setCpuUsage($this->denormalizer->denormalize($data['cpu_usage'], \Vendor\Library\Generated\Model\ContainerCPUUsage::class, 'json', $context));
            }
            elseif (\array_key_exists('cpu_usage', $data) && $data['cpu_usage'] === null) {
                $object->setCpuUsage(null);
            }
            if (\array_key_exists('system_cpu_usage', $data) && $data['system_cpu_usage'] !== null) {
                $object->setSystemCpuUsage($data['system_cpu_usage']);
            }
            elseif (\array_key_exists('system_cpu_usage', $data) && $data['system_cpu_usage'] === null) {
                $object->setSystemCpuUsage(null);
            }
            if (\array_key_exists('online_cpus', $data) && $data['online_cpus'] !== null) {
                $object->setOnlineCpus($data['online_cpus']);
            }
            elseif (\array_key_exists('online_cpus', $data) && $data['online_cpus'] === null) {
                $object->setOnlineCpus(null);
            }
            if (\array_key_exists('throttling_data', $data) && $data['throttling_data'] !== null) {
                $object->setThrottlingData($this->denormalizer->denormalize($data['throttling_data'], \Vendor\Library\Generated\Model\ContainerThrottlingData::class, 'json', $context));
            }
            elseif (\array_key_exists('throttling_data', $data) && $data['throttling_data'] === null) {
                $object->setThrottlingData(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('cpuUsage') && null !== $object->getCpuUsage()) {
                $data['cpu_usage'] = $this->normalizer->normalize($object->getCpuUsage(), 'json', $context);
            }
            if ($object->isInitialized('systemCpuUsage') && null !== $object->getSystemCpuUsage()) {
                $data['system_cpu_usage'] = $object->getSystemCpuUsage();
            }
            if ($object->isInitialized('onlineCpus') && null !== $object->getOnlineCpus()) {
                $data['online_cpus'] = $object->getOnlineCpus();
            }
            if ($object->isInitialized('throttlingData') && null !== $object->getThrottlingData()) {
                $data['throttling_data'] = $this->normalizer->normalize($object->getThrottlingData(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerCPUStats::class => false];
        }
    }
} else {
    class ContainerCPUStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerCPUStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerCPUStats::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerCPUStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cpu_usage', $data) && $data['cpu_usage'] !== null) {
                $object->setCpuUsage($this->denormalizer->denormalize($data['cpu_usage'], \Vendor\Library\Generated\Model\ContainerCPUUsage::class, 'json', $context));
            }
            elseif (\array_key_exists('cpu_usage', $data) && $data['cpu_usage'] === null) {
                $object->setCpuUsage(null);
            }
            if (\array_key_exists('system_cpu_usage', $data) && $data['system_cpu_usage'] !== null) {
                $object->setSystemCpuUsage($data['system_cpu_usage']);
            }
            elseif (\array_key_exists('system_cpu_usage', $data) && $data['system_cpu_usage'] === null) {
                $object->setSystemCpuUsage(null);
            }
            if (\array_key_exists('online_cpus', $data) && $data['online_cpus'] !== null) {
                $object->setOnlineCpus($data['online_cpus']);
            }
            elseif (\array_key_exists('online_cpus', $data) && $data['online_cpus'] === null) {
                $object->setOnlineCpus(null);
            }
            if (\array_key_exists('throttling_data', $data) && $data['throttling_data'] !== null) {
                $object->setThrottlingData($this->denormalizer->denormalize($data['throttling_data'], \Vendor\Library\Generated\Model\ContainerThrottlingData::class, 'json', $context));
            }
            elseif (\array_key_exists('throttling_data', $data) && $data['throttling_data'] === null) {
                $object->setThrottlingData(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('cpuUsage') && null !== $object->getCpuUsage()) {
                $data['cpu_usage'] = $this->normalizer->normalize($object->getCpuUsage(), 'json', $context);
            }
            if ($object->isInitialized('systemCpuUsage') && null !== $object->getSystemCpuUsage()) {
                $data['system_cpu_usage'] = $object->getSystemCpuUsage();
            }
            if ($object->isInitialized('onlineCpus') && null !== $object->getOnlineCpus()) {
                $data['online_cpus'] = $object->getOnlineCpus();
            }
            if ($object->isInitialized('throttlingData') && null !== $object->getThrottlingData()) {
                $data['throttling_data'] = $this->normalizer->normalize($object->getThrottlingData(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerCPUStats::class => false];
        }
    }
}