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
    class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\NetworkSettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\NetworkSettings::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\NetworkSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Bridge', $data)) {
                $object->setBridge($data['Bridge']);
            }
            if (\array_key_exists('SandboxID', $data)) {
                $object->setSandboxID($data['SandboxID']);
            }
            if (\array_key_exists('HairpinMode', $data)) {
                $object->setHairpinMode($data['HairpinMode']);
            }
            if (\array_key_exists('LinkLocalIPv6Address', $data)) {
                $object->setLinkLocalIPv6Address($data['LinkLocalIPv6Address']);
            }
            if (\array_key_exists('LinkLocalIPv6PrefixLen', $data)) {
                $object->setLinkLocalIPv6PrefixLen($data['LinkLocalIPv6PrefixLen']);
            }
            if (\array_key_exists('Ports', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Ports'] as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\PortBinding::class, 'json', $context);
                    }
                    $values[$key] = $values_1;
                }
                $object->setPorts($values);
            }
            if (\array_key_exists('SandboxKey', $data)) {
                $object->setSandboxKey($data['SandboxKey']);
            }
            if (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] !== null) {
                $values_2 = [];
                foreach ($data['SecondaryIPAddresses'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Vendor\Library\Generated\Model\Address::class, 'json', $context);
                }
                $object->setSecondaryIPAddresses($values_2);
            }
            elseif (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] === null) {
                $object->setSecondaryIPAddresses(null);
            }
            if (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] !== null) {
                $values_3 = [];
                foreach ($data['SecondaryIPv6Addresses'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\Address::class, 'json', $context);
                }
                $object->setSecondaryIPv6Addresses($values_3);
            }
            elseif (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] === null) {
                $object->setSecondaryIPv6Addresses(null);
            }
            if (\array_key_exists('EndpointID', $data)) {
                $object->setEndpointID($data['EndpointID']);
            }
            if (\array_key_exists('Gateway', $data)) {
                $object->setGateway($data['Gateway']);
            }
            if (\array_key_exists('GlobalIPv6Address', $data)) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            }
            if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            }
            if (\array_key_exists('IPAddress', $data)) {
                $object->setIPAddress($data['IPAddress']);
            }
            if (\array_key_exists('IPPrefixLen', $data)) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
            }
            if (\array_key_exists('IPv6Gateway', $data)) {
                $object->setIPv6Gateway($data['IPv6Gateway']);
            }
            if (\array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
            }
            if (\array_key_exists('Networks', $data)) {
                $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Networks'] as $key_1 => $value_4) {
                    $values_4[$key_1] = $this->denormalizer->denormalize($value_4, \Vendor\Library\Generated\Model\EndpointSettings::class, 'json', $context);
                }
                $object->setNetworks($values_4);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bridge') && null !== $object->getBridge()) {
                $data['Bridge'] = $object->getBridge();
            }
            if ($object->isInitialized('sandboxID') && null !== $object->getSandboxID()) {
                $data['SandboxID'] = $object->getSandboxID();
            }
            if ($object->isInitialized('hairpinMode') && null !== $object->getHairpinMode()) {
                $data['HairpinMode'] = $object->getHairpinMode();
            }
            if ($object->isInitialized('linkLocalIPv6Address') && null !== $object->getLinkLocalIPv6Address()) {
                $data['LinkLocalIPv6Address'] = $object->getLinkLocalIPv6Address();
            }
            if ($object->isInitialized('linkLocalIPv6PrefixLen') && null !== $object->getLinkLocalIPv6PrefixLen()) {
                $data['LinkLocalIPv6PrefixLen'] = $object->getLinkLocalIPv6PrefixLen();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                    }
                    $values[$key] = $values_1;
                }
                $data['Ports'] = $values;
            }
            if ($object->isInitialized('sandboxKey') && null !== $object->getSandboxKey()) {
                $data['SandboxKey'] = $object->getSandboxKey();
            }
            if ($object->isInitialized('secondaryIPAddresses') && null !== $object->getSecondaryIPAddresses()) {
                $values_2 = [];
                foreach ($object->getSecondaryIPAddresses() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['SecondaryIPAddresses'] = $values_2;
            }
            if ($object->isInitialized('secondaryIPv6Addresses') && null !== $object->getSecondaryIPv6Addresses()) {
                $values_3 = [];
                foreach ($object->getSecondaryIPv6Addresses() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['SecondaryIPv6Addresses'] = $values_3;
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_4 = [];
                foreach ($object->getNetworks() as $key_1 => $value_4) {
                    $values_4[$key_1] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Networks'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\NetworkSettings::class => false];
        }
    }
} else {
    class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\NetworkSettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\NetworkSettings::class;
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
            $object = new \Vendor\Library\Generated\Model\NetworkSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Bridge', $data)) {
                $object->setBridge($data['Bridge']);
            }
            if (\array_key_exists('SandboxID', $data)) {
                $object->setSandboxID($data['SandboxID']);
            }
            if (\array_key_exists('HairpinMode', $data)) {
                $object->setHairpinMode($data['HairpinMode']);
            }
            if (\array_key_exists('LinkLocalIPv6Address', $data)) {
                $object->setLinkLocalIPv6Address($data['LinkLocalIPv6Address']);
            }
            if (\array_key_exists('LinkLocalIPv6PrefixLen', $data)) {
                $object->setLinkLocalIPv6PrefixLen($data['LinkLocalIPv6PrefixLen']);
            }
            if (\array_key_exists('Ports', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Ports'] as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\PortBinding::class, 'json', $context);
                    }
                    $values[$key] = $values_1;
                }
                $object->setPorts($values);
            }
            if (\array_key_exists('SandboxKey', $data)) {
                $object->setSandboxKey($data['SandboxKey']);
            }
            if (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] !== null) {
                $values_2 = [];
                foreach ($data['SecondaryIPAddresses'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Vendor\Library\Generated\Model\Address::class, 'json', $context);
                }
                $object->setSecondaryIPAddresses($values_2);
            }
            elseif (\array_key_exists('SecondaryIPAddresses', $data) && $data['SecondaryIPAddresses'] === null) {
                $object->setSecondaryIPAddresses(null);
            }
            if (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] !== null) {
                $values_3 = [];
                foreach ($data['SecondaryIPv6Addresses'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\Address::class, 'json', $context);
                }
                $object->setSecondaryIPv6Addresses($values_3);
            }
            elseif (\array_key_exists('SecondaryIPv6Addresses', $data) && $data['SecondaryIPv6Addresses'] === null) {
                $object->setSecondaryIPv6Addresses(null);
            }
            if (\array_key_exists('EndpointID', $data)) {
                $object->setEndpointID($data['EndpointID']);
            }
            if (\array_key_exists('Gateway', $data)) {
                $object->setGateway($data['Gateway']);
            }
            if (\array_key_exists('GlobalIPv6Address', $data)) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            }
            if (\array_key_exists('GlobalIPv6PrefixLen', $data)) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            }
            if (\array_key_exists('IPAddress', $data)) {
                $object->setIPAddress($data['IPAddress']);
            }
            if (\array_key_exists('IPPrefixLen', $data)) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
            }
            if (\array_key_exists('IPv6Gateway', $data)) {
                $object->setIPv6Gateway($data['IPv6Gateway']);
            }
            if (\array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
            }
            if (\array_key_exists('Networks', $data)) {
                $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Networks'] as $key_1 => $value_4) {
                    $values_4[$key_1] = $this->denormalizer->denormalize($value_4, \Vendor\Library\Generated\Model\EndpointSettings::class, 'json', $context);
                }
                $object->setNetworks($values_4);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bridge') && null !== $object->getBridge()) {
                $data['Bridge'] = $object->getBridge();
            }
            if ($object->isInitialized('sandboxID') && null !== $object->getSandboxID()) {
                $data['SandboxID'] = $object->getSandboxID();
            }
            if ($object->isInitialized('hairpinMode') && null !== $object->getHairpinMode()) {
                $data['HairpinMode'] = $object->getHairpinMode();
            }
            if ($object->isInitialized('linkLocalIPv6Address') && null !== $object->getLinkLocalIPv6Address()) {
                $data['LinkLocalIPv6Address'] = $object->getLinkLocalIPv6Address();
            }
            if ($object->isInitialized('linkLocalIPv6PrefixLen') && null !== $object->getLinkLocalIPv6PrefixLen()) {
                $data['LinkLocalIPv6PrefixLen'] = $object->getLinkLocalIPv6PrefixLen();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                    }
                    $values[$key] = $values_1;
                }
                $data['Ports'] = $values;
            }
            if ($object->isInitialized('sandboxKey') && null !== $object->getSandboxKey()) {
                $data['SandboxKey'] = $object->getSandboxKey();
            }
            if ($object->isInitialized('secondaryIPAddresses') && null !== $object->getSecondaryIPAddresses()) {
                $values_2 = [];
                foreach ($object->getSecondaryIPAddresses() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['SecondaryIPAddresses'] = $values_2;
            }
            if ($object->isInitialized('secondaryIPv6Addresses') && null !== $object->getSecondaryIPv6Addresses()) {
                $values_3 = [];
                foreach ($object->getSecondaryIPv6Addresses() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['SecondaryIPv6Addresses'] = $values_3;
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_4 = [];
                foreach ($object->getNetworks() as $key_1 => $value_4) {
                    $values_4[$key_1] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Networks'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\NetworkSettings::class => false];
        }
    }
}