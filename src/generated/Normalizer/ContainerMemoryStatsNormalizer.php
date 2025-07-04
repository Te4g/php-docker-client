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
    class ContainerMemoryStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerMemoryStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerMemoryStats::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerMemoryStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('usage', $data) && $data['usage'] !== null) {
                $object->setUsage($data['usage']);
            }
            elseif (\array_key_exists('usage', $data) && $data['usage'] === null) {
                $object->setUsage(null);
            }
            if (\array_key_exists('max_usage', $data) && $data['max_usage'] !== null) {
                $object->setMaxUsage($data['max_usage']);
            }
            elseif (\array_key_exists('max_usage', $data) && $data['max_usage'] === null) {
                $object->setMaxUsage(null);
            }
            if (\array_key_exists('stats', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['stats'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setStats($values);
            }
            if (\array_key_exists('failcnt', $data) && $data['failcnt'] !== null) {
                $object->setFailcnt($data['failcnt']);
            }
            elseif (\array_key_exists('failcnt', $data) && $data['failcnt'] === null) {
                $object->setFailcnt(null);
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($data['limit']);
            }
            elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('commitbytes', $data) && $data['commitbytes'] !== null) {
                $object->setCommitbytes($data['commitbytes']);
            }
            elseif (\array_key_exists('commitbytes', $data) && $data['commitbytes'] === null) {
                $object->setCommitbytes(null);
            }
            if (\array_key_exists('commitpeakbytes', $data) && $data['commitpeakbytes'] !== null) {
                $object->setCommitpeakbytes($data['commitpeakbytes']);
            }
            elseif (\array_key_exists('commitpeakbytes', $data) && $data['commitpeakbytes'] === null) {
                $object->setCommitpeakbytes(null);
            }
            if (\array_key_exists('privateworkingset', $data) && $data['privateworkingset'] !== null) {
                $object->setPrivateworkingset($data['privateworkingset']);
            }
            elseif (\array_key_exists('privateworkingset', $data) && $data['privateworkingset'] === null) {
                $object->setPrivateworkingset(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('usage') && null !== $object->getUsage()) {
                $data['usage'] = $object->getUsage();
            }
            if ($object->isInitialized('maxUsage') && null !== $object->getMaxUsage()) {
                $data['max_usage'] = $object->getMaxUsage();
            }
            if ($object->isInitialized('stats') && null !== $object->getStats()) {
                $values = [];
                foreach ($object->getStats() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['stats'] = $values;
            }
            if ($object->isInitialized('failcnt') && null !== $object->getFailcnt()) {
                $data['failcnt'] = $object->getFailcnt();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('commitbytes') && null !== $object->getCommitbytes()) {
                $data['commitbytes'] = $object->getCommitbytes();
            }
            if ($object->isInitialized('commitpeakbytes') && null !== $object->getCommitpeakbytes()) {
                $data['commitpeakbytes'] = $object->getCommitpeakbytes();
            }
            if ($object->isInitialized('privateworkingset') && null !== $object->getPrivateworkingset()) {
                $data['privateworkingset'] = $object->getPrivateworkingset();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerMemoryStats::class => false];
        }
    }
} else {
    class ContainerMemoryStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerMemoryStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerMemoryStats::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerMemoryStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('usage', $data) && $data['usage'] !== null) {
                $object->setUsage($data['usage']);
            }
            elseif (\array_key_exists('usage', $data) && $data['usage'] === null) {
                $object->setUsage(null);
            }
            if (\array_key_exists('max_usage', $data) && $data['max_usage'] !== null) {
                $object->setMaxUsage($data['max_usage']);
            }
            elseif (\array_key_exists('max_usage', $data) && $data['max_usage'] === null) {
                $object->setMaxUsage(null);
            }
            if (\array_key_exists('stats', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['stats'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setStats($values);
            }
            if (\array_key_exists('failcnt', $data) && $data['failcnt'] !== null) {
                $object->setFailcnt($data['failcnt']);
            }
            elseif (\array_key_exists('failcnt', $data) && $data['failcnt'] === null) {
                $object->setFailcnt(null);
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($data['limit']);
            }
            elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('commitbytes', $data) && $data['commitbytes'] !== null) {
                $object->setCommitbytes($data['commitbytes']);
            }
            elseif (\array_key_exists('commitbytes', $data) && $data['commitbytes'] === null) {
                $object->setCommitbytes(null);
            }
            if (\array_key_exists('commitpeakbytes', $data) && $data['commitpeakbytes'] !== null) {
                $object->setCommitpeakbytes($data['commitpeakbytes']);
            }
            elseif (\array_key_exists('commitpeakbytes', $data) && $data['commitpeakbytes'] === null) {
                $object->setCommitpeakbytes(null);
            }
            if (\array_key_exists('privateworkingset', $data) && $data['privateworkingset'] !== null) {
                $object->setPrivateworkingset($data['privateworkingset']);
            }
            elseif (\array_key_exists('privateworkingset', $data) && $data['privateworkingset'] === null) {
                $object->setPrivateworkingset(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('usage') && null !== $object->getUsage()) {
                $data['usage'] = $object->getUsage();
            }
            if ($object->isInitialized('maxUsage') && null !== $object->getMaxUsage()) {
                $data['max_usage'] = $object->getMaxUsage();
            }
            if ($object->isInitialized('stats') && null !== $object->getStats()) {
                $values = [];
                foreach ($object->getStats() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['stats'] = $values;
            }
            if ($object->isInitialized('failcnt') && null !== $object->getFailcnt()) {
                $data['failcnt'] = $object->getFailcnt();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('commitbytes') && null !== $object->getCommitbytes()) {
                $data['commitbytes'] = $object->getCommitbytes();
            }
            if ($object->isInitialized('commitpeakbytes') && null !== $object->getCommitpeakbytes()) {
                $data['commitpeakbytes'] = $object->getCommitpeakbytes();
            }
            if ($object->isInitialized('privateworkingset') && null !== $object->getPrivateworkingset()) {
                $data['privateworkingset'] = $object->getPrivateworkingset();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerMemoryStats::class => false];
        }
    }
}