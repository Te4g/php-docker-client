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
    class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('File', $data)) {
                $object->setFile($this->denormalizer->denormalize($data['File'], \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class, 'json', $context));
            }
            if (\array_key_exists('Runtime', $data)) {
                $object->setRuntime($data['Runtime']);
            }
            if (\array_key_exists('ConfigID', $data)) {
                $object->setConfigID($data['ConfigID']);
            }
            if (\array_key_exists('ConfigName', $data)) {
                $object->setConfigName($data['ConfigName']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('file') && null !== $object->getFile()) {
                $data['File'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('configID') && null !== $object->getConfigID()) {
                $data['ConfigID'] = $object->getConfigID();
            }
            if ($object->isInitialized('configName') && null !== $object->getConfigName()) {
                $data['ConfigName'] = $object->getConfigName();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => false];
        }
    }
} else {
    class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class;
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
            $object = new \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('File', $data)) {
                $object->setFile($this->denormalizer->denormalize($data['File'], \Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class, 'json', $context));
            }
            if (\array_key_exists('Runtime', $data)) {
                $object->setRuntime($data['Runtime']);
            }
            if (\array_key_exists('ConfigID', $data)) {
                $object->setConfigID($data['ConfigID']);
            }
            if (\array_key_exists('ConfigName', $data)) {
                $object->setConfigName($data['ConfigName']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('file') && null !== $object->getFile()) {
                $data['File'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('configID') && null !== $object->getConfigID()) {
                $data['ConfigID'] = $object->getConfigID();
            }
            if ($object->isInitialized('configName') && null !== $object->getConfigName()) {
                $data['ConfigName'] = $object->getConfigName();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => false];
        }
    }
}