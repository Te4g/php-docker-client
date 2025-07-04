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
    class ContainerNetworkStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerNetworkStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerNetworkStats::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerNetworkStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rx_bytes', $data)) {
                $object->setRxBytes($data['rx_bytes']);
            }
            if (\array_key_exists('rx_packets', $data)) {
                $object->setRxPackets($data['rx_packets']);
            }
            if (\array_key_exists('rx_errors', $data)) {
                $object->setRxErrors($data['rx_errors']);
            }
            if (\array_key_exists('rx_dropped', $data)) {
                $object->setRxDropped($data['rx_dropped']);
            }
            if (\array_key_exists('tx_bytes', $data)) {
                $object->setTxBytes($data['tx_bytes']);
            }
            if (\array_key_exists('tx_packets', $data)) {
                $object->setTxPackets($data['tx_packets']);
            }
            if (\array_key_exists('tx_errors', $data)) {
                $object->setTxErrors($data['tx_errors']);
            }
            if (\array_key_exists('tx_dropped', $data)) {
                $object->setTxDropped($data['tx_dropped']);
            }
            if (\array_key_exists('endpoint_id', $data) && $data['endpoint_id'] !== null) {
                $object->setEndpointId($data['endpoint_id']);
            }
            elseif (\array_key_exists('endpoint_id', $data) && $data['endpoint_id'] === null) {
                $object->setEndpointId(null);
            }
            if (\array_key_exists('instance_id', $data) && $data['instance_id'] !== null) {
                $object->setInstanceId($data['instance_id']);
            }
            elseif (\array_key_exists('instance_id', $data) && $data['instance_id'] === null) {
                $object->setInstanceId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('rxBytes') && null !== $object->getRxBytes()) {
                $data['rx_bytes'] = $object->getRxBytes();
            }
            if ($object->isInitialized('rxPackets') && null !== $object->getRxPackets()) {
                $data['rx_packets'] = $object->getRxPackets();
            }
            if ($object->isInitialized('rxErrors') && null !== $object->getRxErrors()) {
                $data['rx_errors'] = $object->getRxErrors();
            }
            if ($object->isInitialized('rxDropped') && null !== $object->getRxDropped()) {
                $data['rx_dropped'] = $object->getRxDropped();
            }
            if ($object->isInitialized('txBytes') && null !== $object->getTxBytes()) {
                $data['tx_bytes'] = $object->getTxBytes();
            }
            if ($object->isInitialized('txPackets') && null !== $object->getTxPackets()) {
                $data['tx_packets'] = $object->getTxPackets();
            }
            if ($object->isInitialized('txErrors') && null !== $object->getTxErrors()) {
                $data['tx_errors'] = $object->getTxErrors();
            }
            if ($object->isInitialized('txDropped') && null !== $object->getTxDropped()) {
                $data['tx_dropped'] = $object->getTxDropped();
            }
            if ($object->isInitialized('endpointId') && null !== $object->getEndpointId()) {
                $data['endpoint_id'] = $object->getEndpointId();
            }
            if ($object->isInitialized('instanceId') && null !== $object->getInstanceId()) {
                $data['instance_id'] = $object->getInstanceId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerNetworkStats::class => false];
        }
    }
} else {
    class ContainerNetworkStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerNetworkStats::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerNetworkStats::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerNetworkStats();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rx_bytes', $data)) {
                $object->setRxBytes($data['rx_bytes']);
            }
            if (\array_key_exists('rx_packets', $data)) {
                $object->setRxPackets($data['rx_packets']);
            }
            if (\array_key_exists('rx_errors', $data)) {
                $object->setRxErrors($data['rx_errors']);
            }
            if (\array_key_exists('rx_dropped', $data)) {
                $object->setRxDropped($data['rx_dropped']);
            }
            if (\array_key_exists('tx_bytes', $data)) {
                $object->setTxBytes($data['tx_bytes']);
            }
            if (\array_key_exists('tx_packets', $data)) {
                $object->setTxPackets($data['tx_packets']);
            }
            if (\array_key_exists('tx_errors', $data)) {
                $object->setTxErrors($data['tx_errors']);
            }
            if (\array_key_exists('tx_dropped', $data)) {
                $object->setTxDropped($data['tx_dropped']);
            }
            if (\array_key_exists('endpoint_id', $data) && $data['endpoint_id'] !== null) {
                $object->setEndpointId($data['endpoint_id']);
            }
            elseif (\array_key_exists('endpoint_id', $data) && $data['endpoint_id'] === null) {
                $object->setEndpointId(null);
            }
            if (\array_key_exists('instance_id', $data) && $data['instance_id'] !== null) {
                $object->setInstanceId($data['instance_id']);
            }
            elseif (\array_key_exists('instance_id', $data) && $data['instance_id'] === null) {
                $object->setInstanceId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('rxBytes') && null !== $object->getRxBytes()) {
                $data['rx_bytes'] = $object->getRxBytes();
            }
            if ($object->isInitialized('rxPackets') && null !== $object->getRxPackets()) {
                $data['rx_packets'] = $object->getRxPackets();
            }
            if ($object->isInitialized('rxErrors') && null !== $object->getRxErrors()) {
                $data['rx_errors'] = $object->getRxErrors();
            }
            if ($object->isInitialized('rxDropped') && null !== $object->getRxDropped()) {
                $data['rx_dropped'] = $object->getRxDropped();
            }
            if ($object->isInitialized('txBytes') && null !== $object->getTxBytes()) {
                $data['tx_bytes'] = $object->getTxBytes();
            }
            if ($object->isInitialized('txPackets') && null !== $object->getTxPackets()) {
                $data['tx_packets'] = $object->getTxPackets();
            }
            if ($object->isInitialized('txErrors') && null !== $object->getTxErrors()) {
                $data['tx_errors'] = $object->getTxErrors();
            }
            if ($object->isInitialized('txDropped') && null !== $object->getTxDropped()) {
                $data['tx_dropped'] = $object->getTxDropped();
            }
            if ($object->isInitialized('endpointId') && null !== $object->getEndpointId()) {
                $data['endpoint_id'] = $object->getEndpointId();
            }
            if ($object->isInitialized('instanceId') && null !== $object->getInstanceId()) {
                $data['instance_id'] = $object->getInstanceId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerNetworkStats::class => false];
        }
    }
}