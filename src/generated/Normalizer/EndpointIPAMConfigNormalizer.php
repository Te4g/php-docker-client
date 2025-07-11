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
    class EndpointIPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\EndpointIPAMConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\EndpointIPAMConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\EndpointIPAMConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IPv4Address', $data)) {
                $object->setIPv4Address($data['IPv4Address']);
            }
            if (\array_key_exists('IPv6Address', $data)) {
                $object->setIPv6Address($data['IPv6Address']);
            }
            if (\array_key_exists('LinkLocalIPs', $data)) {
                $values = [];
                foreach ($data['LinkLocalIPs'] as $value) {
                    $values[] = $value;
                }
                $object->setLinkLocalIPs($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iPv4Address') && null !== $object->getIPv4Address()) {
                $data['IPv4Address'] = $object->getIPv4Address();
            }
            if ($object->isInitialized('iPv6Address') && null !== $object->getIPv6Address()) {
                $data['IPv6Address'] = $object->getIPv6Address();
            }
            if ($object->isInitialized('linkLocalIPs') && null !== $object->getLinkLocalIPs()) {
                $values = [];
                foreach ($object->getLinkLocalIPs() as $value) {
                    $values[] = $value;
                }
                $data['LinkLocalIPs'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\EndpointIPAMConfig::class => false];
        }
    }
} else {
    class EndpointIPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\EndpointIPAMConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\EndpointIPAMConfig::class;
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
            $object = new \Vendor\Library\Generated\Model\EndpointIPAMConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IPv4Address', $data)) {
                $object->setIPv4Address($data['IPv4Address']);
            }
            if (\array_key_exists('IPv6Address', $data)) {
                $object->setIPv6Address($data['IPv6Address']);
            }
            if (\array_key_exists('LinkLocalIPs', $data)) {
                $values = [];
                foreach ($data['LinkLocalIPs'] as $value) {
                    $values[] = $value;
                }
                $object->setLinkLocalIPs($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iPv4Address') && null !== $object->getIPv4Address()) {
                $data['IPv4Address'] = $object->getIPv4Address();
            }
            if ($object->isInitialized('iPv6Address') && null !== $object->getIPv6Address()) {
                $data['IPv6Address'] = $object->getIPv6Address();
            }
            if ($object->isInitialized('linkLocalIPs') && null !== $object->getLinkLocalIPs()) {
                $values = [];
                foreach ($object->getLinkLocalIPs() as $value) {
                    $values[] = $value;
                }
                $data['LinkLocalIPs'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\EndpointIPAMConfig::class => false];
        }
    }
}