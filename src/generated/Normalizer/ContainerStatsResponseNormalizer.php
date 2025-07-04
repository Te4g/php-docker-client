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
    class ContainerStatsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerStatsResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerStatsResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerStatsResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('read', $data)) {
                $object->setRead(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['read']));
            }
            if (\array_key_exists('preread', $data)) {
                $object->setPreread(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['preread']));
            }
            if (\array_key_exists('pids_stats', $data) && $data['pids_stats'] !== null) {
                $object->setPidsStats($this->denormalizer->denormalize($data['pids_stats'], \Vendor\Library\Generated\Model\ContainerPidsStats::class, 'json', $context));
            }
            elseif (\array_key_exists('pids_stats', $data) && $data['pids_stats'] === null) {
                $object->setPidsStats(null);
            }
            if (\array_key_exists('blkio_stats', $data) && $data['blkio_stats'] !== null) {
                $object->setBlkioStats($this->denormalizer->denormalize($data['blkio_stats'], \Vendor\Library\Generated\Model\ContainerBlkioStats::class, 'json', $context));
            }
            elseif (\array_key_exists('blkio_stats', $data) && $data['blkio_stats'] === null) {
                $object->setBlkioStats(null);
            }
            if (\array_key_exists('num_procs', $data)) {
                $object->setNumProcs($data['num_procs']);
            }
            if (\array_key_exists('storage_stats', $data) && $data['storage_stats'] !== null) {
                $object->setStorageStats($this->denormalizer->denormalize($data['storage_stats'], \Vendor\Library\Generated\Model\ContainerStorageStats::class, 'json', $context));
            }
            elseif (\array_key_exists('storage_stats', $data) && $data['storage_stats'] === null) {
                $object->setStorageStats(null);
            }
            if (\array_key_exists('cpu_stats', $data) && $data['cpu_stats'] !== null) {
                $object->setCpuStats($this->denormalizer->denormalize($data['cpu_stats'], \Vendor\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
            }
            elseif (\array_key_exists('cpu_stats', $data) && $data['cpu_stats'] === null) {
                $object->setCpuStats(null);
            }
            if (\array_key_exists('precpu_stats', $data) && $data['precpu_stats'] !== null) {
                $object->setPrecpuStats($this->denormalizer->denormalize($data['precpu_stats'], \Vendor\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
            }
            elseif (\array_key_exists('precpu_stats', $data) && $data['precpu_stats'] === null) {
                $object->setPrecpuStats(null);
            }
            if (\array_key_exists('memory_stats', $data)) {
                $object->setMemoryStats($this->denormalizer->denormalize($data['memory_stats'], \Vendor\Library\Generated\Model\ContainerMemoryStats::class, 'json', $context));
            }
            if (\array_key_exists('networks', $data) && $data['networks'] !== null) {
                $object->setNetworks($data['networks']);
            }
            elseif (\array_key_exists('networks', $data) && $data['networks'] === null) {
                $object->setNetworks(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('read') && null !== $object->getRead()) {
                $data['read'] = $object->getRead()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('preread') && null !== $object->getPreread()) {
                $data['preread'] = $object->getPreread()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('pidsStats') && null !== $object->getPidsStats()) {
                $data['pids_stats'] = $this->normalizer->normalize($object->getPidsStats(), 'json', $context);
            }
            if ($object->isInitialized('blkioStats') && null !== $object->getBlkioStats()) {
                $data['blkio_stats'] = $this->normalizer->normalize($object->getBlkioStats(), 'json', $context);
            }
            if ($object->isInitialized('numProcs') && null !== $object->getNumProcs()) {
                $data['num_procs'] = $object->getNumProcs();
            }
            if ($object->isInitialized('storageStats') && null !== $object->getStorageStats()) {
                $data['storage_stats'] = $this->normalizer->normalize($object->getStorageStats(), 'json', $context);
            }
            if ($object->isInitialized('cpuStats') && null !== $object->getCpuStats()) {
                $data['cpu_stats'] = $this->normalizer->normalize($object->getCpuStats(), 'json', $context);
            }
            if ($object->isInitialized('precpuStats') && null !== $object->getPrecpuStats()) {
                $data['precpu_stats'] = $this->normalizer->normalize($object->getPrecpuStats(), 'json', $context);
            }
            if ($object->isInitialized('memoryStats') && null !== $object->getMemoryStats()) {
                $data['memory_stats'] = $this->normalizer->normalize($object->getMemoryStats(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $data['networks'] = $object->getNetworks();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerStatsResponse::class => false];
        }
    }
} else {
    class ContainerStatsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerStatsResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerStatsResponse::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerStatsResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('read', $data)) {
                $object->setRead(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['read']));
            }
            if (\array_key_exists('preread', $data)) {
                $object->setPreread(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['preread']));
            }
            if (\array_key_exists('pids_stats', $data) && $data['pids_stats'] !== null) {
                $object->setPidsStats($this->denormalizer->denormalize($data['pids_stats'], \Vendor\Library\Generated\Model\ContainerPidsStats::class, 'json', $context));
            }
            elseif (\array_key_exists('pids_stats', $data) && $data['pids_stats'] === null) {
                $object->setPidsStats(null);
            }
            if (\array_key_exists('blkio_stats', $data) && $data['blkio_stats'] !== null) {
                $object->setBlkioStats($this->denormalizer->denormalize($data['blkio_stats'], \Vendor\Library\Generated\Model\ContainerBlkioStats::class, 'json', $context));
            }
            elseif (\array_key_exists('blkio_stats', $data) && $data['blkio_stats'] === null) {
                $object->setBlkioStats(null);
            }
            if (\array_key_exists('num_procs', $data)) {
                $object->setNumProcs($data['num_procs']);
            }
            if (\array_key_exists('storage_stats', $data) && $data['storage_stats'] !== null) {
                $object->setStorageStats($this->denormalizer->denormalize($data['storage_stats'], \Vendor\Library\Generated\Model\ContainerStorageStats::class, 'json', $context));
            }
            elseif (\array_key_exists('storage_stats', $data) && $data['storage_stats'] === null) {
                $object->setStorageStats(null);
            }
            if (\array_key_exists('cpu_stats', $data) && $data['cpu_stats'] !== null) {
                $object->setCpuStats($this->denormalizer->denormalize($data['cpu_stats'], \Vendor\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
            }
            elseif (\array_key_exists('cpu_stats', $data) && $data['cpu_stats'] === null) {
                $object->setCpuStats(null);
            }
            if (\array_key_exists('precpu_stats', $data) && $data['precpu_stats'] !== null) {
                $object->setPrecpuStats($this->denormalizer->denormalize($data['precpu_stats'], \Vendor\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
            }
            elseif (\array_key_exists('precpu_stats', $data) && $data['precpu_stats'] === null) {
                $object->setPrecpuStats(null);
            }
            if (\array_key_exists('memory_stats', $data)) {
                $object->setMemoryStats($this->denormalizer->denormalize($data['memory_stats'], \Vendor\Library\Generated\Model\ContainerMemoryStats::class, 'json', $context));
            }
            if (\array_key_exists('networks', $data) && $data['networks'] !== null) {
                $object->setNetworks($data['networks']);
            }
            elseif (\array_key_exists('networks', $data) && $data['networks'] === null) {
                $object->setNetworks(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('read') && null !== $object->getRead()) {
                $data['read'] = $object->getRead()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('preread') && null !== $object->getPreread()) {
                $data['preread'] = $object->getPreread()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('pidsStats') && null !== $object->getPidsStats()) {
                $data['pids_stats'] = $this->normalizer->normalize($object->getPidsStats(), 'json', $context);
            }
            if ($object->isInitialized('blkioStats') && null !== $object->getBlkioStats()) {
                $data['blkio_stats'] = $this->normalizer->normalize($object->getBlkioStats(), 'json', $context);
            }
            if ($object->isInitialized('numProcs') && null !== $object->getNumProcs()) {
                $data['num_procs'] = $object->getNumProcs();
            }
            if ($object->isInitialized('storageStats') && null !== $object->getStorageStats()) {
                $data['storage_stats'] = $this->normalizer->normalize($object->getStorageStats(), 'json', $context);
            }
            if ($object->isInitialized('cpuStats') && null !== $object->getCpuStats()) {
                $data['cpu_stats'] = $this->normalizer->normalize($object->getCpuStats(), 'json', $context);
            }
            if ($object->isInitialized('precpuStats') && null !== $object->getPrecpuStats()) {
                $data['precpu_stats'] = $this->normalizer->normalize($object->getPrecpuStats(), 'json', $context);
            }
            if ($object->isInitialized('memoryStats') && null !== $object->getMemoryStats()) {
                $data['memory_stats'] = $this->normalizer->normalize($object->getMemoryStats(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $data['networks'] = $object->getNetworks();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerStatsResponse::class => false];
        }
    }
}