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
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\RegistryServiceConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\RegistryServiceConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\RegistryServiceConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data)) {
                $values = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setInsecureRegistryCIDRs($values);
            }
            if (\array_key_exists('IndexConfigs', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_1) {
                    $values_1[$key] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\IndexInfo::class, 'json', $context);
                }
                $object->setIndexConfigs($values_1);
            }
            if (\array_key_exists('Mirrors', $data)) {
                $values_2 = [];
                foreach ($data['Mirrors'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setMirrors($values_2);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['InsecureRegistryCIDRs'] = $values;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_1 = [];
                foreach ($object->getIndexConfigs() as $key => $value_1) {
                    $values_1[$key] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['IndexConfigs'] = $values_1;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_2 = [];
                foreach ($object->getMirrors() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Mirrors'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\RegistryServiceConfig::class => false];
        }
    }
} else {
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\RegistryServiceConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\RegistryServiceConfig::class;
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
            $object = new \Vendor\Library\Generated\Model\RegistryServiceConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data)) {
                $values = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setInsecureRegistryCIDRs($values);
            }
            if (\array_key_exists('IndexConfigs', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_1) {
                    $values_1[$key] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\IndexInfo::class, 'json', $context);
                }
                $object->setIndexConfigs($values_1);
            }
            if (\array_key_exists('Mirrors', $data)) {
                $values_2 = [];
                foreach ($data['Mirrors'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setMirrors($values_2);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['InsecureRegistryCIDRs'] = $values;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_1 = [];
                foreach ($object->getIndexConfigs() as $key => $value_1) {
                    $values_1[$key] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['IndexConfigs'] = $values_1;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_2 = [];
                foreach ($object->getMirrors() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Mirrors'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\RegistryServiceConfig::class => false];
        }
    }
}