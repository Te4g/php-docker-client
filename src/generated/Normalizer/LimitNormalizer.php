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
    class LimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Limit::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Limit::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Limit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NanoCPUs', $data)) {
                $object->setNanoCPUs($data['NanoCPUs']);
            }
            if (\array_key_exists('MemoryBytes', $data)) {
                $object->setMemoryBytes($data['MemoryBytes']);
            }
            if (\array_key_exists('Pids', $data)) {
                $object->setPids($data['Pids']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nanoCPUs') && null !== $object->getNanoCPUs()) {
                $data['NanoCPUs'] = $object->getNanoCPUs();
            }
            if ($object->isInitialized('memoryBytes') && null !== $object->getMemoryBytes()) {
                $data['MemoryBytes'] = $object->getMemoryBytes();
            }
            if ($object->isInitialized('pids') && null !== $object->getPids()) {
                $data['Pids'] = $object->getPids();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Limit::class => false];
        }
    }
} else {
    class LimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Limit::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Limit::class;
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
            $object = new \Vendor\Library\Generated\Model\Limit();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NanoCPUs', $data)) {
                $object->setNanoCPUs($data['NanoCPUs']);
            }
            if (\array_key_exists('MemoryBytes', $data)) {
                $object->setMemoryBytes($data['MemoryBytes']);
            }
            if (\array_key_exists('Pids', $data)) {
                $object->setPids($data['Pids']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nanoCPUs') && null !== $object->getNanoCPUs()) {
                $data['NanoCPUs'] = $object->getNanoCPUs();
            }
            if ($object->isInitialized('memoryBytes') && null !== $object->getMemoryBytes()) {
                $data['MemoryBytes'] = $object->getMemoryBytes();
            }
            if ($object->isInitialized('pids') && null !== $object->getPids()) {
                $data['Pids'] = $object->getPids();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Limit::class => false];
        }
    }
}