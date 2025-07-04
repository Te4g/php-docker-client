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
    class ContainerBlkioStatEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerBlkioStatEntry();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('major', $data)) {
                $object->setMajor($data['major']);
            }
            if (\array_key_exists('minor', $data)) {
                $object->setMinor($data['minor']);
            }
            if (\array_key_exists('op', $data)) {
                $object->setOp($data['op']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('major') && null !== $object->getMajor()) {
                $data['major'] = $object->getMajor();
            }
            if ($object->isInitialized('minor') && null !== $object->getMinor()) {
                $data['minor'] = $object->getMinor();
            }
            if ($object->isInitialized('op') && null !== $object->getOp()) {
                $data['op'] = $object->getOp();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class => false];
        }
    }
} else {
    class ContainerBlkioStatEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerBlkioStatEntry();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('major', $data)) {
                $object->setMajor($data['major']);
            }
            if (\array_key_exists('minor', $data)) {
                $object->setMinor($data['minor']);
            }
            if (\array_key_exists('op', $data)) {
                $object->setOp($data['op']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('major') && null !== $object->getMajor()) {
                $data['major'] = $object->getMajor();
            }
            if ($object->isInitialized('minor') && null !== $object->getMinor()) {
                $data['minor'] = $object->getMinor();
            }
            if ($object->isInitialized('op') && null !== $object->getOp()) {
                $data['op'] = $object->getOp();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerBlkioStatEntry::class => false];
        }
    }
}