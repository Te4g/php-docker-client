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
    class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmSpecRaft::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmSpecRaft::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\SwarmSpecRaft();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SnapshotInterval', $data)) {
                $object->setSnapshotInterval($data['SnapshotInterval']);
            }
            if (\array_key_exists('KeepOldSnapshots', $data)) {
                $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
            }
            if (\array_key_exists('LogEntriesForSlowFollowers', $data)) {
                $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
            }
            if (\array_key_exists('ElectionTick', $data)) {
                $object->setElectionTick($data['ElectionTick']);
            }
            if (\array_key_exists('HeartbeatTick', $data)) {
                $object->setHeartbeatTick($data['HeartbeatTick']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('snapshotInterval') && null !== $object->getSnapshotInterval()) {
                $data['SnapshotInterval'] = $object->getSnapshotInterval();
            }
            if ($object->isInitialized('keepOldSnapshots') && null !== $object->getKeepOldSnapshots()) {
                $data['KeepOldSnapshots'] = $object->getKeepOldSnapshots();
            }
            if ($object->isInitialized('logEntriesForSlowFollowers') && null !== $object->getLogEntriesForSlowFollowers()) {
                $data['LogEntriesForSlowFollowers'] = $object->getLogEntriesForSlowFollowers();
            }
            if ($object->isInitialized('electionTick') && null !== $object->getElectionTick()) {
                $data['ElectionTick'] = $object->getElectionTick();
            }
            if ($object->isInitialized('heartbeatTick') && null !== $object->getHeartbeatTick()) {
                $data['HeartbeatTick'] = $object->getHeartbeatTick();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmSpecRaft::class => false];
        }
    }
} else {
    class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmSpecRaft::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmSpecRaft::class;
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
            $object = new \Vendor\Library\Generated\Model\SwarmSpecRaft();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SnapshotInterval', $data)) {
                $object->setSnapshotInterval($data['SnapshotInterval']);
            }
            if (\array_key_exists('KeepOldSnapshots', $data)) {
                $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
            }
            if (\array_key_exists('LogEntriesForSlowFollowers', $data)) {
                $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
            }
            if (\array_key_exists('ElectionTick', $data)) {
                $object->setElectionTick($data['ElectionTick']);
            }
            if (\array_key_exists('HeartbeatTick', $data)) {
                $object->setHeartbeatTick($data['HeartbeatTick']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('snapshotInterval') && null !== $object->getSnapshotInterval()) {
                $data['SnapshotInterval'] = $object->getSnapshotInterval();
            }
            if ($object->isInitialized('keepOldSnapshots') && null !== $object->getKeepOldSnapshots()) {
                $data['KeepOldSnapshots'] = $object->getKeepOldSnapshots();
            }
            if ($object->isInitialized('logEntriesForSlowFollowers') && null !== $object->getLogEntriesForSlowFollowers()) {
                $data['LogEntriesForSlowFollowers'] = $object->getLogEntriesForSlowFollowers();
            }
            if ($object->isInitialized('electionTick') && null !== $object->getElectionTick()) {
                $data['ElectionTick'] = $object->getElectionTick();
            }
            if ($object->isInitialized('heartbeatTick') && null !== $object->getHeartbeatTick()) {
                $data['HeartbeatTick'] = $object->getHeartbeatTick();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmSpecRaft::class => false];
        }
    }
}