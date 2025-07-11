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
    class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\TaskSpecPluginSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('Remote', $data)) {
                $object->setRemote($data['Remote']);
            }
            if (\array_key_exists('Disabled', $data)) {
                $object->setDisabled($data['Disabled']);
            }
            if (\array_key_exists('PluginPrivilege', $data)) {
                $values = [];
                foreach ($data['PluginPrivilege'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\PluginPrivilege::class, 'json', $context);
                }
                $object->setPluginPrivilege($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('remote') && null !== $object->getRemote()) {
                $data['Remote'] = $object->getRemote();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['Disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('pluginPrivilege') && null !== $object->getPluginPrivilege()) {
                $values = [];
                foreach ($object->getPluginPrivilege() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['PluginPrivilege'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskSpecPluginSpec::class => false];
        }
    }
} else {
    class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class;
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
            $object = new \Vendor\Library\Generated\Model\TaskSpecPluginSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('Remote', $data)) {
                $object->setRemote($data['Remote']);
            }
            if (\array_key_exists('Disabled', $data)) {
                $object->setDisabled($data['Disabled']);
            }
            if (\array_key_exists('PluginPrivilege', $data)) {
                $values = [];
                foreach ($data['PluginPrivilege'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\PluginPrivilege::class, 'json', $context);
                }
                $object->setPluginPrivilege($values);
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
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('remote') && null !== $object->getRemote()) {
                $data['Remote'] = $object->getRemote();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['Disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('pluginPrivilege') && null !== $object->getPluginPrivilege()) {
                $values = [];
                foreach ($object->getPluginPrivilege() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['PluginPrivilege'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskSpecPluginSpec::class => false];
        }
    }
}