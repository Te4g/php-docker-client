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
    class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Plugin::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Plugin::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Plugin();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('Enabled', $data)) {
                $object->setEnabled($data['Enabled']);
            }
            if (\array_key_exists('Settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['Settings'], \Vendor\Library\Generated\Model\PluginSettings::class, 'json', $context));
            }
            if (\array_key_exists('PluginReference', $data)) {
                $object->setPluginReference($data['PluginReference']);
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \Vendor\Library\Generated\Model\PluginConfig::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            $data['Name'] = $object->getName();
            $data['Enabled'] = $object->getEnabled();
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
                $data['PluginReference'] = $object->getPluginReference();
            }
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Plugin::class => false];
        }
    }
} else {
    class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Plugin::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Plugin::class;
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
            $object = new \Vendor\Library\Generated\Model\Plugin();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('Enabled', $data)) {
                $object->setEnabled($data['Enabled']);
            }
            if (\array_key_exists('Settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['Settings'], \Vendor\Library\Generated\Model\PluginSettings::class, 'json', $context));
            }
            if (\array_key_exists('PluginReference', $data)) {
                $object->setPluginReference($data['PluginReference']);
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \Vendor\Library\Generated\Model\PluginConfig::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            $data['Name'] = $object->getName();
            $data['Enabled'] = $object->getEnabled();
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
                $data['PluginReference'] = $object->getPluginReference();
            }
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Plugin::class => false];
        }
    }
}