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
    class ServiceEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ServiceEndpoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ServiceEndpoint::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ServiceEndpoint();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Vendor\Library\Generated\Model\EndpointSpec::class, 'json', $context));
            }
            if (\array_key_exists('Ports', $data)) {
                $values = [];
                foreach ($data['Ports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\EndpointPortConfig::class, 'json', $context);
                }
                $object->setPorts($values);
            }
            if (\array_key_exists('VirtualIPs', $data)) {
                $values_1 = [];
                foreach ($data['VirtualIPs'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class, 'json', $context);
                }
                $object->setVirtualIPs($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Ports'] = $values;
            }
            if ($object->isInitialized('virtualIPs') && null !== $object->getVirtualIPs()) {
                $values_1 = [];
                foreach ($object->getVirtualIPs() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['VirtualIPs'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ServiceEndpoint::class => false];
        }
    }
} else {
    class ServiceEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ServiceEndpoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ServiceEndpoint::class;
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
            $object = new \Vendor\Library\Generated\Model\ServiceEndpoint();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Vendor\Library\Generated\Model\EndpointSpec::class, 'json', $context));
            }
            if (\array_key_exists('Ports', $data)) {
                $values = [];
                foreach ($data['Ports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\EndpointPortConfig::class, 'json', $context);
                }
                $object->setPorts($values);
            }
            if (\array_key_exists('VirtualIPs', $data)) {
                $values_1 = [];
                foreach ($data['VirtualIPs'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class, 'json', $context);
                }
                $object->setVirtualIPs($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Ports'] = $values;
            }
            if ($object->isInitialized('virtualIPs') && null !== $object->getVirtualIPs()) {
                $values_1 = [];
                foreach ($object->getVirtualIPs() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['VirtualIPs'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ServiceEndpoint::class => false];
        }
    }
}